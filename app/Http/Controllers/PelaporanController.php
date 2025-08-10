<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage Facade

class PelaporanController extends Controller
{
    /**
     * Menampilkan daftar pelaporan.
     */
    public function index()
    {
        // Mengambil pelaporans beserta task terkait
        $pelaporans = Pelaporan::with('task')->paginate(10); // Gunakan paginate jika perlu
        return view('pelaporan.index', compact('pelaporans'));
    }

    /**
     * Menampilkan form untuk membuat pelaporan baru.
     */
    public function create()
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('pelaporan.create', compact('tasks'));
    }

    /**
     * Menyimpan pelaporan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'km8' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'km10' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'kertas_kerja_at' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'konsep_lhp' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'expose_pelaporan' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'tanggal_expose' => 'required|date',
        ]);

        $data = $validated;

        // Tambahkan default value untuk kolom `status`
        $data['status'] = 'Menunggu Inspektur';

        // Handle file uploads
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('uploads/pelaporan', 'public');
            }
        }

        Pelaporan::create($data);

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil dibuat.');
    }


    /**
     * Menampilkan form untuk mengedit pelaporan.
     */
    public function edit(Pelaporan $pelaporan)
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('pelaporan.edit', compact('pelaporan', 'tasks'));
    }

    /**
     * Memperbarui pelaporan di database.
     */
    public function update(Request $request, Pelaporan $pelaporan)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'km8' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'km10' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'kertas_kerja_at' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'konsep_lhp' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'expose_pelaporan' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'tanggal_expose' => 'nullable|date', // Validasi tanggal expose
        ]);

        $data = $validated;

        // Handle file uploads
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($request->hasFile($field)) {
                // Hapus file lama jika ada
                if ($pelaporan->$field) {
                    Storage::disk('public')->delete($pelaporan->$field);
                }
                $data[$field] = $request->file($field)->store('uploads/pelaporan', 'public');
            }
        }

        // if ($data['status'] !== 'Acc') {
        //     $data['status'] = 'Menunggu Inspektur';
        // }
        // Set alasan_tolak menjadi null
        $data['alasan_tolak'] = null;

        // Handle tanggal expose jika ada
        if ($request->has('tanggal_expose')) {
            $data['tanggal_expose'] = $request->tanggal_expose;
        }

        // Update pelaporan
        $pelaporan->update($data);

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil diperbarui.');
    }



    /**
     * Menghapus pelaporan dari database.
     */
    public function destroy(Pelaporan $pelaporan)
    {
        // Hapus semua file terkait
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($pelaporan->$field) {
                Storage::disk('public')->delete($pelaporan->$field);
            }
        }

        $pelaporan->delete();

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil dihapus.');
    }
}
