<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Spt;
use App\Models\Task;
use App\Models\Orang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use App\Models\User;

class SekretarisController extends Controller
{
    /**
     * Konstruktor untuk menerapkan middleware.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isSekretaris']);
    }

    public function pertimbangan()
    {
        // Mengambil semua tugas dengan status 'pending' dan 'Disetujui Inspektur' dengan paginasi
        $tasks = Task::whereIn('status', ['pending', 'Disetujui Inspektur'])->paginate(10);

        // Mengolah data untuk mengganti ID dengan nama pada `team_composition`
        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);

            // Ganti ID dengan nama dari tabel `orang`
            foreach (['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'] as $key) {
                if (isset($teamComposition[$key])) {
                    if (is_array($teamComposition[$key])) {
                        // Jika datanya berupa array, cari nama untuk setiap ID
                        $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                    } else {
                        // Jika datanya berupa single ID, cari nama langsung
                        $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                    }
                }
            }

            $task->team_composition = $teamComposition;
            return $task;
        });

        // Mengirim data tugas ke view
        return view('task.pertimbangan', compact('tasks'));
    }
    // Menampilkan form input data
    public function showForm($taskId)
    {
        $task = Task::findOrFail($taskId);
        return view('tasks.create_pdf_form', compact('task'));
    }

    // Menangani data form dan menghasilkan PDF
    public function createPdfWithData(Request $request, $taskId)
    {
        // Validasi input form
        $validated = $request->validate([
            'nomor' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kepada' => 'required|string|max:255',
            'maksud' => 'required|string',
            'waktu' => 'required|string|max:255',
        ]);
        $formattedDate = Carbon::parse($validated['tanggal'])->format('d-m-Y');

        // Ambil tugas berdasarkan ID
        $task = Task::findOrFail($taskId);

        // Ambil semua data orang berdasarkan ID dari tabel 'orang'
        $orang = Orang::pluck('nama', 'id')->toArray(); // Hanya mengambil nama

        // Mengolah data komposisi tim
        $teamComposition = json_decode($task->team_composition, true);

        // Array untuk daftar petugas dalam format yang sesuai untuk tabel
        $petugas = [];

        // Loop melalui team_composition dan siapkan data petugas
        foreach ($teamComposition as $jabatan => $anggota) {
            if (is_array($anggota)) {
                // Jika ada banyak anggota dalam satu peran (array)
                foreach ($anggota as $id) {
                    $petugas[] = [
                        'nama' => $orang[$id] ?? "Tidak Ditemukan",
                        'jabatan' => ucwords(str_replace('_', ' ', $jabatan)), // Format lebih rapi
                    ];
                }
            } else {
                // Jika hanya satu anggota dalam satu peran (string)
                $petugas[] = [
                    'nama' => $orang[$anggota] ?? "Tidak Ditemukan",
                    'jabatan' => ucwords(str_replace('_', ' ', $jabatan)),
                ];
            }
        }

        // Urutan jabatan yang diinginkan
        $urutan_jabatan = [
            'Penanggung Jawab',
            'Wakil Penanggung Jawab',
            'Pengendali Teknis',
            'Ketua Tim',
            'Anggota Tim',
            'Penunjang'
        ];

        // Sorting petugas berdasarkan jabatan tertinggi
        usort($petugas, function ($a, $b) use ($urutan_jabatan) {
            return array_search($a['jabatan'], $urutan_jabatan) - array_search($b['jabatan'], $urutan_jabatan);
        });

        // Siapkan data untuk view PDF
        $data = [
            'task' => $task,
            'petugas' => $petugas, // Data petugas sudah terurut
            'nomor' => $validated['nomor'],
            'tanggal' => $formattedDate,
            'kepada' => $validated['kepada'],
            'maksud' => $validated['maksud'],
            'waktu' => $validated['waktu'],
        ];

        // Debugging (jika perlu cek urutan sebelum generate PDF)
        // dd($data);

        // Render PDF menggunakan view
        $pdf = PDF::loadView('tasks.pdf.team_composition_with_data', $data);

        // Unduh PDF
        return $pdf->stream('komposisi_tim_' . $task->id . '.pdf');
    }






    /**
     * Menyetujui tugas oleh sekretaris.
     */
    public function acceptTask($id)
    {
        $task = Task::findOrFail($id);

        // Pastikan status saat ini adalah 'pending'
        if ($task->status !== 'pending') {
            return redirect()->back()->with('error', 'Tugas tidak dapat disetujui.');
        }

        // Update status tugas menjadi 'Disetujui Sekretaris'
        $task->status = 'Disetujui Sekretaris';
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil disetujui.');
    }

    /**
     * Menolak tugas oleh sekretaris.
     */
    public function rejectTask(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($request->task_id);

        // Pastikan status saat ini adalah 'pending'
        if ($task->status !== 'pending') {
            return redirect()->back()->with('error', 'Tugas tidak dapat ditolak.');
        }

        // Update status tugas menjadi 'Ditolak Sekretaris' dan simpan alasan penolakan
        $task->status = 'Ditolak Sekretaris';
        $task->rejection_reason = $request->rejection_reason;
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil ditolak.');
    }

    public function createSPT(Task $task)
    {
        // Pastikan task ada
        // Anda bisa menambahkan pengecekan otorisasi jika diperlukan

        return view('sekretaris.spt.upload', compact('task'));
    }

    public function storeSPT(Request $request, Task $task)
    {
        // Validasi data
        $request->validate([
            'spt_file' => 'required|file|mimes:pdf,doc,docx|max:5120', // Maksimal 5MB
        ]);


        // Cek apakah file ada
        if ($request->hasFile('spt_file')) {
            $file = $request->file('spt_file');

            // Cek apakah file valid
            if (!$file->isValid()) {
                return redirect()->back()->withErrors(['spt_file' => 'File yang diunggah tidak valid.'])->withInput();
            }

            // Ganti spasi dengan garis bawah dalam nama file dan tambahkan timestamp
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());

            try {
                // Simpan file di direktori 'spt_files' menggunakan disk 'public'
                $filePath = $file->storeAs('spt_files', $fileName, 'public');

                // Simpan informasi file ke dalam database
                Spt::create([
                    'task_id' => $task->id,  // ID tugas terkait
                    'file_name' => $fileName,  // Nama file yang diunggah
                    'file_path' => $filePath,  // Path file
                    'uploaded_by' => auth()->id(),  // ID user yang mengunggah file
                ]);

                $admins = User::where('role', 'admin')->get();
                foreach ($admins as $admin) {
                    Notification::create([
                        'user_id' => $admin->id,
                        'message' => 'SPT baru untuk tugas "' . $task->assignment_type . '" telah diunggah.',
                        'url'     => route('spt.index'),
                    ]);
                }
                // --- [AKHIR MODIFIKASI] ---

                // Redirect ke halaman lain dengan pesan sukses
                return redirect()->route('pertimbangan', $task->id)->with('success', 'SPT berhasil diunggah.');
            } catch (\Exception $e) {
                // Tangani error penyimpanan file atau data
                Log::error('Error saat menyimpan file: ' . $e->getMessage());
                return redirect()->back()->withErrors(['spt_file' => 'Gagal menyimpan file atau data SPT. Silakan coba lagi.'])->withInput();
            }
        } else {
            // Jika tidak ada file yang diunggah
            return redirect()->back()->withErrors(['spt_file' => 'File SPT tidak ditemukan.'])->withInput();
        }
    }
}
