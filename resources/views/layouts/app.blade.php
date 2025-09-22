<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- SweetAlert2 CSS (tetap dipakai) --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    {{-- Styles for x-cloak --}}
    <style>[x-cloak]{ display:none !important; }</style>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js (punyamu di public/js) --}}
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
</head>

<body x-data="{ sidebarOpen:false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            {{-- ganti dengan include file sidebar milikmu --}}
            @include('layouts.navigation')
        </div>

        {{-- Overlay (mobile) --}}
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen=false"
            x-cloak
            class="fixed inset-0 bg-black/25 z-20 md:hidden"
        ></div>

        {{-- Main --}}
        <div class="flex-1 flex flex-col w-full">

            {{-- Mobile topbar --}}
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <button @click="sidebarOpen=true" class="text-gray-600 focus:outline-none z-10" aria-label="Open sidebar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div class="absolute left-1/2 -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>

            {{-- Optional header (desktop only) --}}
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-8 flex justify-between items-center">
                        {{-- Judul Halaman (tetap di kiri) --}}
                        <div>
                            {{ $header }}
                        </div>

                        {{-- Notifikasi & Profil (pindah ke kanan) --}}
                        <div class="flex items-center gap-4">
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = ! open"
                                    class="relative text-gray-600 hover:text-gray-800 focus:outline-none">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    @if (isset($unreadCount) && $unreadCount > 0)
                                        <span
                                            class="absolute -top-2 -right-2 inline-flex items-center justify-center h-5 w-5 text-xs font-bold text-white bg-red-500 rounded-full">{{ $unreadCount }}</span>
                                    @endif
                                </button>
                                <div x-show="open" x-cloak @click.away="open = false"
                                    class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg z-50 border max-h-96 overflow-y-auto">
                                    <div class="py-2 px-4 font-bold border-b text-gray-800">Notifikasi</div>
                                    @if (isset($notifications) && $notifications->count() > 0)
                                        @foreach ($notifications as $notification)
                                            <a href="{{ route('notifications.read', $notification->id) }}"
                                               class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 border-b last:border-b-0">
                                                <p>{{ $notification->message }}</p>
                                                <p class="text-xs text-gray-500 mt-1">{{ $notification->created_at->diffForHumans() }}</p>
                                            </a>
                                        @endforeach
                                    @else
                                        <p class="px-4 py-3 text-sm text-gray-500">Tidak ada notifikasi baru.</p>
                                    @endif
                                </div>
                            </div>

                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="flex items-center gap-2 text-sm font-medium text-left text-gray-700 rounded-lg hover:text-gray-900 focus:outline-none">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div x-show="open" x-cloak @click.away="open = false" class="absolute right-6 mt-2 w-48 bg-white rounded-lg shadow-lg z-50 border py-1">
                                    <a href="{{ route('profile.edit') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('Profile') }}</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:text-red-700 hover:bg-red-50">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </header>
            @endisset


            {{-- Page content --}}
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    {{-- SweetAlert2 JS + session flash handler --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if (session('success'))
                Swal.fire({ icon:'success', title:'Berhasil', text:"{{ session('success') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('error'))
                Swal.fire({ icon:'error', title:'Gagal', text:"{{ session('error') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('warning'))
                Swal.fire({ icon:'warning', title:'Peringatan', text:"{{ session('warning') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('info'))
                Swal.fire({ icon:'info', title:'Informasi', text:"{{ session('info') }}", timer:3000, showConfirmButton:false });
            @endif
        });
    </script>
</body>
</html>
