<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Buat Persiapan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Container yang Lebih Lebar -->
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-6 px-6 py-4 rounded-md bg-green-100 text-green-700 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-6 px-6 py-4 rounded-md bg-red-100 text-red-700 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 mt-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulir Persiapan SPT -->
                    <form action="{{ route('preparations.store', $spt->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        <!-- Informasi SPT -->
                        {{-- <div class="bg-gray-50 p-6 rounded-md shadow-inner">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6">Informasi SPT</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nomor SPT -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Nomor SPT</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $spt->id }}</p>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Tanggal</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($spt->tanggal)->format('d-m-Y') }}</p>
                                    </div>
                                </div>

                                <!-- Nama Tugas -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Nama Tugas</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ optional($spt->task)->assignment_type }}</p>
                                    </div>
                                </div>

                                <!-- Deskripsi -->
                                <div class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Status</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ optional($spt->task)->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Upload PKA -->
                        <div>
                            <label for="pka" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload PKA <span class="text-red-500">*</span>
                            </label>
                        
                            <div class="flex items-center">
                                <label for="pka"
                                    class="flex items-center justify-center px-3 py-1.5 bg-blue-600 text-white rounded-md shadow-sm cursor-pointer hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                    </svg>
                                    Pilih File
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="pka_filename">Tidak ada file dipilih</span>
                            </div>
                        
                            <input type="file" name="pka" id="pka" accept=".pdf,.doc,.docx" class="hidden" required>
                        
                            <!-- Catatan mengenai unggahan file -->
                            <p class="mt-2 text-sm text-gray-600">
                                File yang diizinkan adalah PDF, DOC, dan DOCX dengan ukuran maksimal 5MB.
                            </p>
                        </div>
                        

                        <!-- Upload Formulir KM 4 -->
                        <div>
                            <label for="formulir_km4" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload Formulir KM 4 <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center">
                                <label for="formulir_km4"
                                    class="flex items-center justify-center px-3 py-1.5 bg-blue-600 text-white rounded-md shadow-sm cursor-pointer hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                    </svg>
                                    Pilih File
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="formulir_km4_filename">Tidak ada file
                                    dipilih</span>
                            </div>
                            <input type="file" name="formulir_km4" id="formulir_km4" accept=".pdf,.doc,.docx"
                                class="hidden" required>
                                <!-- Catatan mengenai unggahan file -->
                            <p class="mt-2 text-sm text-gray-600">
                                File yang diizinkan adalah PDF, DOC, dan DOCX dengan ukuran maksimal 5MB.
                            </p>
                        </div>

                        <!-- Tombol Submit dan Batal -->
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-3 bg-green-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Kirim ke Inspektur
                            </button>
                            <a href="{{ route('spt.index') }}"
                                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Menampilkan Nama File yang Dipilih -->
    <script>
        document.getElementById('pka').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'Tidak ada file dipilih';
            document.getElementById('pka_filename').textContent = fileName;
        });

        document.getElementById('formulir_km4').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'Tidak ada file dipilih';
            document.getElementById('formulir_km4_filename').textContent = fileName;
        });
    </script>
</x-app-layout>
