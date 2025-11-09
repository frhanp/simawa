<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $data = [];

        // Logika Tracker Penugasan (shared untuk semua role)
        // Kita Eager Load relasi yang dibutuhkan oleh Accessor
        $allTasks = Task::with('spt.preparation', 'pelaksanaan', 'lhp')->get();

        // Kita gunakan Accessor untuk mengelompokkan
        $taskProgressGroups = $allTasks->groupBy('progress_percentage');

        // Ambil koleksi tugas untuk modal
        $tasks10 = $taskProgressGroups->get(10, collect());
        $tasks20 = $taskProgressGroups->get(20, collect());
        $tasks80 = $taskProgressGroups->get(80, collect());
        $tasks100 = $taskProgressGroups->get(100, collect());
        $tasks0 = $taskProgressGroups->get(0, collect());

        // Data untuk stepper (counts)
        $data['progressTracker'] = [
            'perencanaan' => $tasks10->count(),
            'persiapan' => $tasks20->count(),
            'pelaksanaan' => $tasks80->count(),
            'lhp_selesai' => $tasks100->count(),
            'ditolak' => $tasks0->count(),
        ];

        // Data untuk modal (daftar tugasnya)
        // Kita ambil nama dan ID saja agar ringan
        $pluckData = fn($task) => ['id' => $task->id, 'name' => $task->assignment_type];

        $data['progressTasks'] = [
            'perencanaan' => $tasks10->map($pluckData),
            'persiapan'   => $tasks20->map($pluckData),
            'pelaksanaan' => $tasks80->map($pluckData),
            'lhp_selesai' => $tasks100->map($pluckData),
            'ditolak'     => $tasks0->map($pluckData),
        ];

        if ($user->role === 'admin') {
            $data['totalUsers'] = User::count();
            $data['totalTasks'] = Task::count();
            $data['totalLhps'] = LHP::count();
            $data['taskStatusSummary'] = Task::select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');
            $data['recentLhps'] = LHP::with('task')->latest()->take(5)->get();
        } elseif ($user->role === 'sekretaris') {
            // Menghitung tugas yang statusnya 'pending' untuk pertimbangan
            $data['tasksForConsiderationCount'] = Task::where('status', 'pending')->count();
            
            // Menghitung total tugas yang dibuat oleh sekretaris yang login
            $data['myTasksCount'] = Task::where('created_by', $user->id)->count();

            // Mengambil 5 tugas terbaru yang perlu pertimbangan
            $data['recentTasksForConsideration'] = Task::where('status', 'pending')->latest()->take(5)->get();

            $data['myTasksStatusSummary'] = Task::where('created_by', $user->id)
                ->select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');
        } elseif ($user->role === 'inspektur') {
            // Menghitung tugas yang perlu disetujui
            $data['tasksForApprovalCount'] = \App\Models\Task::where('status', 'Disetujui Sekretaris')->count();
            
            // Menghitung persiapan yang perlu disetujui
            $data['preparationsForApprovalCount'] = \App\Models\Preparation::where('status', 'Pending')->count();

            // Menghitung pelaporan yang perlu ditinjau
            $data['reportsForReviewCount'] = \App\Models\Pelaporan::where('status', 'Menunggu Inspektur')->count();
            
            // Menghitung LHP yang perlu disetujui
            $data['lhpsForApprovalCount'] = \App\Models\LHP::where('status', 'pending')->count();
            
            // Menghitung total personel
            $data['totalPersonnelCount'] = \App\Models\Orang::count();
        }

        return view('dashboard', compact('data'));
    }
}
