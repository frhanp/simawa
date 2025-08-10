<!-- resources/views/lhp/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar LHP') }}
        </h2>
    </x-slot>

    <!-- Modal Tolak -->
    <div id="rejectModal" class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Alasan Penolakan</h3>
            <form action="{{ route('lhp.reject') }}" method="POST">
                @csrf
                <input type="hidden" id="lhp_id" name="lhp_id">
                <div class="mb-4">
                    <label for="reason" class="block text-sm font-medium text-gray-700">Alasan</label>
                    <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeRejectModal()"
                        class="px-4 py-2 bg-gray-300 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-400">
                        Batal
                    </button>
                    <button type="submit"
                        class="ml-2 px-4 py-2 bg-red-600 text-sm font-medium text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Tolak
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showRejectModal(id) {
            document.getElementById('lhp_id').value = id;
            document.getElementById('rejectModal').classList.remove('hidden');
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
        }
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header dan Aksi Tambahan -->
                    @if (auth()->user()->role !== 'inspektur')
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-medium text-gray-700">LHP</h3>
                            <a href="{{ route('lhp.create') }}"
                                class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah LHP
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
                                        File LHP</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Keterangan</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($lhps as $lhp)
                                    @if (auth()->user()->role === 'inspektur' && $lhp->status === 'ditolak')
                                        @continue
                                    @endif
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($lhps->currentPage() - 1) * $lhps->perPage() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $lhp->task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($lhp->lhp_file)
                                                <a href="{{ asset('storage/' . $lhp->lhp_file) }}" target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat LHP
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $lhp->keterangan ?? '-' }}
                                        </td>
                                        <td class="pl-0 py-4 whitespace-nowrap text-sm text-center">
                                            <span
                                                class="inline-flex items-center justify-center px-1 py-1 text-xs font-semibold rounded-full 
                                                {{ $lhp->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                                {{ $lhp->status === 'disetujui' ? 'bg-green-100 text-green-800' : '' }}
                                                {{ $lhp->status === 'ditolak' ? 'bg-red-100 text-red-800' : '' }}">
                                                {{ ucfirst($lhp->status) }}
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'inspektur')
                                                @if ($lhp->status !== 'disetujui') <!-- Tambahkan kondisi untuk status selain disetujui -->
                                                    <a href="{{ route('lhp.edit', $lhp->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                        <i class="fas fa-edit mr-2"></i>Edit
                                                    </a>
                                                    <form action="{{ route('lhp.destroy', $lhp->id) }}" method="POST"
                                                        class="inline-block"
                                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            <i class="fas fa-trash-alt mr-2"></i>Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            @endif
                                        
                                            @if (auth()->user()->role === 'inspektur' && $lhp->status !== 'disetujui') <!-- Pastikan acc dan tolak tidak muncul jika status disetujui -->
                                                <!-- Tombol Acc -->
                                                <form action="{{ route('lhp.acc', $lhp->id) }}" method="POST" class="inline-block mr-2">
                                                    @csrf
                                                    <button type="submit"
                                                        class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                        <i class="fas fa-check mr-2"></i>Acc
                                                    </button>
                                                </form>
                                        
                                                <!-- Tombol Tolak dengan Alasan -->
                                                <button onclick="showRejectModal({{ $lhp->id }})"
                                                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                    <i class="fas fa-times mr-2"></i>Tolak
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada LHP.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind -->
                    <div class="mt-6">
                        {{ $lhps->links('pagination::tailwind') }}
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
