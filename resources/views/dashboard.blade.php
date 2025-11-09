<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div 
        class="py-12" 
        x-data="{ 
            showTaskModal: false, 
            modalTitle: '', 
            modalTasks: [],
            allTaskGroups: {} 
        }"
        x-init="
            allTaskGroups = JSON.parse($el.dataset.tasks);
        "
        data-tasks="{{ json_encode($data['progressTasks']) }}"
    >
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Selamat Datang Kembali, {{ Auth::user()->name }}!
                </div>
            </div>

<div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Tracker Ringkasan Penugasan</h3>
                @php
                    $tracker = $data['progressTracker'];
                    
                    $highestActiveStep = 0;
                    if ($tracker['perencanaan'] > 0) $highestActiveStep = 10;
                    if ($tracker['persiapan'] > 0) $highestActiveStep = 20;
                    if ($tracker['pelaksanaan'] > 0) $highestActiveStep = 80;
                    if ($highestActiveStep == 0 && $tracker['lhp_selesai'] > 0) $highestActiveStep = 100;
                @endphp
                <div class="stepper-wrapper-modal">
                    <div class="stepper-item-modal {{ $highestActiveStep >= 10 ? 'completed' : '' }} {{ $highestActiveStep == 10 ? 'active' : '' }}">
                        <div class="step-counter-modal">1</div>
                        <div class="step-name-modal">Perencanaan <br> (10%)</div>
                        <button 
                            type="button" 
                            class="step-count font-bold text-lg cursor-pointer hover:underline disabled:no-underline disabled:opacity-50 disabled:cursor-default"
                            @disabled($tracker['perencanaan'] == 0) {{-- Perbaikan di sini --}}
                            @click="
                                modalTitle = 'Tugas Tahap Perencanaan';
                                modalTasks = allTaskGroups.perencanaan;
                                showTaskModal = true;
                            ">
                            {{ $tracker['perencanaan'] }}
                        </button>
                    </div>
                    <div class="stepper-item-modal {{ $highestActiveStep >= 20 ? 'completed' : '' }} {{ $highestActiveStep == 20 ? 'active' : '' }}">
                        <div class="step-counter-modal">2</div>
                        <div class="step-name-modal">Persiapan <br> (10%)</div>
                        <button 
                            type="button" 
                            class="step-count font-bold text-lg cursor-pointer hover:underline disabled:no-underline disabled:opacity-50 disabled:cursor-default"
                            @disabled($tracker['persiapan'] == 0) {{-- Perbaikan di sini --}}
                            @click="
                                modalTitle = 'Tugas Tahap Persiapan';
                                modalTasks = allTaskGroups.persiapan;
                                showTaskModal = true;
                            ">
                            {{ $tracker['persiapan'] }}
                        </button>
                    </div>
                    <div class="stepper-item-modal {{ $highestActiveStep >= 80 ? 'completed' : '' }} {{ $highestActiveStep == 80 ? 'active' : '' }}">
                        <div class="step-counter-modal">3</div>
                        <div class="step-name-modal">Pelaksanaan <br> (60%)</div>
                        <button 
                            type="button" 
                            class="step-count font-bold text-lg cursor-pointer hover:underline disabled:no-underline disabled:opacity-50 disabled:cursor-default"
                            @disabled($tracker['pelaksanaan'] == 0) {{-- Perbaikan di sini --}}
                            @click="
                                modalTitle = 'Tugas Tahap Pelaksanaan';
                                modalTasks = allTaskGroups.pelaksanaan;
                                showTaskModal = true;
                            ">
                            {{ $tracker['pelaksanaan'] }}
                        </button>
                    </div>
                    <div class="stepper-item-modal {{ $highestActiveStep == 100 || $tracker['lhp_selesai'] > 0 ? 'completed' : '' }}">
                        <div class="step-counter-modal">4</div>
                        <div class="step-name-modal">LHP Selesai <br> (20%)</div>
                        <button 
                            type="button" 
                            class="step-count font-bold text-lg cursor-pointer hover:underline disabled:no-underline disabled:opacity-50 disabled:cursor-default"
                            @disabled($tracker['lhp_selesai'] == 0) {{-- Perbaikan di sini --}}
                            @click="
                                modalTitle = 'Tugas Selesai (LHP Disetujui)';
                                modalTasks = allTaskGroups.lhp_selesai;
                                showTaskModal = true;
                            ">
                            {{ $tracker['lhp_selesai'] }}
                        </button>
                    </div>
                </div>
                @if($tracker['ditolak'] > 0)
                <div class="text-center text-sm text-red-600 mt-2">
                    (Terdapat 
                    <button 
                        type="button" 
                        class="font-semibold hover:underline"
                        @click="
                            modalTitle = 'Tugas Ditolak/Dibatalkan';
                            modalTasks = allTaskGroups.ditolak;
                            showTaskModal = true;
                        ">
                        {{ $tracker['ditolak'] }} tugas
                    </button>
                     ditolak/dibatalkan)
                </div>
                @endif
            </div>
@if(Auth::user()->role === 'admin')
                @include('dashboard.admin', ['data' => $data])
            @elseif(Auth::user()->role === 'sekretaris')
                @include('dashboard.sekretaris', ['data' => $data])
            @elseif(Auth::user()->role === 'inspektur')
                @include('dashboard.inspektur', ['data' => $data])
            @endif

        </div>

<div 
            x-show="showTaskModal" 
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" 
            x-cloak>
            
            <div 
                @click.away="showTaskModal = false"
                x-show="showTaskModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="bg-white rounded-lg shadow-xl w-full max-w-lg p-6 mx-4 max-h-[70vh] flex flex-col">
                
                <h3 class="text-lg font-semibold text-gray-900 mb-4" x-text="modalTitle"></h3>

                <div class="overflow-y-auto border rounded-md">
                    <ul class="divide-y divide-gray-200">
                        <template x-for="(task, index) in modalTasks" :key="index">
                            <li class="px-4 py-3 flex items-center">
                                <span class="text-sm font-medium text-gray-500 mr-3" x-text="index + 1 + '.'"></span>
                                <span class="text-sm text-gray-800" x-text="task.name"></span>
                            </li>
                        </template>
                        <template x-if="modalTasks.length === 0">
                             <li class="px-4 py-3 text-sm text-gray-500 text-center">Tidak ada tugas dalam tahap ini.</li>
                        </template>
                    </ul>
                </div>

                <div class="mt-6 text-right">
                    <button 
                        type="button" 
                        @click="showTaskModal = false"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md shadow hover:bg-gray-700 transition">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
</div>
</x-app-layout>