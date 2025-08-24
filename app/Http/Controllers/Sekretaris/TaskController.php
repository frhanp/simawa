<?php

namespace App\Http\Controllers\Sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orang;
use App\Models\Task;

class TaskController extends Controller
{
    public function planning()
    {
        $penanggungJawab      = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim             = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim           = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis     = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang            = Orang::where('jabatan', 'Penunjang')->get();

        // 🔒 cari ID yang sudah dipakai di task aktif
        $lockedIds = Task::query()
            ->whereIn('status', ['pending', 'Disetujui Inspektur']) // status aktif
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
            'lockedIds'
        ));
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

        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil disimpan!');
    }

    public function view()
    {
        $tasks = Task::paginate(20);

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
        $lockedIds = Task::query()
            ->where('id', '!=', $task->id)
            ->whereIn('status', ['pending', 'Disetujui Inspektur'])
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

    public function update(Request $request, Task $task) // Menggunakan Route Model Binding
    {
        $validated = $request->validate([
            'assignment_type'        => 'required|string|max:255',
            'penanggung_jawab'       => 'required|integer|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|integer|exists:orang,id',
            'ketua_tim'              => 'required|integer|exists:orang,id',
            'pengendali_teknis'      => 'array|nullable',
            'pengendali_teknis.*'    => 'integer|exists:orang,id',
            'anggota_tim'            => 'array|nullable',
            'anggota_tim.*'          => 'integer|exists:orang,id',
            'penunjang'              => 'array|nullable',
            'penunjang.*'            => 'integer|exists:orang,id',
            'number_of_days'         => 'required|integer|min:1',
        ]);

        $teamComposition = [
            'penanggung_jawab'       => (string) $validated['penanggung_jawab'],
            'wakil_penanggung_jawab' => (string) $validated['wakil_penanggung_jawab'],
            'ketua_tim'              => (string) $validated['ketua_tim'],
            'pengendali_teknis'      => collect($validated['pengendali_teknis'] ?? [])->map(fn($v) => (string)$v)->all(),
            'anggota_tim'            => collect($validated['anggota_tim'] ?? [])->map(fn($v) => (string)$v)->all(),
            'penunjang'              => collect($validated['penunjang'] ?? [])->map(fn($v) => (string)$v)->all(),
        ];

        $cekIds = collect([
            $teamComposition['ketua_tim'],
            ...$teamComposition['pengendali_teknis'],
            ...$teamComposition['anggota_tim'],
            ...$teamComposition['penunjang'],
        ])->filter()->unique();

        $konflik = Task::query()
            ->where('id', '!=', $task->id)
            ->whereIn('status', ['pending', 'Disetujui Inspektur'])
            ->where(function ($q) use ($cekIds) {
                foreach ($cekIds as $id) {
                    $q->orWhereJsonContains('team_composition->ketua_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->pengendali_teknis', (string)$id)
                        ->orWhereJsonContains('team_composition->anggota_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->penunjang', (string)$id);
                }
            })
            ->exists();

        if ($konflik) {
            return back()->withErrors(['anggota' => 'Ada personel (selain PJ/WPJ) yang sudah terikat di tugas aktif.'])->withInput();
        }

        $task->assignment_type  = $validated['assignment_type'];
        $task->team_composition = json_encode($teamComposition);
        $task->number_of_days   = $validated['number_of_days'];

        if (in_array($task->status, ['Ditolak Sekretaris', 'Ditolak Inspektur'], true)) {
            $task->status = 'pending';
            $task->rejection_reason = null;
        }

        $task->save();

        // PERUBAHAN DI SINI
        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy(Task $task) // Menggunakan Route Model Binding
    {
        $task->delete();

        // PERUBAHAN DI SINI
        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil dihapus!');
    }
}
