<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Detail Persiapan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-8">
                    <!-- Informasi SPT -->
                    {{-- <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Informasi Persiapan Tugas</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Nomor SPT -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Nomor SPT</p>
                                    <p class="text-lg font-semibold text-gray-800">{{ $preparation->spt->id }}</p>
                                </div>
                            </div>

                            <!-- Nama Tugas -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Nama Tugas</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ optional($preparation->spt->task)->assignment_type }}</p>
                                </div>
                            </div>

                            <!-- Tanggal -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Tanggal</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ \Carbon\Carbon::parse($preparation->spt->tanggal)->format('d-m-Y') }}</p>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0 mt-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H16V20H8V16Z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Deskripsi</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ optional($preparation->spt->task)->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- File yang Diunggah -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">File yang Diunggah</h3>
                        <div class="space-y-4">
                            @if ($preparation->pka_path)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-3"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <a href="{{ asset('storage/' . $preparation->pka_path) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Formulir PKA
                                    </a>
                                </div>
                            @endif

                            @if ($preparation->formulir_km4_path)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-3"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <a href="{{ asset('storage/' . $preparation->formulir_km4_path) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Formulir KM 4
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Status Persiapan -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Status Persiapan</h3>
                        <div class="space-y-2">
                            <p>
                                <strong>Status:</strong>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                    @if ($preparation->status === 'Pending') bg-yellow-100 text-yellow-800
                                    @elseif($preparation->status === 'Diterima')
                                        bg-green-100 text-green-800
                                    @elseif($preparation->status === 'Ditolak')
                                        bg-red-100 text-red-800
                                    @else
                                        bg-gray-100 text-gray-800 @endif
                                ">
                                    {{ $preparation->status }}
                                </span>
                            </p>
                            @if ($preparation->note)
                                <p><strong>Catatan:</strong> <span
                                        class="text-gray-700">{{ $preparation->note }}</span></p>
                            @endif
                        </div>
                    </div>

                    <!-- Aksi Persetujuan -->
                    @if ($preparation->status === 'Pending')
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Tindakan</h3>
                            <div class="flex space-x-4">
                                <!-- Tombol Setujui -->
                                <form action="{{ route('inspektur.preparations.approve', $preparation->id) }}"
                                    method="POST" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition"
                                        onclick="return confirm('Apakah Anda yakin ingin menyetujui persiapan ini?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Setujui
                                    </button>
                                </form>

                                <!-- Tombol Tolak -->
                                <button type="button"
                                    class="flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition"
                                    onclick="toggleRejectModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Tolak
                                </button>
                            </div>
                        </div>

                        <!-- Modal Tolak -->
                        <div id="rejectModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                            <div class="flex items-center justify-center min-h-screen px-4">
                                <!-- Overlay -->
                                <div class="fixed inset-0 bg-gray-500 opacity-75"></div>

                                <!-- Modal Content -->
                                <div
                                    class="bg-white rounded-lg shadow-xl transform transition-all sm:max-w-lg sm:w-full z-20">
                                    <div class="p-6">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-full">
                                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tolak Persiapan
                                                    SPT</h3>
                                                <form
                                                    action="{{ route('inspektur.preparations.reject', $preparation->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="mb-4">
                                                        <label for="note"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Alasan Penolakan <span class="text-red-500">*</span>
                                                        </label>
                                                        <textarea name="note" id="note" rows="4"
                                                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                                                            required></textarea>
                                                    </div>
                                                    <div class="flex justify-end space-x-2">
                                                        <button type="button" onclick="toggleRejectModal()"
                                                            class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                                            Batal
                                                        </button>
                                                        <button type="submit"
                                                            class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            Tolak
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Script untuk Toggle Modal Tolak -->
        <script>
            function toggleRejectModal() {
                const modal = document.getElementById('rejectModal');
                modal.classList.toggle('hidden');
            }
        </script>
</x-app-layout>
