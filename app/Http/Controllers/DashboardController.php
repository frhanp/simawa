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

        if ($user->role === 'admin') {
            $data['totalUsers'] = User::count();
            $data['totalTasks'] = Task::count();
            $data['totalLhps'] = LHP::count();
            $data['taskStatusSummary'] = Task::select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');
            $data['recentLhps'] = LHP::with('task')->latest()->take(5)->get();
        } elseif ($user->role === 'sekretaris') {
            $data['pendingAssignmentTasks'] = Task::whereNull('team_composition')->count();
            $data['newTasks'] = Task::whereNull('team_composition')->latest()->take(5)->get();
        } elseif ($user->role === 'inspektur') {
            $userId = $user->id;
            $data['myActiveTasks'] = Task::whereJsonContains('team_composition', $userId)
                ->where('status', '!=', 'selesai')
                ->count();

            $myLhps = LHP::whereHas('task', function ($query) use ($userId) {
                $query->whereJsonContains('team_composition', $userId);
            })->select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');

            $data['myLhpStatus'] = $myLhps;
        }

        return view('dashboard', compact('data'));
    }
}
