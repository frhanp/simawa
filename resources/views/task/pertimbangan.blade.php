<!-- resources/views/tasks/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pertimbangan Tugas Sekretaris') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Alpine.js untuk mengelola state modal -->
        <div x-data="{ isModalOpen: false, rejectTaskId: null }" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Penugasan
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Penugasan
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Komposisi Tim
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Hari
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tasks as $task)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $task->jenis_penugasan }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="border border-gray-300 rounded-lg p-4 bg-gray-50 shadow-sm">
                                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Komposisi Tim</h3>
                                                <table class="table-auto w-full text-left text-sm border border-gray-300">
                                                    <tbody>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Wakil Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['wakil_penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Pengendali Teknis:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['pengendali_teknis']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['pengendali_teknis'] as $pengendali)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $pengendali }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Ketua Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['ketua_tim'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Anggota Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['anggota_tim']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['anggota_tim'] as $anggota)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $anggota }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penunjang:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['penunjang']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['penunjang'] as $penunjang)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $penunjang }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $task->number_of_days }} Hari
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if ($task->status === 'pending')
                                                <div class="flex justify-center space-x-4">
                                                    <!-- Tombol Acc -->
                                                    <a href="{{ route('task.sekretaris.accept', $task->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md shadow hover:bg-green-700 transition">
                                                        Acc
                                                    </a>
                                                    
                                                    <!-- Tombol Tolak, akan membuka modal -->
                                                    <button 
                                                        @click="isModalOpen = true; rejectTaskId = {{ $task->id }}" 
                                                        type="button" 
                                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md shadow hover:bg-red-700 transition">
                                                        Tolak
                                                    </button>
                                                </div>
                                                @elseif ($task->status === 'Disetujui Inspektur')
                                                @if ($task->spt->isEmpty())
                                                    {{-- Tombol Unggah & Buat PDF diganti menjadi satu tombol "Proses SPT" --}}
                                                    <a href="{{ route('sekretaris.spt.proses', $task->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md shadow hover:bg-purple-700 transition">
                                                        Proses Surat Perintah Tugas
                                                    </a>
                                                @else
                                                    <div class="flex items-center justify-center text-gray-500">
                                                        <span>SPT Sudah Dibuat</span>
                                                    </div>
                                                @endif
                                            @else
                                                <!-- Aksi Tidak Tersedia Jika Sudah Acc/Tolak -->
                                                <div class="flex items-center justify-center text-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5 8V6a5 5 0 0110 0v2h1a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1v-8a1 1 0 011-1h1zm2-2a3 3 0 116 0v2H7V6zm8 4v6H5v-6h10z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Aksi Tidak Tersedia</span>
                                                </div>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>

                <!-- Modal untuk menolak tugas -->
                <div x-show="isModalOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center px-4">
                    <!-- Background Overlay -->
                    <div @click="isModalOpen = false" class="absolute inset-0 bg-black opacity-50 transition-opacity">
                    </div>

                    <!-- Modal Content -->
                    <div class="bg-white rounded-lg shadow-lg z-10 w-full max-w-md mx-auto p-6 transform transition-all"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Alasan Penolakan</h3>
                        <form method="POST" action="{{ route('task.sekretaris.reject') }}">
                            @csrf
                            <input type="hidden" name="task_id" :value="rejectTaskId">
                            <div class="mb-4">
                                <label for="rejection_reason"
                                    class="block text-sm font-medium text-gray-700">Alasan</label>
                                <textarea id="rejection_reason" name="rejection_reason" rows="3" required
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Masukkan alasan penolakan"></textarea>
                                @error('rejection_reason')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end space-x-4">
                                <button type="button" @click="isModalOpen = false"
                                    class="px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition">
                                    Tolak
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
