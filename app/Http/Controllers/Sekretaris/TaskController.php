<?php

namespace App\Http\Controllers\Sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orang;
use App\Models\Task;
use App\Models\Notification;

class TaskController extends Controller
{
    public function planning()
    {
        $jenisPenugasanOptions = [ 'Audit', 'Evaluasi', 'Review', 'Monitor', 'Konsalting' ];
        $penanggungJawab      = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim             = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim           = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis     = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang            = Orang::where('jabatan', 'Penunjang')->get();

        // Menggunakan scope `active()` dari model Task
        $lockedIds = Task::query()
            ->active() // Mengganti whereIn('status', ...) dengan scope
            ->get('team_composition')
            ->flatMap(function ($t) {
                $tc = json_decode($t->team_composition, true) ?? [];
                return collect([
                    $tc['ketua_tim'] ?? null,
                    ...((array)($tc['pengendali_teknis'] ?? [])),
                    ...((array)($tc['anggota_tim'] ?? [])),
                    ...((array)($tc['penunjang'] ?? [])),
                ]);
            })
            ->filter()
            ->map(fn($v) => (string)$v)
            ->unique();

        return view('task.planning', compact(
            'penanggungJawab',
            'ketuaTim',
            'wakilPenanggungJawab',
            'anggotaTim',
            'pengendaliTeknis',
            'penunjang',
            'lockedIds',
            'jenisPenugasanOptions'
        ));
    }

    public function store(Request $request)
    {
        // Validasi tanpa kolom 'status'
        $validatedData = $request->validate([
            'jenis_penugasan' => 'required|string|max:255',
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
            'jenis_penugasan' => $validatedData['jenis_penugasan'],
            'assignment_type' => $validatedData['assignment_type'],
            'team_composition' => json_encode($teamComposition), // Menyimpan dalam format JSON
            'number_of_days' => $validatedData['number_of_days'],
            'created_by' => $validatedData['created_by'],
        ]);

        // --- TAMBAHAN: Logika Notifikasi yang Disesuaikan ---
        // 1. Kumpulkan semua ID pengguna dari semua peran ke dalam satu array
        $allUserIds = array_merge(
            [$validatedData['penanggung_jawab']],
            [$validatedData['ketua_tim']],
            [$validatedData['wakil_penanggung_jawab']],
            $validatedData['anggota_tim'],
            $validatedData['pengendali_teknis'],
            $validatedData['penunjang']
        );

        // 2. Hilangkan ID yang duplikat
        $uniqueUserIds = array_unique($allUserIds);

        // 3. Buat notifikasi untuk setiap pengguna unik
        foreach ($uniqueUserIds as $userId) {
            // // Pastikan user ID valid sebelum membuat notifikasi
            // if ($userId) {
            //     Notification::create([
            //         'user_id' => $userId,
            //         'message' => 'Anda ditugaskan pada tugas baru: "' . $task->assignment_type . '".',
            //         'url' => route('dashboard'), // Arahkan ke daftar tugas inspektur
            //     ]);
            // }
        }
        // --- AKHIR TAMBAHAN ---

        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil disimpan!');
    }

    public function view()
    {
        $tasks = Task::with('spt.preparation', 'pelaksanaan', 'lhp')->paginate(20);

        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);
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

