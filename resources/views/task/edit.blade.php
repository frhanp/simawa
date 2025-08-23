<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Tugas') }} - {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- =======================================================
                         [DITAMBAHKAN] KUMPULKAN ID ORANG YANG TERKUNCI (selain PJ/WPJ)
                         dari semua tugas AKTIF, lalu kecualikan yang sudah terpilih
                         di task ini (agar tetap bisa tampil saat edit)
                    ======================================================== --}}
                    @php
                        $lockedIds = \App\Models\Task::query()
                            ->whereNotIn('status', ['selesai','Selesai','cancelled','dibatalkan'])
                            ->get('team_composition')
                            ->flatMap(function ($t) {
                                $tc = is_array($t->team_composition)
                                      ? $t->team_composition
                                      : (json_decode($t->team_composition, true) ?? []);
                                return collect([
                                    $tc['ketua_tim']            ?? null,
                                    ...((array)($tc['pengendali_teknis'] ?? [])),
                                    ...((array)($tc['anggota_tim']       ?? [])),
                                    ...((array)($tc['penunjang']         ?? [])),
                                ]);
                            })
                            ->filter()
                            ->unique()
                            ->values();

                        $tcCurrent = is_array($task->team_composition)
                                     ? $task->team_composition
                                     : (json_decode($task->team_composition, true) ?? []);
                        $allowedCurrent = collect([
                            $tcCurrent['ketua_tim']            ?? null,
                            ...((array)($tcCurrent['pengendali_teknis'] ?? [])),
                            ...((array)($tcCurrent['anggota_tim']       ?? [])),
                            ...((array)($tcCurrent['penunjang']         ?? [])),
                        ])->filter()->unique();

                        // Jangan kunci pilihan yang memang sudah terpakai di task ini
                        $lockedIds = $lockedIds->diff($allowedCurrent)->values();
                    @endphp
                    {{-- ======================================================= --}}

                    <form method="POST" action="{{ route('task.update', $task->id) }}">
                        @csrf
                        @method('PUT')
                    
                        <!-- Usulan Tim -->
                        <h3 class="font-bold text-lg mb-4">Usulan Tim</h3>
                    
                        <!-- Jenis Penugasan -->
                        <div class="mb-4">
                            <label for="assignment_type" class="block text-sm font-medium text-gray-700">Jenis Penugasan</label>
                            <input type="text" id="assignment_type" name="assignment_type"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                value="{{ old('assignment_type', $task->assignment_type) }}" required>
                            @error('assignment_type') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>
                    
                        <!-- Komposisi Tim -->
                        <div class="mb-4">
                            <label for="team_composition" class="block text-sm font-medium text-gray-700">Komposisi Tim</label>
                    
                            <!-- Penanggung Jawab (TIDAK DIKUNCI) -->
                            <div class="mb-4">
                                <label for="penanggung_jawab" class="block text-sm font-medium text-gray-700">Penanggung Jawab</label>
                                <select id="penanggung_jawab" name="penanggung_jawab"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Pilih Penanggung Jawab</option>
                                    @foreach ($penanggungJawab as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ old('penanggung_jawab', json_decode($task->team_composition)->penanggung_jawab) == $orang->id ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                                @error('penanggung_jawab') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                    
                            <!-- Wakil Penanggung Jawab (TIDAK DIKUNCI) -->
                            <div class="mb-4">
                                <label for="wakil_penanggung_jawab" class="block text-sm font-medium text-gray-700">Wakil Penanggung Jawab</label>
                                <select id="wakil_penanggung_jawab" name="wakil_penanggung_jawab"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Pilih Wakil Penanggung Jawab</option>
                                    @foreach ($wakilPenanggungJawab as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ old('wakil_penanggung_jawab', json_decode($task->team_composition)->wakil_penanggung_jawab) == $orang->id ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                                @error('wakil_penanggung_jawab') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                    
                            <!-- Pengendali Teknis (MULTIPLE, DIKUNCI) -->
                            <div class="mb-4">
                                <label for="pengendali_teknis" class="block text-sm font-medium text-gray-700">Pengendali Teknis</label>
                                <select id="pengendali_teknis" name="pengendali_teknis[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($pengendaliTeknis as $orang)
                                        @php $isLocked = $lockedIds->contains($orang->id); @endphp {{-- [DITAMBAHKAN] --}}
                                        @if(!$isLocked) {{-- [DITAMBAHKAN] sembunyikan jika terkunci --}}
                                            <option value="{{ $orang->id }}"
                                                {{ in_array($orang->id, json_decode($task->team_composition)->pengendali_teknis ?? []) ? 'selected' : '' }}>
                                                {{ $orang->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('pengendali_teknis') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                    
                            <!-- Ketua Tim (DIKUNCI) -->
                            <div class="mb-4">
                                <label for="ketua_tim" class="block text-sm font-medium text-gray-700">Ketua Tim</label>
                                <select id="ketua_tim" name="ketua_tim"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Pilih Ketua Tim</option>
                                    @foreach ($ketuaTim as $orang)
                                        @php $isLocked = $lockedIds->contains($orang->id); @endphp {{-- [DITAMBAHKAN] --}}
                                        @if(!$isLocked) {{-- [DITAMBAHKAN] --}}
                                            <option value="{{ $orang->id }}"
                                                {{ old('ketua_tim', json_decode($task->team_composition)->ketua_tim) == $orang->id ? 'selected' : '' }}>
                                                {{ $orang->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('ketua_tim') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                    
                            <!-- Anggota Tim (MULTIPLE, DIKUNCI) -->
                            <div class="mb-4">
                                <label for="anggota_tim" class="block text-sm font-medium text-gray-700">Anggota Tim</label>
                                <select id="anggota_tim" name="anggota_tim[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($anggotaTim as $orang)
                                        @php $isLocked = $lockedIds->contains($orang->id); @endphp {{-- [DITAMBAHKAN] --}}
                                        @if(!$isLocked) {{-- [DITAMBAHKAN] --}}
                                            <option value="{{ $orang->id }}"
                                                {{ in_array($orang->id, json_decode($task->team_composition)->anggota_tim ?? []) ? 'selected' : '' }}>
                                                {{ $orang->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('anggota_tim') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                    
                            <!-- Penunjang (MULTIPLE, DIKUNCI) -->
                            <div class="mb-4">
                                <label for="penunjang" class="block text-sm font-medium text-gray-700">Penunjang</label>
                                <select id="penunjang" name="penunjang[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($penunjang as $orang)
                                        @php $isLocked = $lockedIds->contains($orang->id); @endphp {{-- [DITAMBAHKAN] --}}
                                        @if(!$isLocked) {{-- [DITAMBAHKAN] --}}
                                            <option value="{{ $orang->id }}"
                                                {{ in_array($orang->id, json_decode($task->team_composition)->penunjang ?? []) ? 'selected' : '' }}>
                                                {{ $orang->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('penunjang') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    
                        <!-- Jumlah Hari -->
                        <div class="mb-4">
                            <label for="number_of_days" class="block text-sm font-medium text-gray-700">Jumlah Hari</label>
                            <input type="number" id="number_of_days" name="number_of_days" min="1"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                value="{{ old('number_of_days', $task->number_of_days) }}" required>
                            @error('number_of_days') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="flex justify-end mt-4">
                            <a href="{{ route('task.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Batal</a>
                            <button type="submit"
                                class="ml-4 inline-flex justify-center py-3 px-6 border border-transparent rounded-lg shadow-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Tugas
                            </button>
                        </div>
                    </form>
                    
                    <!-- SweetAlert CDN -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    
                    <!-- Tom Select CDN -->
                    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0/dist/css/tom-select.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0/dist/js/tom-select.complete.min.js"></script>
                    
                    <!-- Tom Select Initialization -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            new TomSelect('#pengendali_teknis', {
                                placeholder: 'Pilih Pengendali Teknis',
                                maxItems: 10,
                            });
                            new TomSelect('#anggota_tim', {
                                placeholder: 'Pilih Anggota Tim',
                                maxItems: 10,
                            });
                            new TomSelect('#penunjang', {
                                placeholder: 'Pilih Penunjang',
                                maxItems: 10,
                            });
                        });
                    </script>
                    
                    @if (session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: '{{ session('success') }}',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        </script>
                    @endif
                    
</x-app-layout>
