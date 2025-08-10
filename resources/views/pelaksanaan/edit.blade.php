<!-- resources/views/pelaksanaan/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Edit Pelaksanaan') }}
            </h2>
            <a href="{{ route('pelaksanaan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Edit Pelaksanaan -->
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

                <form action="{{ route('pelaksanaan.update', $pelaksanaan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Pilih Task -->
                    <div class="mb-4">
                        <label for="task_id" class="block text-gray-700">Pilih Tugas</label>
                        <select name="task_id" id="task_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Task --</option>
                            @foreach($taskList->groupBy('assignment_type') as $assignmentType => $tasks)
                                <optgroup label="{{ $assignmentType }}">
                                    @foreach($tasks as $task)
                                        <option value="{{ $task->id }}" {{ (old('task_id', $pelaksanaan->task_id) == $task->id) ? 'selected' : '' }}>
                                            {{ $task->id }} - {{ $task->assignment_type }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>

                    <!-- Entry Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                    <div class="mb-4">
                        <label for="entry_meeting_photo" class="block text-gray-700">Upload Foto Entry Meeting</label>
                        <input type="file" name="entry_meeting_photo" id="entry_meeting_photo" class="mt-1 block w-full" accept="image/*">
                        @if($pelaksanaan->entry_meeting_photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $pelaksanaan->entry_meeting_photo) }}" alt="Entry Meeting Photo" class="w-24 h-24 object-cover">
                            </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_entry" class="block text-gray-700">Upload Berita Acara Entry Meeting</label>
                        <input type="file" name="berita_acara_entry" id="berita_acara_entry" class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        @if($pelaksanaan->berita_acara_entry)
                            <div class="mt-2">
                                <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_entry) }}" target="_blank" class="text-blue-500">Download Berita Acara Entry Meeting</a>
                            </div>
                        @endif
                    </div>

                    <!-- Exit Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                    <div class="mb-4">
                        <label for="exit_meeting_photo" class="block text-gray-700">Upload Foto Exit Meeting</label>
                        <input type="file" name="exit_meeting_photo" id="exit_meeting_photo" class="mt-1 block w-full" accept="image/*">
                        @if($pelaksanaan->exit_meeting_photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $pelaksanaan->exit_meeting_photo) }}" alt="Exit Meeting Photo" class="w-24 h-24 object-cover">
                            </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_exit" class="block text-gray-700">Upload Berita Acara Exit Meeting</label>
                        <input type="file" name="berita_acara_exit" id="berita_acara_exit" class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        @if($pelaksanaan->berita_acara_exit)
                            <div class="mt-2">
                                <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_exit) }}" target="_blank" class="text-blue-500">Download Berita Acara Exit Meeting</a>
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
