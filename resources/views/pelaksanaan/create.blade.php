<!-- resources/views/pelaksanaan/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Tambah Pelaksanaan') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                        <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelaksanaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Pilih Tugas -->
                    <div class="mb-4">
                        <label for="task_id" class="block text-gray-700">Pilih Tugas</label>
                        <select name="task_id" id="task_id"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Tugas --</option>
                            @foreach ($taskList as $task)
                                <option value="{{ $task->id }}" {{ old('task_id') == $task->id ? 'selected' : '' }}>
                                    {{ $task->id }} - {{ $task->assignment_type }}
                                </option>
                            @endforeach
                        </select>
                        @error('task_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Entry Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                    <div class="mb-4">
                        <label for="entry_meeting_photo" class="block text-gray-700">Upload Foto Entry Meeting</label>
                        <input type="file" name="entry_meeting_photo" id="entry_meeting_photo"
                            class="mt-1 block w-full" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: JPEG, PNG, JPG, GIF. Maksimal ukuran file: 2MB.
                        </p>
                        @error('entry_meeting_photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_entry" class="block text-gray-700">Upload Berita Acara Entry
                            Meeting</label>
                        <input type="file" name="berita_acara_entry" id="berita_acara_entry"
                            class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: PDF, DOC, DOCX. Maksimal ukuran file: 5MB.
                        </p>
                        @error('berita_acara_entry')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Exit Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                    <div class="mb-4">
                        <label for="exit_meeting_photo" class="block text-gray-700">Upload Foto Exit Meeting</label>
                        <input type="file" name="exit_meeting_photo" id="exit_meeting_photo"
                            class="mt-1 block w-full" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: JPEG, PNG, JPG, GIF. Maksimal ukuran file: 2MB.
                        </p>
                        @error('exit_meeting_photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_exit" class="block text-gray-700">Upload Berita Acara Exit
                            Meeting</label>
                        <input type="file" name="berita_acara_exit" id="berita_acara_exit" class="mt-1 block w-full"
                            accept=".pdf,.doc,.docx">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: PDF, DOC, DOCX. Maksimal ukuran file: 5MB.
                        </p>
                        @error('berita_acara_exit')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
