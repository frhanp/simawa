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
                    <div class="px-6 py-7">
                        {{ $header }}
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
