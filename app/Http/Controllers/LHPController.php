<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan mengimpor Storage Facade

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
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'keterangan' => 'nullable|string|max:1000',
        ]);

        $data = $validated;

        // Handle file upload
        if ($request->hasFile('lhp_file')) {
            $data['lhp_file'] = $request->file('lhp_file')->store('uploads/lhp', 'public');
        }

        LHP::create($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil dibuat.');
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
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'keterangan' => 'nullable|string|max:1000',
        ]);

        $data = $validated;

        // Handle file upload
        if ($request->hasFile('lhp_file')) {
            // Hapus file lama jika ada
            if ($lhp->lhp_file) {
                Storage::disk('public')->delete($lhp->lhp_file);
            }
            $data['lhp_file'] = $request->file('lhp_file')->store('uploads/lhp', 'public');
        }

        $lhp->update($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil diperbarui.');
    }

    /**
     * Menghapus LHP dari database.
     */
    public function destroy(LHP $lhp)
    {
        // Hapus file terkait jika ada
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
}
