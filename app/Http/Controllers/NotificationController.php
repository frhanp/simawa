<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Mark a specific notification as read and redirect.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAsRead(Notification $notification)
    {
        // Pastikan notifikasi ini milik pengguna yang sedang login
        if ($notification->user_id === Auth::id()) {
            // Update kolom 'read_at' dengan waktu saat ini
            $notification->update(['read_at' => now()]);
        }

        // Arahkan pengguna ke URL asli dari notifikasi
        return redirect($notification->url);
    }
}
