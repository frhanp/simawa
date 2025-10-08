<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proses Surat Perintah Tugas (SPT)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6" x-data="{ method: 'otomatis' }">
                
                {{-- Informasi Tugas --}}
                <div class="mb-6 pb-4 border-b">
                    <p class="text-sm text-gray-500">Jenis Penugasan</p>
                    <h3 class="text-lg font-semibold text-gray-800">{{ $task->jenis_penugasan }}</h3>
                    <p class="text-sm text-gray-500 mt-2">Nama Penugasan</p>
                    <h3 class="text-lg font-semibold text-gray-800">{{ $task->assignment_type }}</h3>
                </div>

                {{-- Pilihan Metode --}}
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Metode Pembuatan SPT</label>
                    <div class="flex space-x-4">
                        <label class="flex items-center p-3 border rounded-md cursor-pointer flex-1" :class="{'bg-blue-50 border-blue-300': method === 'otomatis', 'bg-white': method !== 'otomatis'}">
                            <input type="radio" name="method" value="otomatis" x-model="method" class="h-4 w-4 text-blue-600 border-gray-300">
                            <span class="ml-3 text-sm font-medium text-gray-800">Buat SPT</span>
                        </label>
                        <label class="flex items-center p-3 border rounded-md cursor-pointer flex-1" :class="{'bg-blue-50 border-blue-300': method === 'manual', 'bg-white': method !== 'manual'}">
                            <input type="radio" name="method" value="manual" x-model="method" class="h-4 w-4 text-blue-600 border-gray-300">
                            <span class="ml-3 text-sm font-medium text-gray-800">Unggah SPT</span>
                        </label>
                    </div>
                </div>

                {{-- FORM BUAT OTOMATIS --}}
                <div x-show="method === 'otomatis'" x-cloak>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Buat SPT</h3>
                    @include('tasks.partials.create_pdf_form_partial')
                </div>

                {{-- FORM UNGGAH MANUAL --}}
                <div x-show="method === 'manual'" x-cloak>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Unggah SPT</h3>
                    @include('sekretaris.spt.partials.upload_form_partial')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
