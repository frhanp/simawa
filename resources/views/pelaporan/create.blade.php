<!-- resources/views/pelaporan/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pelaporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Pelaporan -->
                    <form action="{{ route('pelaporan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Tugas</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Tugas --</option>
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}" {{ (old('task_id') ?? $pelaporan->task_id ?? '') == $task->id ? 'selected' : '' }}>
                                        {{ $task->jenis_penugasan }} - {{ $task->assignment_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Upload KM 8 -->
                        <div class="mb-4">
                            <label for="km8" class="block text-sm font-medium text-gray-700">Upload KM 8</label>
                            <input type="file" name="km8" id="km8"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload KM 10 -->
                        <div class="mb-4">
                            <label for="km10" class="block text-sm font-medium text-gray-700">Upload KM 10</label>
                            <input type="file" name="km10" id="km10"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload Kertas Kerja AT -->
                        <div class="mb-4">
                            <label for="kertas_kerja_at" class="block text-sm font-medium text-gray-700">Upload Kertas
                                Kerja AT</label>
                            <input type="file" name="kertas_kerja_at" id="kertas_kerja_at"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-green-50 file:text-green-700
                                hover:file:bg-green-100">
                        </div>

                        <!-- Upload Konsep LHP -->
                        <div class="mb-4">
                            <label for="konsep_lhp" class="block text-sm font-medium text-gray-700">Upload Konsep
                                LHP (Setelah review berjenjang)</label>
                            <input type="file" name="konsep_lhp" id="konsep_lhp"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-yellow-50 file:text-yellow-700
                                hover:file:bg-yellow-100">
                        </div>

                        {{-- <!-- Upload Exposé Pelaporan -->
                        <div class="mb-4">
                            <label for="expose_pelaporan" class="block text-sm font-medium text-gray-700">Upload EXPOSE
                                Pelaporan</label>
                            <input type="file" name="expose_pelaporan" id="expose_pelaporan"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-purple-50 file:text-purple-700
                                hover:file:bg-purple-100">
                        </div> --}}

                        <!-- Upload Tanggal Expose -->
                        <div class="mb-4">
                            <label for="tanggal_expose" class="block text-sm font-medium text-gray-700">Ajukan Tanggal
                                Expose</label>
                            <input type="date" name="tanggal_expose" id="tanggal_expose"
                                class="mt-1 block w-full text-sm text-gray-500 border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md"
                                value="{{ old('tanggal_expose') }}">
                        </div>


                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('pelaporan.index') }}"
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

