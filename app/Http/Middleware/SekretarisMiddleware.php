<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekretarisMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan memiliki role "sekretaris"
        if (Auth::check() && Auth::user()->role === 'sekretaris') {
            return $next($request); // Jika role adalah sekretaris, lanjutkan request
        }

        // Jika bukan sekretaris, redirect ke halaman lain (misalnya halaman home atau akses ditolak)
        return redirect()->route('home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
