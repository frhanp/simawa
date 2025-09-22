<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Persiapan Tugas - Admin') }}
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
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Header dan Aksi Tambahan -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-700">Persiapan Tugas</h3>
                        {{-- <!-- Tombol Refresh atau Aksi Lainnya (Opsional) -->
                        <a href="{{ route('admin.preparations') }}"
                            class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.836 0H20V4h-4v5h-1.582a9 9 0 11-7.916 0H4" />
                            </svg>
                            Refresh
                        </a> --}}
                    </div>

                    <!-- Tabel Responsif -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <!-- Header Tabel -->
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Tugas
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        PKA 
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Formulir KM 4 
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <!-- Body Tabel -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($preparations as $preparation)
                                    <tr class="hover:bg-gray-100">
                                        <!-- No -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($preparations->currentPage() - 1) * $preparations->perPage() }}
                                        </td>

                                        <!-- Nama Tugas -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $preparation->spt->task->assignment_type ?? 'N/A' }}
                                        </td>

                                        <!-- PKA Path -->
                                        <!-- PKA Path -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($preparation->pka_path)
                                                <a href="{{ asset('storage/' . $preparation->pka_path) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                                    </svg>
                                                    Download PKA
                                                </a>
                                            @else
                                                <span class="text-gray-500">Tidak Ada File</span>
                                            @endif
                                        </td>

                                        <!-- Formulir KM 4 Path -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($preparation->formulir_km4_path)
                                                <a href="{{ asset('storage/' . $preparation->formulir_km4_path) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                                    </svg>
                                                    Download Formulir KM 4
                                                </a>
                                            @else
                                                <span class="text-gray-500">Tidak Ada File</span>
                                            @endif
                                        </td>


                                        <!-- Status -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @php
                                                // Definisikan warna berdasarkan status
                                                $statusColors = [
                                                    'Pending' => 'bg-yellow-100 text-yellow-800',
                                                    'Diterima' => 'bg-green-100 text-green-800',
                                                    'Ditolak' => 'bg-red-100 text-red-800',
                                                    // Tambahkan status lain jika diperlukan
                                                ];
                                                $statusClass =
                                                    $statusColors[$preparation->status] ?? 'bg-gray-100 text-gray-800';
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ $preparation->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada persiapan SPT.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind -->
                    <div class="mt-6">
                        {{ $preparations->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Integrasi FontAwesome untuk Ikon Download -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pHg+2V8clVjoTjvJkZGJZmS98fLAV6qKQtwEyn7VEl8dvU+8MznRycAI+pNnLOfRlGxhQcaYDFs/jX1H5Z1vQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>
