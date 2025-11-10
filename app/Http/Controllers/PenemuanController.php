<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LHP;
use App\Models\Penemuan;
use Barryvdh\DomPDF\Facade\Pdf;

class PenemuanController extends Controller
{
    /**
     * Menampilkan daftar temuan dan form untuk LHP tertentu.
     */
    public function index(LHP $lhp)
    {
        // Hanya load relasi yang diperlukan untuk tabel
        $lhp->load('penemuans', 'task');
        return view('penemuan.index', compact('lhp'));
    }

    /**
     * Menampilkan form untuk membuat temuan baru.
     */
    public function create(LHP $lhp)
    {
        $lhp->load('task');
        return view('penemuan.create', compact('lhp'));
    }

    /**
     * Menyimpan temuan baru.
     */
    public function store(Request $request, LHP $lhp)
    {
        $validated = $request->validate([
            'judul_penemuan' => 'required|string|max:255',
            'kondisi' => 'required|string',
            'kriteria' => 'required|string',
            'penyebab_kategori' => 'required|string|max:255',
            'penyebab_deskripsi' => 'required|string',
            'akibat_kategori' => 'required|string|max:255',
            'akibat_deskripsi' => 'required|string',
            'rekomendasi_kategori' => 'required|string|max:255',
            'rekomendasi_deskripsi' => 'required|string',
        ]);

        $lhp->penemuans()->create($validated);

        return redirect()->route('lhp.penemuan.index', $lhp)->with('success', 'Temuan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit temuan.
     */
    public function edit(Penemuan $penemuan)
    {
        // Kita juga perlu $lhp untuk konteks di view
        $lhp = $penemuan->lhp->load('task');
        return view('penemuan.edit', compact('penemuan', 'lhp'));
    }

    /**
     * Memperbarui temuan di database.
     */
    public function update(Request $request, Penemuan $penemuan)
    {
        $validated = $request->validate([
            'judul_penemuan' => 'required|string|max:255',
            'kondisi' => 'required|string',
            'kriteria' => 'required|string',
            'penyebab_kategori' => 'required|string|max:255',
            'penyebab_deskripsi' => 'required|string',
            'akibat_kategori' => 'required|string|max:255',
            'akibat_deskripsi' => 'required|string',
            'rekomendasi_kategori' => 'required|string|max:255',
            'rekomendasi_deskripsi' => 'required|string',
        ]);

        $penemuan->update($validated);

        return redirect()->route('lhp.penemuan.index', $penemuan->lhp_id)->with('success', 'Temuan berhasil diperbarui.');
    }

    /**
     * Menghapus temuan.
     */
    public function destroy(Penemuan $penemuan)
    {
        // Simpan lhp_id untuk redirect
        $lhp_id = $penemuan->lhp_id;
        $penemuan->delete();

        return redirect()->route('lhp.penemuan.index', $lhp_id)->with('success', 'Temuan berhasil dihapus.');
    }

    public function downloadPDF(Penemuan $penemuan)
    {
        // Load relasi yang diperlukan untuk KOP surat (LHP -> Task)
        $penemuan->load('lhp.task');

        // Render view PDF dengan data
        $pdf = Pdf::loadView('penemuan.pdf', compact('penemuan'));
        
        // Set ukuran kertas dan orientasi
        $pdf->setPaper('A4', 'portrait');

        // Download PDF
        return $pdf->stream('temuan-' . $penemuan->id . '.pdf');
    }
}
