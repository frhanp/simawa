<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="p-6 bg-white shadow-lg rounded-lg flex items-center justify-center">
                <h3 class="text-3xl font-semibold text-gray-800">
                    {{ __('Selamat Datang, ') }}{{ Auth::user()->name }}!
                </h3>
            </div>
        </div>
    </div>
</x-app-layout>
