<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0 bg-slate-50 border-r border-slate-200">
    <div class="flex p-3 items-center space-x-4">
        <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Gorontalo" class="h-[70px]">
    </div>
    <hr class="border-slate-200">

    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>{{ __('Dashboard') }}</span>
        </x-nav-link>

        {{-- ================== MENU ADMIN ================== --}}
        @if (Auth::check() && Auth::user()->role === 'admin')
            @php
                $isManajemenTugasActive =
                    request()->routeIs('task.planning') ||
                    request()->routeIs('task.index') ||
                    request()->routeIs('task.edit');
            @endphp
            <div x-data="{ open: {{ $isManajemenTugasActive ? 'true' : 'false' }} }">
                <button @click="open = !open" @class([
                    'flex items-center gap-3 w-full px-4 py-2 rounded-lg transition-colors duration-200',
                    'bg-blue-100 text-oceanBlue font-semibold' => $isManajemenTugasActive,
                    'text-gray-600 hover:bg-blue-50 hover:text-oceanBlue' => !$isManajemenTugasActive,
                ])>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    <span>Manajemen Tugas</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-auto transform transition-transform"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-cloak class="pl-8 space-y-1 mt-1">
                    <x-nav-link :href="route('task.planning')" :active="request()->routeIs('task.planning')" class="text-sm">
                        {{ __('Perencanaan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('task.index')" :active="request()->routeIs('task.index') || request()->routeIs('task.edit')" class="text-sm">
                        {{ __('Daftar Tugas') }}
                    </x-nav-link>
                </div>
            </div>

            <x-nav-link :href="route('spt.index')" :active="request()->routeIs('spt.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>{{ __('Lihat SPT') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('preparations')" :active="request()->routeIs('preparations')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 14.5M14.25 3.104c.251.023.501.05.75.082M7.5 18.75a3 3 0 003-3H18a3 3 0 003-3V7.5a3 3 0 00-3-3h-2.25m-4.5 0H7.5a3 3 0 00-3 3v7.5a3 3 0 003 3z" />
                </svg>
                <span>{{ __('Lihat Persiapan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.index')" :active="request()->routeIs('pelaksanaan.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <span>{{ __('Pelaksanaan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                </svg>
                <span>{{ __('Pelaporan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ __('LHP') }}</span>
            </x-nav-link>
        @endif

        {{-- ================== MENU SEKRETARIS ================== --}}
        @if (Auth::check() && Auth::user()->role === 'sekretaris')
            <x-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ __('Pertimbangan Penugasan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.planning')" :active="request()->routeIs('sekretaris.task.planning')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span>Perencanaan Penugasan</span>
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.view')" :active="request()->routeIs('sekretaris.task.view')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <span>{{ __('Daftar Penugasan') }}</span>
            </x-nav-link>
        @endif

        {{-- ================== MENU INSPEKTUR ================== --}}
        @if (Auth::check() && Auth::user()->role === 'inspektur')
            <x-nav-link :href="route('inspektur.approve_inspektur')" :active="request()->routeIs('inspektur.approve_inspektur')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ __('Persetujuan Tugas') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('inspektur.preparations.index')" :active="request()->routeIs('inspektur.preparations.index')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 14.5M14.25 3.104c.251.023.501.05.75.082M7.5 18.75a3 3 0 003-3H18a3 3 0 003-3V7.5a3 3 0 00-3-3h-2.25m-4.5 0H7.5a3 3 0 00-3 3v7.5a3 3 0 003 3z" />
                </svg>
                <span>{{ __('Lihat Persiapan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.index')" :active="request()->routeIs('pelaksanaan.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <span>{{ __('Lihat Pelaksanaan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                </svg>
                <span>{{ __('Lihat Pelaporan') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ __('Lihat LHP') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('inspektur.orang.index')" :active="request()->routeIs('inspektur.orang.*')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197m0 0A4 4 0 119.5 9.172a4 4 0 01-3.5 3.555" />
                </svg>
                <span>{{ __('Data Personel') }}</span>
            </x-nav-link>
        @endif
    </nav>
</aside>
