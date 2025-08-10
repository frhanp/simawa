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
                        </div>
                    
                        <!-- Komposisi Tim -->
                        <div class="mb-4">
                            <label for="team_composition" class="block text-sm font-medium text-gray-700">Komposisi Tim</label>
                    
                            <!-- Penanggung Jawab -->
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
                            </div>
                    
                            <!-- Wakil Penanggung Jawab -->
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
                            </div>
                    
                            <!-- Pengendali Teknis (TomSelect) -->
                            <div class="mb-4">
                                <label for="pengendali_teknis" class="block text-sm font-medium text-gray-700">Pengendali Teknis</label>
                                <select id="pengendali_teknis" name="pengendali_teknis[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($pengendaliTeknis as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ in_array($orang->id, json_decode($task->team_composition)->pengendali_teknis ?? []) ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <!-- Ketua Tim -->
                            <div class="mb-4">
                                <label for="ketua_tim" class="block text-sm font-medium text-gray-700">Ketua Tim</label>
                                <select id="ketua_tim" name="ketua_tim"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Pilih Ketua Tim</option>
                                    @foreach ($ketuaTim as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ old('ketua_tim', json_decode($task->team_composition)->ketua_tim) == $orang->id ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <!-- Anggota Tim (TomSelect) -->
                            <div class="mb-4">
                                <label for="anggota_tim" class="block text-sm font-medium text-gray-700">Anggota Tim</label>
                                <select id="anggota_tim" name="anggota_tim[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($anggotaTim as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ in_array($orang->id, json_decode($task->team_composition)->anggota_tim ?? []) ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <!-- Penunjang (TomSelect) -->
                            <div class="mb-4">
                                <label for="penunjang" class="block text-sm font-medium text-gray-700">Penunjang</label>
                                <select id="penunjang" name="penunjang[]"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    multiple>
                                    @foreach ($penunjang as $orang)
                                        <option value="{{ $orang->id }}"
                                            {{ in_array($orang->id, json_decode($task->team_composition)->penunjang ?? []) ? 'selected' : '' }}>
                                            {{ $orang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                        </div>
                    
                        <!-- Jumlah Hari -->
                        <div class="mb-4">
                            <label for="number_of_days" class="block text-sm font-medium text-gray-700">Jumlah Hari</label>
                            <input type="number" id="number_of_days" name="number_of_days" min="1"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                value="{{ old('number_of_days', $task->number_of_days) }}" required>
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
