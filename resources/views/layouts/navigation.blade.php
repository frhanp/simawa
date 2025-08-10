<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <!-- Menu for Admin -->
                    @if (Auth::user()->role === 'admin')
                        <x-nav-link :href="route('task.planning')" :active="request()->routeIs('task.planning')">
                            {{ __('Perencanaan Penugasan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('task.index')" :active="request()->routeIs('task.index')">
                            {{ __('Lihat Perencanaan Penugasan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('spt.index')" :active="request()->routeIs('spt.index')">
                            {{ __('Lihat SPT') }}
                        </x-nav-link>
                        <!-- Fitur Persiapan -->
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
{{-- 
                        <!-- Fitur Program Kerja Audit (PKA) -->
                        <x-nav-link :href="route('admin.pka')" :active="request()->routeIs('admin.pka')">
                            {{ __('Program Kerja Audit') }}
                        </x-nav-link>

                        <!-- Fitur Formulir KM 4 -->
                        <x-nav-link :href="route('admin.km4')" :active="request()->routeIs('admin.km4')">
                            {{ __('Formulir KM 4') }}
                        </x-nav-link>

                        <!-- Fitur Entry Meeting -->
                        <x-nav-link :href="route('admin.entry-meeting')" :active="request()->routeIs('admin.entry-meeting')">
                            {{ __('Entry Meeting') }}
                        </x-nav-link> --}}
                    @endif

                    <!-- Menu for Sekretaris -->
                    @if (Auth::user()->role === 'sekretaris')
                        <x-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                            {{ __('Pertimbangan Penugasan') }}
                        </x-nav-link>
                        {{-- <x-nav-link :href="route('task.approve')" :active="request()->routeIs('task.approve')">
                            {{ __('ACC/Tolak Usulan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('task.exitMeeting')" :active="request()->routeIs('task.exitMeeting')">
                            {{ __('Exit Meeting') }}
                        </x-nav-link>
                        <x-nav-link :href="route('task.expose')" :active="request()->routeIs('task.expose')">
                            {{ __('Eksposi') }}
                        </x-nav-link> --}}
                    @endif

                    <!-- Menu for Inspektur -->
                    @if (Auth::user()->role === 'inspektur')
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
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger for mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <!-- Responsive menus for Admin, Sekretaris, and Inspektur -->
            @if (Auth::user()->role === 'admin')
                <x-responsive-nav-link :href="route('task.planning')" :active="request()->routeIs('task.planning')">
                    {{ __('Perencanaan Penugasan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('spt.index')" :active="request()->routeIs('spt.index')">
                    {{ __('Lihat SPT') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('preparations')" :active="request()->routeIs('preparations')">
                    {{ __('Lihat Persiapan') }}
                </x-responsive-nav-link>
                {{-- <x-responsive-nav-link :href="route('admin.km4')" :active="request()->routeIs('admin.km4')">
                    {{ __('Formulir KM 4') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.entry-meeting')" :active="request()->routeIs('admin.entry-meeting')">
                    {{ __('Entry Meeting') }}
                </x-responsive-nav-link> --}}
            @endif
            @if (Auth::user()->role === 'sekretaris')
                <x-responsive-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                    {{ __('Pertimbangan Penugasan') }}
                </x-responsive-nav-link>
            @endif
            @if (Auth::user()->role === 'inspektur')
                <x-responsive-nav-link :href="route('inspektur.preparations.index')" :active="request()->routeIs('inspektur.preparations.index')">
                    {{ __('Lihat Persiapan') }}
                </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
