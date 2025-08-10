<!-- resources/views/sekretaris/spt/upload.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload SPT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Alpine.js untuk mengelola state modal atau fitur interaktif lainnya -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Judul Form -->
                    <h3 class="text-2xl font-semibold mb-6">Upload Surat Perintah Tugas (SPT) untuk Tugas: {{ $task->assignment_type }}</h3>

                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Upload SPT -->
                    <form action="{{ route('sekretaris.spt.store', $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Field Task ID (Disembunyikan) -->
                        <input type="hidden" name="task_id" value="{{ $task->id }}">

                        <!-- Input File SPT -->
                        <div class="mb-4">
                            <label for="spt_file" class="block text-gray-700">Pilih File SPT (PDF, DOC, DOCX, maksimal 5MB)</label>
                            <input type="file" name="spt_file" id="spt_file" accept=".pdf,.doc,.docx" required
                                class="mt-2 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md shadow hover:bg-purple-700 transition">
                                Unggah SPT
                            </button>
                        </div>
                    </form>

                    <!-- Tombol Kembali -->
                    <div class="mt-4">
                        <a href="{{ route('pertimbangan') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md shadow hover:bg-gray-700 transition">
                            Kembali ke Daftar Tugas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
