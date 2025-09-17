<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Selamat Datang Kembali, {{ Auth::user()->name }}!
                </div>
            </div>

            @if(Auth::user()->role === 'admin')
                @include('dashboard.admin', ['data' => $data])
            @elseif(Auth::user()->role === 'sekretaris')
                @include('dashboard.sekretaris', ['data' => $data])
            @elseif(Auth::user()->role === 'inspektur')
                @include('dashboard.inspektur', ['data' => $data])
            @endif

        </div>
    </div>
</x-app-layout>