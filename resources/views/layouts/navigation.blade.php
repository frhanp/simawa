<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'MY APP') }}
        </a>
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

    <div class="px-4 py-4 border-t border-gray-200">
        <div x-data="{ open: false }" class="relative mb-4">
            <button @click="open = ! open"
                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                <span>Notifikasi</span>
                @if (isset($unreadCount) && $unreadCount > 0)
                    <span
                        class="inline-flex items-center justify-center h-6 w-6 text-xs font-bold text-white bg-red-500 rounded-full">{{ $unreadCount }}</span>
                @else
                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                @endif
            </button>
            <div x-show="open" x-cloak @click.away="open = false"
                class="absolute bottom-full mb-2 w-full bg-white rounded-lg shadow-lg z-50 border max-h-64 overflow-y-auto">
                <div class="py-2 px-4 font-bold border-b text-gray-800">Notifikasi</div>
                @if (isset($notifications) && $notifications->count() > 0)
                    @foreach ($notifications as $notification)
                        {{-- =================== PERUBAHAN HANYA DI BARIS INI =================== --}}
                        <a href="{{ route('notifications.read', $notification->id) }}"
                           class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 border-b last:border-b-0">
                        {{-- ===================================================================== --}}
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
    </div>
</aside>