<!-- resources/views/lhp/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah LHP') }}
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

                    <!-- Form LHP -->
                    <form action="{{ route('lhp.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Task</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Tugas --</option>
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}" {{ (old('task_id') ?? $lhp->task_id ?? '') == $task->id ? 'selected' : '' }}>
                                        {{ $task->jenis_penugasan }} - {{ $task->assignment_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Upload LHP File -->
                        <div class="mb-4">
                            <label for="lhp_file" class="block text-sm font-medium text-gray-700">Upload File LHP</label>
                            <input type="file" name="lhp_file" id="lhp_file"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Keterangan -->
                        {{-- <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                                placeholder="Masukkan keterangan jika diperlukan">{{ old('keterangan') }}</textarea>
                        </div> --}}

                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('lhp.index') }}"
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
