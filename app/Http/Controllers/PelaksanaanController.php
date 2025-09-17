<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use App\Models\User;

class PelaksanaanController extends Controller
{
    /**
     * Menampilkan daftar pelaksanaan.
     */
    public function index()
    {
        $pelaksanaan = Pelaksanaan::with('task')->get();
        return view('pelaksanaan.index', compact('pelaksanaan'));
    }

    /**
     * Menampilkan form untuk membuat pelaksanaan baru.
     */
    public function create()
    {
        // Menyaring tugas yang statusnya 'disetujui inspektur'
        $taskList = Task::where('status', 'disetujui inspektur')->get();

        return view('pelaksanaan.create', compact('taskList'));
    }

    /**
     * Menyimpan pelaksanaan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'entry_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'berita_acara_entry' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'exit_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'berita_acara_exit' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'sent_to_inspektur' => 'sometimes|boolean',
        ]);

        // Handle file uploads
        if ($request->hasFile('entry_meeting_photo')) {
            $validated['entry_meeting_photo'] = $request->file('entry_meeting_photo')->store('entry_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_entry')) {
            $validated['berita_acara_entry'] = $request->file('berita_acara_entry')->store('berita_acara_entry', 'public');
        }

        if ($request->hasFile('exit_meeting_photo')) {
            $validated['exit_meeting_photo'] = $request->file('exit_meeting_photo')->store('exit_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_exit')) {
            $validated['berita_acara_exit'] = $request->file('berita_acara_exit')->store('berita_acara_exit', 'public');
        }

        // Handle sent_to_inspektur checkbox using boolean()
        // $validated['sent_to_inspektur'] = $request->boolean('sent_to_inspektur');

        $pelaksanaan = Pelaksanaan::create($validated);
        
        $task = Task::find($validated['task_id']);
        $inspekturs = User::where('role', 'inspektur')->get();
        foreach ($inspekturs as $inspektur) {
            Notification::create([
                'user_id' => $inspektur->id,
                'message' => 'Dokumen pelaksanaan baru untuk tugas "' . $task->assignment_type . '" telah dibuat.',
                'url'     => route('pelaksanaan.show', $pelaksanaan->id),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail pelaksanaan.
     */
    public function show(Pelaksanaan $pelaksanaan)
    {
        $pelaksanaan->load('task');
        return view('pelaksanaan.show', compact('pelaksanaan'));
    }

    /**
     * Menampilkan form untuk mengedit pelaksanaan.
     */
    public function edit(Pelaksanaan $pelaksanaan)
    {
         // Menyaring tugas yang statusnya 'disetujui inspektur'
         $taskList = Task::where('status', 'disetujui inspektur')->get();

         return view('pelaksanaan.edit', compact('pelaksanaan', 'taskList'));
    }

    /**
     * Memperbarui pelaksanaan di database.
     */
    public function update(Request $request, Pelaksanaan $pelaksanaan)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'entry_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berita_acara_entry' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'exit_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berita_acara_exit' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'sent_to_inspektur' => 'sometimes|boolean',
        ]);

        // Handle file uploads
        if ($request->hasFile('entry_meeting_photo')) {
            // Hapus foto lama jika ada
            if ($pelaksanaan->entry_meeting_photo) {
                Storage::disk('public')->delete($pelaksanaan->entry_meeting_photo);
            }
            $validated['entry_meeting_photo'] = $request->file('entry_meeting_photo')->store('entry_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_entry')) {
            // Hapus file lama jika ada
            if ($pelaksanaan->berita_acara_entry) {
                Storage::disk('public')->delete($pelaksanaan->berita_acara_entry);
            }
            $validated['berita_acara_entry'] = $request->file('berita_acara_entry')->store('berita_acara_entry', 'public');
        }

        if ($request->hasFile('exit_meeting_photo')) {
            // Hapus foto lama jika ada
            if ($pelaksanaan->exit_meeting_photo) {
                Storage::disk('public')->delete($pelaksanaan->exit_meeting_photo);
            }
            $validated['exit_meeting_photo'] = $request->file('exit_meeting_photo')->store('exit_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_exit')) {
            // Hapus file lama jika ada
            if ($pelaksanaan->berita_acara_exit) {
                Storage::disk('public')->delete($pelaksanaan->berita_acara_exit);
            }
            $validated['berita_acara_exit'] = $request->file('berita_acara_exit')->store('berita_acara_exit', 'public');
        }

        // Handle sent_to_inspektur checkbox using boolean()
       // $validated['sent_to_inspektur'] = $request->boolean('sent_to_inspektur');

        $pelaksanaan->update($validated);

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil diperbarui.');
    }


    /**
     * Menghapus pelaksanaan dari database.
     */
    public function destroy(Pelaksanaan $pelaksanaan)
    {
        // Hapus file jika ada
        if ($pelaksanaan->entry_meeting_photo) {
            Storage::disk('public')->delete($pelaksanaan->entry_meeting_photo);
        }
        if ($pelaksanaan->berita_acara_entry) {
            Storage::disk('public')->delete($pelaksanaan->berita_acara_entry);
        }
        if ($pelaksanaan->exit_meeting_photo) {
            Storage::disk('public')->delete($pelaksanaan->exit_meeting_photo);
        }
        if ($pelaksanaan->berita_acara_exit) {
            Storage::disk('public')->delete($pelaksanaan->berita_acara_exit);
        }

        $pelaksanaan->delete();

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil dihapus.');
    }
}
