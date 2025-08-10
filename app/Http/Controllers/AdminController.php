<?php

namespace App\Http\Controllers;

use App\Models\KM4;
use App\Models\PKA;
use App\Models\Spt;
use App\Models\Preparation;
use App\Models\EntryMeeting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 1. Persiapan
    public function persiapan()
    {
        return view('admin.persiapan');  // Tampilkan form persiapan
    }

    public function storePersiapan(Request $request)
    {
        // Debugging untuk melihat data yang dikirim dari form
        dd($request->all());
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'keterangan' => 'required|string',
        ]);

        // Simpan data persiapan ke dalam database
        Preparation::create([
            'task_id' => $request->task_id,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.persiapan')->with('success', 'Persiapan berhasil disimpan.');
    }

    // 2. Program Kerja Audit (PKA)
    public function pka()
    {
        return view('admin.pka');  // Tampilkan form untuk mengunggah PKA
    }

    public function indexSPT()
    {
       // Mengambil data dengan relasi antara tabel task dan spt
    $spts = SPT::with('task')->paginate(10); // Menggunakan eager loading dan paginasi
        return view('admin.spt', compact('spts'));
    }

    public function storePKA(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'file_pka' => 'required|file|mimes:pdf',  // Hanya file PDF yang diizinkan
        ]);

        // Simpan file PKA ke dalam storage dan simpan path di database
        $path = $request->file('file_pka')->store('pka');

        PKA::create([
            'task_id' => $request->task_id,
            'file_path' => $path,
        ]);

        return redirect()->route('admin.pka')->with('success', 'Program Kerja Audit berhasil diunggah.');
    }

    // 3. Formulir KM 4
    public function km4()
    {
        return view('admin.km4');  // Tampilkan form KM4
    }

    public function storeKM4(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'form_km4' => 'required|string',
        ]);

        // Simpan data KM 4 ke dalam database
        KM4::create([
            'task_id' => $request->task_id,
            'form_km4' => $request->form_km4,
        ]);

        return redirect()->route('admin.km4')->with('success', 'Formulir KM 4 berhasil disimpan.');
    }

    // 4. Entry Meeting
    public function entryMeeting()
    {
        return view('admin.entry-meeting');  // Tampilkan form Entry Meeting
    }

    public function storeEntryMeeting(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'agenda' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Simpan data Entry Meeting ke dalam database
        EntryMeeting::create([
            'task_id' => $request->task_id,
            'agenda' => $request->agenda,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.entry-meeting')->with('success', 'Entry Meeting berhasil disimpan.');
    }
}
