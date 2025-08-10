<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preparation;
use App\Models\Spt;
use Illuminate\Support\Facades\Storage;

class PreparationController extends Controller
{
    /**
     * Menampilkan daftar persiapan (untuk Inspektur).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Hanya persiapan dengan status 'Pending'
        $preparations = Preparation::where('status', 'Pending')->paginate(10);

        return view('preparations.index', compact('preparations'));
    }

    /**
     * Menampilkan form untuk membuat persiapan.
     *
     * @param  int  $sptId
     * @return \Illuminate\Http\Response
     */
    public function create($sptId)
    {
        $spt = Spt::findOrFail($sptId);

        // Periksa apakah SPT sudah memiliki persiapan
        if ($spt->preparation) {
            return redirect()->route('spt.index')->with('error', 'SPT ini sudah memiliki persiapan.');
        }

        return view('preparations.create', compact('spt'));
    }

    /**
     * Menyimpan persiapan baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sptId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $sptId)
    {
        $spt = Spt::findOrFail($sptId);

        // Validasi input
        $request->validate([
            'pka' => 'required|file|mimes:pdf,doc,docx|max:10000',
            'formulir_km4' => 'required|file|mimes:pdf,doc,docx|max:10000',
        ]);

        // Simpan file PKA
        if ($request->hasFile('pka')) {
            $pkaPath = $request->file('pka')->store('preparations/pka', 'public');
        }

        // Simpan file Formulir KM 4
        if ($request->hasFile('formulir_km4')) {
            $formulirKm4Path = $request->file('formulir_km4')->store('preparations/formulir_km4', 'public');
        }

        // Buat entri persiapan baru
        Preparation::create([
            'spt_id' => $spt->id,
            'pka_path' => $pkaPath ?? null,
            'formulir_km4_path' => $formulirKm4Path ?? null,
            'status' => 'Pending',
        ]);

        // Optional: Kirim notifikasi ke Inspektur

        return redirect()->route('spt.index')->with('success', 'Persiapan SPT berhasil dibuat dan dikirim ke Inspektur.');
    }

    /**
     * Menampilkan detail persiapan (untuk Inspektur).
     *
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function show($preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);


    return view('preparations.show', compact('preparation'));
    }

    /**
     * Menyetujui persiapan (di Inspektur).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, $preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);

        

        // Update status
        $preparation->status = 'Diterima';
        $preparation->note = $request->input('note'); // Opsional: Catatan Inspektur
        $preparation->save();

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('success', 'Persiapan SPT telah disetujui.');
    }

    /**
     * Menolak persiapan (di Inspektur).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function reject(Request $request, $preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);

        

        // Validasi input
        $request->validate([
            'note' => 'required|string|max:1000',
        ]);

        // Update status
        $preparation->status = 'Ditolak';
        $preparation->note = $request->input('note');
        $preparation->save();

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('error', 'Persiapan SPT telah ditolak.');
    }

    public function adminIndex()
    {
        
        $preparations = Preparation::with(['spt.task'])->paginate(20);

        return view('preparations.admin_index', compact('preparations'));
    }
}
