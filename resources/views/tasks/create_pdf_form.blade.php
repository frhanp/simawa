<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masukkan Data untuk Membuat SPT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl mb-4">Masukkan Informasi untuk SPT</h3>

                    <!-- Form untuk memasukkan data -->
                    <form method="POST" action="{{ route('task.sekretaris.create_pdf_with_data', $task->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nomor" class="block text-sm font-medium text-gray-700">Nomor</label>
                            <input type="text" id="nomor" name="nomor" value="{{ old('nomor') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        {{-- <div class="mb-4">
                            <label for="kepada" class="block text-sm font-medium text-gray-700">Kepada</label>
                            <input type="text" id="kepada" name="kepada" value="{{ old('kepada') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div> --}}

                        <div class="mb-4">
                            <label for="maksud" class="block text-sm font-medium text-gray-700">Maksud</label>
                            <textarea id="maksud" name="maksud" rows="4" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ old('maksud') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu
                                Pelaksanaan</label>
                            <input type="text" id="waktu" name="waktu" value="{{ old('waktu') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                            Buat SPT
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
