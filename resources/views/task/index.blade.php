<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Tugas') }}
        </h2>
    </x-slot>

<div class="py-12" x-data="{ 
        isModalOpen: false, 
        rejectTaskId: null, 
        showProgressModal: false, 
        modalProgress: 0, 
        modalStatus: '', 
        modalReason: '' 
    }">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- @if (session('success'))
                        <div class="mb-4 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif --}}

                    <div class="overflow-x-auto">
<table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Jenis Penugasan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Penugasan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Komposisi Tim
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Hari
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Status
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alasan Penolakan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                        <td class="px-6 py-4 whitespace-nowrap">
@php
                                                $statusClass = '';
                                                $statusText = '';
                                                
                                                switch ($task->status) {
                                                    case 'pending':
                                                        $statusClass = 'text-yellow-800 bg-yellow-100 hover:bg-yellow-200';
                                                        $statusText = __('Menunggu persetujuan');
                                                        break;
                                                    case 'Disetujui Sekretaris':
                                                        $statusClass = 'text-green-800 bg-green-100 hover:bg-green-200';
                                                        $statusText = __('Disetujui Sekretaris');
                                                        break;
                                                    case 'Disetujui Inspektur':
                                                        $statusClass = 'text-green-800 bg-green-100 hover:bg-green-200';
                                                        $statusText = __('Disetujui Inspektur');
                                                        break;
                                                    case 'Ditolak Sekretaris':
                                                        $statusClass = 'text-red-800 bg-red-100 hover:bg-red-200';
                                                        $statusText = __('Ditolak Sekretaris');
                                                        break;
                                                    case 'Di Setujui Inspektur': // Menangani typo jika ada
                                                        $statusClass = 'text-green-800 bg-green-100 hover:bg-green-200';
                                                        $statusText = __('Disetujui Inspektur');
                                                        break;
                                                    case 'Ditolak Inspektur':
                                                        $statusClass = 'text-red-800 bg-red-100 hover:bg-red-200';
                                                        $statusText = __('Ditolak Inspektur');
                                                        break;
                                                    default: // Termasuk 'rejected'
                                                        $statusClass = 'text-red-800 bg-red-100 hover:bg-red-200';
                                                        $statusText = __('Ditolak');
                                                        break;
                                                }
                                            @endphp
                                            
                                            <button 
                                                type="button" 
                                                class="inline-flex px-2 py-1 text-xs font-semibold leading-5 rounded-full {{ $statusClass }} transition-colors duration-150"
                                                @click="
                                                    showProgressModal = true;
                                                    modalProgress = {{ $task->progress_percentage }};
                                                    modalStatus = '{{ $task->status }}';
                                                    modalReason = '{{ $task->rejection_reason ?? '' }}';
                                                ">
                                                {{ $statusText }}
                                            </button>
</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if (
                                                ($task->status === 'Ditolak Sekretaris' || $task->status === 'Ditolak Inspektur') &&
!empty($task->rejection_reason))
                                                {{ $task->rejection_reason }}
                                            @else
                                                -
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if (
                                                $task->status === 'pending' ||
$task->status === 'rejected' ||
                                                    $task->status === 'Ditolak Sekretaris' ||
                                                    $task->status === 'Ditolak Inspektur')
                                                <div class="flex justify-center space-x-4">
                                                    <a href="{{ Auth::user()->role === 'admin' ? route('task.edit', $task->id) : route('sekretaris.task.edit', $task->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                                                        Edit
                                                    </a>

                                                    <form action="{{ Auth::user()->role === 'admin' ? route('task.destroy', $task->id) : route('sekretaris.task.destroy', $task->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">
                                                        @csrf
@method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md shadow hover:bg-red-700 transition">
                                                            Hapus
</button>
                                                    </form>
                                                </div>
                                            @else
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

                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>

<div 
            x-show="showProgressModal" 
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" 
            x-cloak>
            
            <div 
                @click.away="showProgressModal = false"
                x-show="showProgressModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="bg-white rounded-lg shadow-xl w-full max-w-2xl p-6 mx-4">
                
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Progres Penugasan</h3>

                <div class="stepper-wrapper-modal">
                    <div class="stepper-item-modal" :class="{
                        'completed': modalProgress >= 10,
                        'active': modalProgress == 10,
                        'rejected': modalStatus == 'Ditolak Sekretaris' || modalStatus == 'Ditolak Inspektur'
                    }">
                        <div class="step-counter-modal">1</div>
                        <div class="step-name-modal">Perencanaan (10%)</div>
                    </div>
                    <div class="stepper-item-modal" :class="{
                        'completed': modalProgress >= 20,
                        'active': modalProgress == 20,
                        'rejected': modalStatus == 'Ditolak Sekretaris' || modalStatus == 'Ditolak Inspektur'
                    }">
                        <div class="step-counter-modal">2</div>
                        <div class="step-name-modal">Persiapan (10%)</div>
                    </div>
                    <div class="stepper-item-modal" :class="{
                        'completed': modalProgress >= 80,
                        'active': modalProgress == 80,
                        'rejected': modalStatus == 'Ditolak Sekretaris' || modalStatus == 'Ditolak Inspektur'
                    }">
                        <div class="step-counter-modal">3</div>
                        <div class="step-name-modal">Pelaksanaan (60%)</div>
                    </div>
                    <div class="stepper-item-modal" :class="{
                        'completed': modalProgress == 100,
                        'rejected': modalStatus == 'Ditolak Sekretaris' || modalStatus == 'Ditolak Inspektur'
                    }">
                        <div class="step-counter-modal">4</div>
                        <div class="step-name-modal">LHP Selesai (20%)</div>
                    </div>
                </div>
                
                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold">Status Saat Ini: <span x-text="modalStatus"></span></h4>
                    <div x-show="modalReason" class="mt-2">
                        <p class="text-sm text-gray-700"><strong>Alasan Penolakan:</strong> <span x-text="modalReason"></span></p>
                    </div>
                    <div x-show="!modalReason && modalProgress == 0" class="mt-2">
                        <p class="text-sm text-gray-700">Tugas ditolak namun alasan tidak dicantumkan.</p>
                    </div>
                </div>

                <div class="mt-6 text-right">
                    <button 
                        type="button" 
                        @click="showProgressModal = false"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md shadow hover:bg-gray-700 transition">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
</div>
</x-app-layout>