<?php

namespace App\Http\Controllers;

use App\Models\SPT;
use App\Models\Task;
use App\Models\Orang;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function view()
    {
        // Mengambil data dengan pagination
        $tasks = Task::paginate(20);

        // Mengolah data untuk mengganti ID dengan nama
        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);

            // Ganti ID dengan nama dari tabel `orang`
            foreach (['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'] as $key) {
                if (isset($teamComposition[$key])) {
                    if (is_array($teamComposition[$key])) {
                        $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                    } else {
                        $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                    }
                }
            }

            $task->team_composition = $teamComposition;
            return $task;
        });

        return view('task.index', compact('tasks'));
    }

    public function planning()
    {
        // Ambil data orang dari tabel 'orang' untuk setiap kategori
        $penanggungJawab = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang = Orang::where('jabatan', 'Penunjang')->get();

        // Kirim data ke view
        return view('task.planning', compact('penanggungJawab', 'ketuaTim', 'wakilPenanggungJawab', 'anggotaTim', 'pengendaliTeknis', 'penunjang'));
    }



    public function store(Request $request)
    {
        // Validasi tanpa kolom 'status'
        $validatedData = $request->validate([
            'assignment_type' => 'required|string|max:255',
            'penanggung_jawab' => 'required|exists:orang,id',
            'ketua_tim' => 'required|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|exists:orang,id',
            'anggota_tim' => 'required|array',
            'pengendali_teknis' => 'required|array',
            'penunjang' => 'required|array',
            'number_of_days' => 'required|integer|min:1',
        ]);

        // Menambahkan ID user yang sedang login ke 'created_by'
        $validatedData['created_by'] = auth()->id(); // Ambil ID user yang login

        // Menyusun data team_composition dalam format JSON
        $teamComposition = [
            'penanggung_jawab' => $validatedData['penanggung_jawab'],
            'ketua_tim' => $validatedData['ketua_tim'],
            'wakil_penanggung_jawab' => $validatedData['wakil_penanggung_jawab'],
            'anggota_tim' => $validatedData['anggota_tim'], // Array anggota tim
            'pengendali_teknis' => $validatedData['pengendali_teknis'], // Array pengendali teknis
            'penunjang' => $validatedData['penunjang'], // Array penunjang
        ];

        // Memasukkan data ke dalam table tasks
        $task = Task::create([
            'assignment_type' => $validatedData['assignment_type'],
            'team_composition' => json_encode($teamComposition), // Menyimpan dalam format JSON
            'number_of_days' => $validatedData['number_of_days'],
            'created_by' => $validatedData['created_by'],
        ]);

        return redirect()->route('task.index')->with('success', 'Tugas berhasil disimpan!');
    }




    public function edit($id)
    {
        // Mengambil task berdasarkan id
        $task = Task::findOrFail($id);

        // Men-decode team_composition (JSON) untuk digunakan pada form
        $teamComposition = json_decode($task->team_composition, true);

        // Ambil data orang berdasarkan jabatan
        $penanggungJawab = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $pengendaliTeknis = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $ketuaTim = Orang::where('jabatan', 'Ketua Tim')->get();
        $anggotaTim = Orang::where('jabatan', 'Anggota Tim')->get();
        $penunjang = Orang::where('jabatan', 'Penunjang')->get();

        // Menampilkan halaman edit dengan data task dan data orang
        return view('task.edit', compact(
            'task',
            'penanggungJawab',
            'wakilPenanggungJawab',
            'pengendaliTeknis',
            'ketuaTim',
            'anggotaTim',
            'penunjang',
            'teamComposition' // Pass the decoded team composition
        ));
    }



    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'assignment_type' => 'required|string|max:255',
        'penanggung_jawab' => 'required|integer|exists:orang,id',
        'wakil_penanggung_jawab' => 'required|integer|exists:orang,id',
        'ketua_tim' => 'required|integer|exists:orang,id',
        'pengendali_teknis' => 'array|nullable',
        'pengendali_teknis.*' => 'integer|exists:orang,id',
        'anggota_tim' => 'array|nullable',
        'anggota_tim.*' => 'integer|exists:orang,id',
        'penunjang' => 'array|nullable',
        'penunjang.*' => 'integer|exists:orang,id',
        'number_of_days' => 'required|integer|min:1',
    ]);

    // Cari tugas berdasarkan ID
    $task = Task::findOrFail($id);

    // Menyusun komposisi tim dalam format yang sesuai
    $teamComposition = [
        'penanggung_jawab' => $request->input('penanggung_jawab'),
        'wakil_penanggung_jawab' => $request->input('wakil_penanggung_jawab'),
        'ketua_tim' => $request->input('ketua_tim'),
        'pengendali_teknis' => $request->input('pengendali_teknis', []),
        'anggota_tim' => $request->input('anggota_tim', []),
        'penunjang' => $request->input('penunjang', []),
    ];

    // Update atribut tugas
    $task->assignment_type = $request->input('assignment_type');
    $task->team_composition = json_encode($teamComposition); // Menyimpan komposisi tim dalam format JSON
    $task->number_of_days = $request->input('number_of_days');

    // Cek apakah status sebelumnya adalah 'rejected'
    if ($task->status === 'Ditolak Sekretaris' || $task->status === 'Ditolak Inspektur') {
        $task->status = 'pending'; // Kembalikan status ke 'pending'
        $task->rejection_reason = null; // Hapus alasan penolakan
    }

    // Simpan perubahan
    $task->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('task.index')->with('success', 'Tugas berhasil diperbarui dan status dikembalikan ke pending.');
}




    public function destroy($id)
    {
        // Mengambil task berdasarkan id
        $task = Task::findOrFail($id);

        // Menghapus task
        $task->delete();

        // Redirect atau berikan feedback kepada pengguna
        return redirect()->route('task.index')->with('success', 'Task berhasil dihapus!');
    }


    public function approve($id)
    {
        // Temukan tugas berdasarkan ID
        $task = Task::findOrFail($id);

        // Ubah status menjadi "Disetujui Sekretaris"
        $task->status = 'Disetujui Sekretaris';
        $task->save();

        // Redirect kembali ke daftar tugas dengan pesan sukses
        return redirect()->route('task.consideration')->with('success', 'Tugas berhasil disetujui.');
    }

    public function reject(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        // Temukan tugas berdasarkan ID
        $task = Task::findOrFail($id);

        // Update status tugas menjadi "ditolak" dan simpan alasan
        $task->status = 'rejected';
        $task->rejection_reason = $request->reason;
        $task->save();

        // Redirect dengan pesan sukses
        return redirect()->route('task.index')->with('success', 'Tugas berhasil ditolak.');
    }







    public function acceptForSekretaris($id)
    {
        // Mencari tugas berdasarkan ID
        $task = Task::find($id);

        // Cek apakah tugas ditemukan dan statusnya pending
        if ($task && $task->status === 'pending') {
            // Mengubah status menjadi 'Disetujui Sekretaris'
            $task->status = 'Disetujui Sekretaris';
            $task->save(); // Simpan perubahan

            // Redirect dengan pesan sukses
            return redirect()->route('pertimbangan')->with('success', 'Tugas berhasil disetujui oleh Sekretaris.');
        }

        // Redirect dengan pesan error jika tugas tidak ditemukan atau tidak bisa diubah
        return redirect()->route('pertimbangan')->with('error', 'Tugas tidak dapat diubah.');
    }

    public function rejectForSekretaris($id)
    {
        // Mencari tugas berdasarkan ID
        $task = Task::find($id);

        // Cek apakah tugas ditemukan dan statusnya pending
        if ($task && $task->status === 'pending') {
            // Mengubah status menjadi 'rejected'
            $task->status = 'rejected';
            $task->save(); // Simpan perubahan
            // Redirect dengan pesan sukses
            return redirect()->route('task.pertimbangan')->with('success', 'Tugas berhasil ditolak oleh Sekretaris.');
        }

        // Redirect dengan pesan error jika tugas tidak ditemukan atau tidak bisa diubah
        return redirect()->route('task.pertimbangan')->with('error', 'Tugas tidak dapat diubah.');
    }
    public function rejectWithReason(Request $request)
    {
        // Validasi input
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        // Temukan tugas berdasarkan task_id
        $task = Task::find($request->task_id);

        if ($task && $task->status === 'pending') {
            $task->status = 'Ditolak Sekretaris'; // Perbarui status menjadi "Ditolak Sekretaris"
            $task->rejection_reason = $request->rejection_reason;
            $task->save();

            return redirect()->route('pertimbangan')->with('success', 'Tugas berhasil ditolak oleh Sekretaris dengan alasan.');
        }

        return redirect()->route('pertimbangan')->with('error', 'Tugas tidak dapat ditolak.');
    }

    //     public function viewSPT()
    // {
    //     // Mengambil data SPT dengan pagination, misalnya 10 per halaman
    //     $spt = SPT::with('task')->paginate(10);

    //     // Tampilkan halaman lihat SPT
    //     return view('spt.view', compact('spt'));
    // }
}
