<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InspekturController extends Controller
{
    /**
     * Konstruktor untuk menerapkan middleware.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isInspektur']);
    }

    /**
     * Menampilkan daftar tugas yang disetujui sekretaris.
     */
    public function approveInspektur()
{
    // Ambil semua tugas dengan status 'Disetujui Sekretaris' dan paginasi 10 per halaman
    $tasks = Task::where('status', 'Disetujui Sekretaris')->paginate(10);

    // Transformasi data untuk mengganti ID dalam komposisi tim dengan nama dari tabel `orang`
    $tasks->transform(function ($task) {
        $teamComposition = json_decode($task->team_composition, true);

        // Daftar kunci yang akan diubah ID menjadi nama
        $keysToReplace = ['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'];

        foreach ($keysToReplace as $key) {
            if (isset($teamComposition[$key])) {
                if (is_array($teamComposition[$key])) {
                    // Jika berupa array, ambil nama dari semua ID
                    $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                } else {
                    // Jika berupa ID tunggal, ganti dengan nama
                    $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                }
            }
        }

        // Update komposisi tim dengan nama yang sesuai
        $task->team_composition = $teamComposition;
        return $task;
    });

    // Kirim data ke view
    return view('inspektur.approve_inspektur', compact('tasks'));
}


    /**
     * Menyetujui tugas oleh inspektur.
     */
    public function approveTask($id)
    {
        $task = Task::findOrFail($id);

        // Pastikan status saat ini adalah 'Disetujui Sekretaris'
        if ($task->status !== 'Disetujui Sekretaris') {
            return redirect()->back()->with('error', 'Tugas tidak dapat disetujui.');
        }

        // Update status tugas menjadi 'Disetujui Inspektur'
        $task->status = 'Disetujui Inspektur';
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil disetujui.');
    }

    /**
     * Menolak tugas oleh inspektur.
     */
    public function rejectTask(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($request->task_id);

        // Pastikan status saat ini adalah 'Disetujui Sekretaris'
        if ($task->status !== 'Disetujui Sekretaris') {
            return redirect()->back()->with('error', 'Tugas tidak dapat ditolak.');
        }

        // Update status tugas menjadi 'Ditolak Inspektur' dan simpan alasan penolakan
        $task->status = 'Ditolak Inspektur';
        $task->rejection_reason = $request->rejection_reason; // Pastikan kolom ini ada di tabel tasks
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil ditolak.');
    }


    public function acc($id)
    {
        $pelaporan = Pelaporan::findOrFail($id);
        $pelaporan->status = 'ACC'; // Status diubah menjadi ACC
        $pelaporan->save();

        return redirect()->back()->with('success', 'Pelaporan telah di-ACC.');
    }

    public function reject(Request $request)
    {
        $pelaporan = Pelaporan::findOrFail($request->pelaporan_id);
        $pelaporan->status = 'Ditolak'; // Status diubah menjadi Ditolak
        $pelaporan->alasan_tolak = $request->alasan_tolak; // Simpan alasan penolakan
        $pelaporan->save();

        return redirect()->back()->with('success', 'Pelaporan telah ditolak dengan alasan.');
    }
}
