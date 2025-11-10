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
        $availableYears = Penemuan::join('lhp', 'penemuans.lhp_id', '=', 'lhp.id')
                            ->select(DB::raw('YEAR(lhp.updated_at) as year'))
                            ->where('lhp.status', 'disetujui')
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year');

        // 2. Query dasar: Selalu ambil temuan dari LHP yang sudah disetujui
        $query = Penemuan::with(['lhp.task'])
                    ->whereHas('lhp', function ($q) {
                        $q->where('status', 'disetujui');
                    });

        // 3. Terapkan Filter
        // Filter Jenis Penugasan
        $query->when($request->filled('jenis_penugasan'), function ($q) use ($request) {
            $q->whereHas('lhp.task', function ($taskQuery) use ($request) {
                $taskQuery->where('jenis_penugasan', $request->jenis_penugasan);
            });
        });

        // Filter Tahun
        $query->when($request->filled('tahun'), function ($q) use ($request) {
            $q->whereHas('lhp', function ($lhpQuery) use ($request) {
                $lhpQuery->whereYear('updated_at', $request->tahun);
            });
        });

        // Filter Bulan
        $query->when($request->filled('bulan'), function ($q) use ($request) {
            $q->whereHas('lhp', function ($lhpQuery) use ($request) {
                $lhpQuery->whereMonth('updated_at', $request->bulan);
            });
        });

        $penemuans = $query->get();

        // 4. Cek apakah minta PDF
        if ($request->has('pdf')) {
            $pdf = Pdf::loadView('laporan.pdf', [
                'penemuans' => $penemuans,
                'filters' => $request->only(['jenis_penugasan', 'tahun', 'bulan'])
            ]);
            $pdf->setPaper('A4', 'landscape'); // Landscape agar tabel muat
            return $pdf->stream('laporan-rangkuman-temuan.pdf');
        }

        // 5. Tampilkan Halaman HTML
        return view('laporan.index', [
            'penemuans' => $penemuans,
            'jenisPenugasanOptions' => $jenisPenugasanOptions,
            'availableYears' => $availableYears,
            'filters' => $request->only(['jenis_penugasan', 'tahun', 'bulan'])
        ]);
    }
}
