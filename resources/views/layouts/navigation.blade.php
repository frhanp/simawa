<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <!-- Logo -->
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'MY APP') }}
        </a>
    </div>

    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <!-- Dashboard -->
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        <!-- Menu for Admin -->
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
                {{ __('Buat LHP') }}
            </x-nav-link>
        @endif

        <!-- Menu for Sekretaris -->
        @if (Auth::check() && Auth::user()->role === 'sekretaris')
            <x-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                {{ __('Pertimbangan Penugasan') }}
            </x-nav-link>
        @endif

        <!-- Menu for Inspektur -->
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
        @endif
    </nav>

    <!-- User Dropdown -->
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>
