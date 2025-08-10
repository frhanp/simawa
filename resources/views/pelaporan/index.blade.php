<!-- resources/views/pelaporan/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pelaporan') }}
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
                    @if (auth()->user() && auth()->user()->role === 'admin')
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-medium text-gray-700">Pelaporan</h3>
                            <a href="{{ route('pelaporan.create') }}"
                                class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah Pelaporan
                            </a>
                        </div>
                    @endif


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
                                        Tugas
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 8
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 10
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kertas Kerja AT
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Konsep LHP
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        EXPOSE Pelaporan
                                    </th>

                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Expose
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alasan Tolak
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                    
                                </tr>
                            </thead>
                            <!-- Body Tabel -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pelaporans as $pelaporan)
                                    <tr class="hover:bg-gray-100">
                                        <!-- No -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($pelaporans->currentPage() - 1) * $pelaporans->perPage() }}
                                        </td>

                                        <!-- Task -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->task->assignment_type }}
                                        </td>

                                        <!-- KM 8 -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->km8)
                                                <a href="{{ asset('storage/' . $pelaporan->km8) }}" target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat KM 8
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- KM 10 -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->km10)
                                                <a href="{{ asset('storage/' . $pelaporan->km10) }}" target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat KM 10
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Kertas Kerja AT -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->kertas_kerja_at)
                                                <a href="{{ asset('storage/' . $pelaporan->kertas_kerja_at) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat Kertas Kerja AT
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Konsep LHP -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->konsep_lhp)
                                                <a href="{{ asset('storage/' . $pelaporan->konsep_lhp) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat Konsep LHP
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Exposé Pelaporan -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->expose_pelaporan)
                                                <a href="{{ asset('storage/' . $pelaporan->expose_pelaporan) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat EXPOSE
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Status -->


                                        <!-- Tanggal Expose -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->tanggal_expose ? \Carbon\Carbon::parse($pelaporan->tanggal_expose)->format('d M Y') : '-' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <span
                                                class="px-2 py-1 text-xs font-medium rounded-full 
                                                {{ $pelaporan->status === 'Menunggu Inspektur'
                                                 ? 'bg-yellow-100 text-yellow-800'
                                                : ($pelaporan->status === 'Acc'
                                                 ? 'bg-green-100 text-green-800'
                                                : ($pelaporan->status === 'Ditolak'
                                                ? 'bg-red-100 text-red-800'
                                                : 'bg-gray-100 text-gray-800')) }}">
                                                {{ ucfirst($pelaporan->status) }}
                                            </span>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->alasan_tolak }}
                                        </td>
                                        <!-- Aksi -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @if (auth()->user()->role === 'admin')
                                                @if ($pelaporan->status === 'Menunggu Inspektur' || $pelaporan->status === 'Ditolak' || $pelaporan->status === 'Acc' || $pelaporan->status === 'Ditolak Inspektur')
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('pelaporan.edit', $pelaporan->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                        <i class="fas fa-edit mr-2"></i>
                                                        Edit
                                                    </a>
                                                    <!-- Tombol Hapus -->
                                                    <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}" method="POST" class="inline-block"
                                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            @elseif (auth()->user()->role === 'inspektur')
                                                @if ($pelaporan->status === 'Menunggu Inspektur')
                                                    <!-- Tombol ACC -->
                                                    <form action="{{ route('inspektur.pelaporan.acc', $pelaporan->id) }}" method="POST" class="inline-block">
                                                        @csrf
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                            <i class="fas fa-check mr-2"></i>
                                                            ACC
                                                        </button>
                                                    </form>
                                                    <!-- Tombol Tolak -->
                                                    <button type="button" onclick="openModal({{ $pelaporan->id }})"
                                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                        <i class="fas fa-times mr-2"></i>
                                                        Tolak
                                                    </button>
                                                @endif
                                            @endif
                                        </td>
                                        
                                        <!-- Modal Tolak -->
                                        <div id="modal-tolak" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center z-50">
                                            <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
                                                <h3 class="text-lg font-medium text-gray-700">Tolak Pelaporan</h3>
                                                <form action="{{ route('inspektur.pelaporan.reject') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" id="pelaporan_id" name="pelaporan_id">
                                                    <div class="mt-4">
                                                        <label for="alasan_tolak" class="block text-sm text-gray-600">Alasan Penolakan:</label>
                                                        <textarea id="alasan_tolak" name="alasan_tolak" class="w-full border-gray-300 rounded-md" rows="4" required></textarea>
                                                    </div>
                                                    <div class="mt-4 flex justify-end">
                                                        <button type="button" onclick="closeModal()"
                                                            class="px-4 py-2 bg-gray-500 text-white rounded-md mr-2">Batal</button>
                                                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">Tolak</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        <!-- JavaScript untuk Modal -->
                                        <script>
                                            function openModal(pelaporanId) {
                                                document.getElementById('modal-tolak').classList.remove('hidden');
                                                document.getElementById('pelaporan_id').value = pelaporanId;
                                            }
                                        
                                            function closeModal() {
                                                document.getElementById('modal-tolak').classList.add('hidden');
                                            }
                                        </script>
                                        


                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8"
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                        Tidak ada pelaporan.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind -->
                    <div class="mt-6">
                        {{ $pelaporans->links('pagination::tailwind') }}
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
