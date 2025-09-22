<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-3 border-b border-gray-200 flex items-center space-x-4">
        <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Gorontalo" class="h-[70px]">
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        @if (Auth::check() && Auth::user()->role === 'admin')
            <x-nav-link :href="route('task.planning')" :active="request()->routeIs('task.planning')">
                {{ __('Perencanaan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('task.index')" :active="request()->routeIs('task.index')">
                {{ __('Lihat Perencanaan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('spt.index')" :active="request()->routeIs('spt.index')">
                {{ __('Lihat SPT') }}
            </x-nav-link>
            <x-nav-link :href="route('preparations')" :active="request()->routeIs('preparations')">
                {{ __('Lihat Persiapan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.create')" :active="request()->routeIs('pelaksanaan.create')">
                {{ __('Pelaksanaan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.index')">
                {{ __('Pelaporan') }}
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.index')">
                {{ __('LHP') }}
            </x-nav-link>
        @endif

        @if (Auth::check() && Auth::user()->role === 'sekretaris')
            <x-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                {{ __('Pertimbangan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.planning')" :active="request()->routeIs('sekretaris.task.planning')">
                Perencanaan Penugasan
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.view')" :active="request()->routeIs('sekretaris.task.view')">
                {{ __('Daftar Penugasan') }}
            </x-nav-link>
        @endif

        @if (Auth::check() && Auth::user()->role === 'inspektur')
            <x-nav-link :href="route('inspektur.approve_inspektur')" :active="request()->routeIs('inspektur.approve_inspektur')">
                {{ __('Persetujuan Tugas') }}
            </x-nav-link>
            <x-nav-link :href="route('inspektur.preparations.index')" :active="request()->routeIs('inspektur.preparations.index')">
                {{ __('Lihat Persiapan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.index')" :active="request()->routeIs('pelaksanaan.index')">
                {{ __('Lihat Pelaksanaan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.index')">
                {{ __('Lihat Pelaporan') }}
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.index')">
                {{ __('Lihat LHP') }}
            </x-nav-link>
            <x-nav-link :href="route('inspektur.orang.index')" :active="request()->routeIs('inspektur.orang.*')">
                {{ __('Data Personel') }}
            </x-nav-link>
        @endif
    </nav>

    
</aside>