        // Pastikan view yang dituju sama
        return view('task.index', compact('tasks'));
    }

    // app/Http/Controllers/Sekretaris/TaskController.php

    // ... (tambahkan ini di dalam class TaskController Anda)

    public function edit(Task $task) // Menggunakan Route Model Binding
    {
        // [PARSE KOMPOSISI TIM]
        $tcCurrent = is_string($task->team_composition)
            ? (json_decode($task->team_composition, true) ?? [])
            : ($task->team_composition ?? []);

        // [HITUNG TERKUNCI]
        // Menggunakan scope `active()` dari model Task
        $lockedIds = Task::query()
            ->where('id', '!=', $task->id)
            ->active() // Mengganti whereIn('status', ...) dengan scope
            ->get('team_composition')
            ->flatMap(function ($t) {
                $tc = is_string($t->team_composition)
                    ? (json_decode($t->team_composition, true) ?? [])
                    : ($t->team_composition ?? []);
                return collect([
                    $tc['ketua_tim'] ?? null,
                    ...((array)($tc['pengendali_teknis'] ?? [])),
                    ...((array)($tc['anggota_tim'] ?? [])),
                    ...((array)($tc['penunjang'] ?? [])),
                ]);
            })
            ->filter()
            ->map(fn($v) => (string)$v)
            ->unique()
            ->values();

        // [YANG SUDAH TERPILIH DI TASK INI]
        $selectedHere = collect([
            $tcCurrent['ketua_tim'] ?? null,
            ...((array)($tcCurrent['pengendali_teknis'] ?? [])),
            ...((array)($tcCurrent['anggota_tim'] ?? [])),
            ...((array)($tcCurrent['penunjang'] ?? [])),
        ])->filter()
            ->map(fn($v) => (string)$v)
            ->unique()
            ->values();

        $lockedIds = $lockedIds->diff($selectedHere)->values();

        // [DATA DROPDOWN]
        $penanggungJawab      = \App\Models\Orang::where('jabatan', 'Penanggung Jawab')->get();
        $wakilPenanggungJawab = \App\Models\Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $ketuaTim             = \App\Models\Orang::where('jabatan', 'Ketua Tim')->get();
        $pengendaliTeknis     = \App\Models\Orang::where('jabatan', 'Pengendali Teknis')->get();
        $anggotaTim           = \App\Models\Orang::where('jabatan', 'Anggota Tim')->get();
        $penunjang            = \App\Models\Orang::where('jabatan', 'Penunjang')->get();

        // [KIRIM KE VIEW]
        return view('task.edit', compact(
            'task',
            'tcCurrent',
            'lockedIds',
            'penanggungJawab',
            'wakilPenanggungJawab',
            'ketuaTim',
            'pengendaliTeknis',
            'anggotaTim',
            'penunjang'
        ));
    }

    public function update(Request $request, Task $task)
{
    // === 1️⃣ VALIDASI SAMA DENGAN STORE ===
    $validated = $request->validate([
        'jenis_penugasan'        => 'required|string|max:255',
        'assignment_type'        => 'required|string|max:255',
        'penanggung_jawab'       => 'required|exists:orang,id',
        'wakil_penanggung_jawab' => 'required|exists:orang,id',
        'ketua_tim'              => 'required|exists:orang,id',
        'pengendali_teknis'      => 'required|array',
        'pengendali_teknis.*'    => 'exists:orang,id',
        'anggota_tim'            => 'required|array',
        'anggota_tim.*'          => 'exists:orang,id',
        'penunjang'              => 'required|array',
        'penunjang.*'            => 'exists:orang,id',
        'number_of_days'         => 'required|integer|min:1',
        'is_berjenjang'          => 'nullable',
    ]);

    // === 2️⃣ CEK KONFLIK PERSONEL (Kecuali jika "Penugasan Berjenjang") ===
    if (!$request->has('is_berjenjang')) {
        $cekIds = collect([
            $validated['ketua_tim'],
            ...$validated['pengendali_teknis'],
            ...$validated['anggota_tim'],
            ...$validated['penunjang'],
        ])->filter()->unique();

        if ($cekIds->isNotEmpty()) {
            $konflik = Task::query()
                ->active()
                ->where('id', '!=', $task->id)
                ->where(function ($q) use ($cekIds) {
                    foreach ($cekIds as $person) {
                        $q->orWhereJsonContains('team_composition->ketua_tim', (string)$person)
                          ->orWhereJsonContains('team_composition->pengendali_teknis', (string)$person)
                          ->orWhereJsonContains('team_composition->anggota_tim', (string)$person)
                          ->orWhereJsonContains('team_composition->penunjang', (string)$person);
                    }
                })
                ->exists();

            if ($konflik) {
                return back()
                    ->withErrors(['anggota' => 'Ada personel yang sudah terikat di tugas aktif. Centang "Penugasan Berjenjang" untuk mengabaikan.'])
                    ->withInput();
            }
        }
    }

    // === 3️⃣ SUSUN TEAM COMPOSITION DALAM JSON ===
    $teamComposition = [
        'penanggung_jawab'       => $validated['penanggung_jawab'],
        'wakil_penanggung_jawab' => $validated['wakil_penanggung_jawab'],
        'ketua_tim'              => $validated['ketua_tim'],
        'pengendali_teknis'      => $validated['pengendali_teknis'],
        'anggota_tim'            => $validated['anggota_tim'],
        'penunjang'              => $validated['penunjang'],
    ];

    // === 4️⃣ UPDATE KOLOM TASK ===
    $task->update([
        'jenis_penugasan'  => $validated['jenis_penugasan'],
        'assignment_type'  => $validated['assignment_type'],
        'team_composition' => json_encode($teamComposition),
        'number_of_days'   => $validated['number_of_days'],
        'is_berjenjang'    => $request->has('is_berjenjang'),
    ]);

    // === 5️⃣ RESET STATUS JIKA PERNAH DITOLAK ===
    if (in_array($task->status, ['Ditolak Sekretaris', 'Ditolak Inspektur'], true)) {
        $task->status = 'pending';
        $task->rejection_reason = null;
        $task->save();
    }

    // === 6️⃣ REDIRECT SESUAI ROLE SEKRETARIS ===
    return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil diperbarui.');
}


    public function destroy(Task $task) // Menggunakan Route Model Binding
    {
        $task->delete();

        // PERUBAHAN DI SINI
        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil dihapus!');
    }
}
