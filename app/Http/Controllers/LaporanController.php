<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Penemuan;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman laporan (HTML) atau men-download (PDF).
     */
    public function index(Request $request)
    {
        // 1. Ambil data untuk filter dropdown
        $jenisPenugasanOptions = Task::select('jenis_penugasan')->distinct()->pluck('jenis_penugasan');
        
        // Ambil tahun dari LHP
        $availableYears = DB::table('lhp')
                            ->select(DB::raw('YEAR(updated_at) as year'))
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year');
        
        $lhpStatusOptions = [
            'disetujui' => 'Selesai (Disetujui)',
            'pending' => 'Menunggu Persetujuan',
            'ditolak' => 'Ditolak',
        ];

        // 2. Query dasar (REVISI: Query ke Task, bukan Penemuan)
        $query = Task::with('lhp');

        // 3. Terapkan Filter
        // Filter Jenis Penugasan
        $query->when($request->filled('jenis_penugasan'), function ($q) use ($request) {
            $q->where('jenis_penugasan', $request->jenis_penugasan);
        });

        // Filter Tahun (berdasarkan LHP)
        $query->when($request->filled('tahun'), function ($q) use ($request) {
            $q->whereHas('lhp', function ($lhpQuery) use ($request) {
                $lhpQuery->whereYear('updated_at', $request->tahun);
            });
        });

        // Filter Bulan (berdasarkan LHP)
        $query->when($request->filled('bulan'), function ($q) use ($request) {
            $q->whereHas('lhp', function ($lhpQuery) use ($request) {
                $lhpQuery->whereMonth('updated_at', $request->bulan);
            });
        });

        // Filter Status LHP (BARU)
        $query->when($request->filled('status_lhp'), function ($q) use ($request) {
            $q->whereHas('lhp', function ($lhpQuery) use ($request) {
                $lhpQuery->where('status', $request->status_lhp);
            });
        });

        // Ambil data Task (bukan Penemuan)
        $tasks = $query->get();
        
        // Simpan filter yang sedang aktif
        $filters = $request->only(['jenis_penugasan', 'tahun', 'bulan', 'status_lhp']);

        // 4. Cek apakah minta PDF
        if ($request->has('pdf')) {
            $pdf = Pdf::loadView('laporan.pdf', [
                'tasks' => $tasks, // Kirim $tasks
                'filters' => $filters,
                'lhpStatusOptions' => $lhpStatusOptions
            ]);
            $pdf->setPaper('A4', 'portrait'); // Kembali ke portrait
            return $pdf->stream('laporan-rangkuman-tugas.pdf');
        }

        // 5. Tampilkan Halaman HTML
        return view('laporan.index', [
            'tasks' => $tasks, // Kirim $tasks
            'jenisPenugasanOptions' => $jenisPenugasanOptions,
            'availableYears' => $availableYears,
            'lhpStatusOptions' => $lhpStatusOptions,
            'filters' => $filters
        ]);
    }
}
