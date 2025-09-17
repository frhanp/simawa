<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // --- TAMBAHAN: View Composer untuk Notifikasi ---
        View::composer('layouts.navigation', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $notifications = Notification::where('user_id', $user->id)
                                            ->whereNull('read_at')
                                            ->latest()
                                            ->take(5) // Ambil 5 notifikasi terbaru
                                            ->get();
                $unreadCount = Notification::where('user_id', $user->id)
                                           ->whereNull('read_at')
                                           ->count();
                $view->with('notifications', $notifications)->with('unreadCount', $unreadCount);
            }
        });
    }
}
