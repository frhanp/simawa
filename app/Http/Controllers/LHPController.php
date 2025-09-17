<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan mengimpor Storage Facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\LhpOtp;
use Illuminate\Support\Facades\Log;
use App\Models\Notification;
use App\Models\User;


class LHPController extends Controller
{
    /**
     * Menampilkan daftar LHP.
     */
    public function index()
    {
        // Mengambil LHPs beserta task terkait dengan pagination
        $lhps = LHP::with('task')->paginate(10);
        return view('lhp.index', compact('lhps'));
    }

    /**
     * Menampilkan form untuk membuat LHP baru.
     */
    public function create()
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('lhp.create', compact('tasks'));
    }

    /**
     * Menyimpan LHP baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'required|file|mimes:pdf,doc,docx',
            'keterangan' => 'nullable|string',
        ]);

        $filePath = $request->file('lhp_file')->store('lhp_files', 'public');

        LHP::create([
            'task_id' => $request->task_id,
            'lhp_file' => $filePath,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit LHP.
     */
    public function edit(LHP $lhp)
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('lhp.edit', compact('lhp', 'tasks'));
    }

    /**
     * Memperbarui LHP di database.
     */
    public function update(Request $request, LHP $lhp)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx',
            'keterangan' => 'nullable|string',
        ]);

        $data = $request->only('task_id', 'keterangan');

        if ($request->hasFile('lhp_file')) {
            if ($lhp->lhp_file) {
                Storage::disk('public')->delete($lhp->lhp_file);
            }
            $data['lhp_file'] = $request->file('lhp_file')->store('lhp_files', 'public');
        }

        $lhp->update($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil diperbarui.');
    }

    /**
     * Menghapus LHP dari database.
     */
    public function destroy(LHP $lhp)
    {
        if ($lhp->lhp_file) {
            Storage::disk('public')->delete($lhp->lhp_file);
        }
        $lhp->delete();
        return redirect()->route('lhp.index')->with('success', 'LHP berhasil dihapus.');
    }

    public function acc($id)
    {
        $lhp = Lhp::findOrFail($id);
        $lhp->status = 'disetujui';
        $lhp->save();

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'LHP untuk tugas "' . $lhp->task->assignment_type . '" telah disetujui.',
                'url' => route('lhp.index'),
            ]);
        }

        return redirect()->route('lhp.index')->with('success', 'LHP disetujui');
    }

    public function reject(Request $request)
    {
        $request->validate([
            'reason' => 'required|string',
        ]);

        $lhp = Lhp::findOrFail($request->lhp_id);
        $lhp->status = 'ditolak';
        $lhp->reason = $request->reason; // Pastikan ada kolom 'reason' di tabel LHP
        $lhp->save();

        return redirect()->route('lhp.index')->with('success', 'LHP ditolak');
    }

    public function sendOtp(LHP $lhp)
    {
        $user = Auth::user();

        if (!$user->phone_number) {
            return response()->json(['error' => 'Nomor WhatsApp tidak ditemukan.'], 400);
        }

        $otpCode = rand(100000, 999999);
        $expiresAt = Carbon::now()->addMinutes(5);

        LhpOtp::create([
            'lhp_id' => $lhp->id,
            'user_id' => $user->id,
            'otp_code' => $otpCode,
            'expires_at' => $expiresAt,
        ]);

        try {
            Http::post('http://localhost:3000/send-message', [
                'number' => $user->phone_number,
                'message' => "Kode OTP Anda untuk melihat LHP adalah: *{$otpCode}*. Jangan berikan kode ini kepada siapapun.",
            ]);
            return response()->json(['success' => 'OTP telah dikirim ke WhatsApp Anda.']);
        } catch (\Exception $e) {
            Log::error('Tidak dapat terhubung ke Baileys API: ' . $e->getMessage());
            return response()->json(['success' => 'OTP telah dikirim (simulasi).']); // Fallback untuk development
        }
    }

    public function verifyOtp(Request $request, LHP $lhp)
    {
        $request->validate(['otp' => 'required|numeric|digits:6']);
        $user = Auth::user();

        $otpRecord = LhpOtp::where('lhp_id', $lhp->id)
            ->where('user_id', $user->id)
            ->where('otp_code', $request->otp)
            ->where('expires_at', '>', Carbon::now())
            ->latest()
            ->first();

        if ($otpRecord) {
            session(['lhp_otp_verified_' . $lhp->id => true]);
            $otpRecord->delete();
            return response()->json([
                'success' => 'OTP valid.',
                'redirect_url' => route('lhp.viewFile', $lhp->id)
            ]);
        }
        return response()->json(['error' => 'OTP salah atau sudah kedaluwarsa.'], 422);
    }

    public function viewFile(LHP $lhp)
    {
        if (!session('lhp_otp_verified_' . $lhp->id)) {
            abort(403, 'Akses ditolak. Silakan verifikasi OTP terlebih dahulu.');
        }

        session()->forget('lhp_otp_verified_' . $lhp->id);
        $filePath = storage_path('app/public/' . $lhp->lhp_file);

        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan.');
        }
        return response()->file($filePath);
    }
}
