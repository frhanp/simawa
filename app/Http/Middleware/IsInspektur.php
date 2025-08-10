<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsInspektur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah autentikasi
        if (Auth::check()) {
            // Periksa apakah peran pengguna adalah 'inspektur'
            if (Auth::user()->role === 'inspektur') {
                return $next($request);
            }
        }

        // Jika tidak memiliki akses, Anda bisa mengarahkan ke halaman lain atau menampilkan error 403
        // Pilihan 1: Redirect ke halaman home dengan pesan error
        return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');

        // Pilihan 2: Menampilkan error 403
        // abort(403, 'Unauthorized action.');
    }
}
