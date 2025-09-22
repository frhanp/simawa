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
                                        No</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tugas</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 8</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 10</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kertas Kerja AT</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Konsep LHP</th>
                                    {{-- <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        EXPOSE Pelaporan</th> --}}

                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Expose</th>

                                    <!-- [DIUBAH] Status baru menambahkan 2 status: Dikonfirmasi Inspektur & Dijadwalkan Ulang -->
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>

                                    <!-- [DIUBAH] Kolom judul: dari "Alasan Tolak" -> "Catatan Jadwal" (fallback ke alasan_tolak bila belum ada kolom) -->
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Catatan Jadwal</th>

                                    <!-- [DIUBAH] Aksi untuk Inspektur: "Konfirmasi Jadwal" & "Ubah Jadwal" -->
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
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
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
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
                                        </td> --}}

                                        <!-- Tanggal Expose -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->tanggal_expose ? \Carbon\Carbon::parse($pelaporan->tanggal_expose)->format('d M Y') : '-' }}
                                        </td>

                                        <!-- [DIUBAH] Badge Status: tambahkan 2 status baru -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @php
                                                $status = $pelaporan->status;
                                                $badge = match ($status) {
                                                    'Menunggu Inspektur' => 'bg-yellow-100 text-yellow-800',
                                                    // [DITAMBAHKAN] status baru
                                                    'Dikonfirmasi Inspektur' => 'bg-green-100 text-green-800',
                                                    'Dijadwalkan Ulang' => 'bg-blue-100 text-blue-800',
                                                    // fallback untuk status lama agar tetap terbaca
                                                    'Acc' => 'bg-green-100 text-green-800',
                                                    'Ditolak', 'Ditolak Inspektur' => 'bg-red-100 text-red-800',
                                                    default => 'bg-gray-100 text-gray-800',
                                                };
                                            @endphp
                                            <span
                                                class="px-2 py-1 text-xs font-medium rounded-full {{ $badge }}">
                                                {{ ucfirst($status) }}
                                            </span>
                                        </td>

                                        <!-- [DIUBAH] Catatan Jadwal: tampilkan catatan_jadwal bila ada, jika tidak fallback ke alasan_tolak -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            {{ $pelaporan->catatan_jadwal ?? ($pelaporan->alasan_tolak ?? '-') }}
                                        </td>

                                        <!-- Aksi -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @if (auth()->user()->role === 'admin')
                                                @if (in_array($pelaporan->status, [
                                                        'Menunggu Inspektur',
                                                        'Ditolak',
                                                        'Acc',
                                                        'Ditolak Inspektur',
                                                        'Dikonfirmasi Inspektur',
                                                        'Dijadwalkan Ulang',
                                                    ]))
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('pelaporan.edit', $pelaporan->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                        <i class="fas fa-edit mr-2"></i>
                                                        Edit
                                                    </a>
                                                    <!-- Tombol Hapus -->
                                                    <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}"
                                                        method="POST" class="inline-block"
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
                                                    <!-- [DIUBAH] Tombol ACC -> Konfirmasi Jadwal -->
                                                    <form
                                                        action="{{ route('inspektur.pelaporan.confirm', $pelaporan->id) }}"
                                                        method="POST" class="inline-block">
                                                        @csrf
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                                            onclick="return confirm('Konfirmasi jadwal expose tanpa perubahan tanggal?')">
                                                            <i class="fas fa-check mr-2"></i>
                                                            Konfirmasi Jadwal
                                                        </button>
                                                    </form>

                                                    <!-- [DIUBAH] Tombol Tolak -> Ubah Jadwal (modal) -->
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-2 bg-amber-600 text-white text-sm font-medium rounded-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 ml-2"
                                                        onclick="document.getElementById('res-{{ $pelaporan->id }}').showModal()">
                                                        <i class="fas fa-calendar-alt mr-2"></i>
                                                        Ubah Jadwal
                                                    </button>

                                                    <!-- [DITAMBAHKAN] Modal Ubah Jadwal -->
                                                    <dialog id="res-{{ $pelaporan->id }}" class="rounded-lg p-0">
                                                        <form method="POST"
                                                            action="{{ route('inspektur.pelaporan.reschedule', $pelaporan->id) }}"
                                                            class="p-4 w-96">
                                                            @csrf
                                                            <h3 class="font-semibold mb-3">Ubah Jadwal Expose</h3>

                                                            <label class="block text-sm">Tanggal baru</label>
                                                            <input type="date" name="tanggal_expose_baru"
                                                                class="mt-1 w-full border-gray-300 rounded-md"
                                                                required>

                                                            <label class="block text-sm mt-3">Catatan
                                                                (opsional)
                                                            </label>
                                                            <input type="text" name="catatan_jadwal"
                                                                class="mt-1 w-full border-gray-300 rounded-md"
                                                                placeholder="Alasan perubahan…">

                                                            <div class="mt-4 flex justify-end gap-2">
                                                                <button type="button"
                                                                    onclick="this.closest('dialog').close()"
                                                                    class="px-3 py-2 border rounded-md">Batal</button>
                                                                <button
                                                                    class="px-3 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </dialog>
                                                @endif
                                            @endif
                                        </td>

                                        <!-- [DIHAPUS] Modal Tolak lama & script open/close (sudah tidak dipakai) -->
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada pelaporan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind (tema putih sudah di-override global) -->
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
