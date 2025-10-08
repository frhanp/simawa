<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perencanaan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Error jika ada konflik --}}
                    @if ($errors->has('anggota'))
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                            {{ $errors->first('anggota') }}
                        </div>
                    @endif

                    <form method="POST"
                        action="{{ Auth::user()->role === 'admin' ? route('task.store') : route('sekretaris.task.store') }}"
                        class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm mb-1">Jenis Penugasan</label>
                            <select name="jenis_penugasan" class="block w-full border-gray-300 rounded-md" required>
                                <option value="">-- Pilih Jenis --</option>
                                @foreach ($jenisPenugasanOptions as $option)
                                    <option value="{{ $option }}" @selected(old('jenis_penugasan') == $option)>{{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Jenis Penugasan --}}
                        <div>
                            <label class="block text-sm mb-1">Nama Penugasan</label>
                            <input type="text" name="assignment_type" class="block w-full border-gray-300 rounded-md"
                                value="{{ old('assignment_type') }}">
                        </div>
                        {{-- Letakkan setelah div "Nama Penugasan" --}}
                        <div class="flex items-center pt-2">
                            <input id="is_berjenjang" name="is_berjenjang" type="checkbox" value="1"
                                @if (old('is_berjenjang')) checked @endif
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_berjenjang" class="ml-2 block text-sm text-gray-900">
                                Penugasan Berjenjang (Buka semua kunci personel)
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label class="block text-sm mb-1">Penanggung Jawab</label>
                                @if ($penanggungJawab->count() > 1)
                                    {{-- Jika lebih dari 1, tampilkan dropdown --}}
                                    <select name="penanggung_jawab" class="w-full border-gray-300 rounded-md">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($penanggungJawab as $o)
                                            <option value="{{ $o->id }}" @selected(old('penanggung_jawab') == $o->id)>
                                                {{ $o->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    {{-- Jika hanya 1, tampilkan sebagai teks dan hidden input --}}
                                    @php $pj = $penanggungJawab->first(); @endphp
                                    <div
                                        class="block w-full border-gray-300 rounded-md bg-gray-100 px-3 py-2 text-gray-700">
                                        {{ $pj->nama }}
                                    </div>
                                    <input type="hidden" name="penanggung_jawab" value="{{ $pj->id }}">
                                @endif
                            </div>

                            <div>
                                <label class="block text-sm mb-1">Wakil Penanggung Jawab</label>
                                @if ($wakilPenanggungJawab->count() > 1)
                                    {{-- Jika lebih dari 1, tampilkan dropdown --}}
                                    <select name="wakil_penanggung_jawab" class="w-full border-gray-300 rounded-md">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($wakilPenanggungJawab as $o)
                                            <option value="{{ $o->id }}" @selected(old('wakil_penanggung_jawab') == $o->id)>
                                                {{ $o->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                @else
                                    {{-- Jika hanya 1, tampilkan sebagai teks dan hidden input --}}
                                    @php $wpj = $wakilPenanggungJawab->first(); @endphp
                                    <div
                                        class="block w-full border-gray-300 rounded-md bg-gray-100 px-3 py-2 text-gray-700">
                                        {{ $wpj->nama }}
                                    </div>
                                    <input type="hidden" name="wakil_penanggung_jawab" value="{{ $wpj->id }}">
                                @endif
                            </div>

                            {{-- Ketua Tim --}}
                            <div>
                                <label class="block text-sm mb-1">Ketua Tim</label>
                                <select name="ketua_tim" class="w-full border-gray-300 rounded-md">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($ketuaTim as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSelectedK = (string) old('ketua_tim') === (string) $o->id;
                                        @endphp
                                        @if ($isSelectedK)
                                            <option value="{{ $o->id }}" selected
                                                data-locked="{{ $isLocked ? 'true' : 'false' }}">{{ $o->nama }}
                                            </option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled data-locked="true">
                                                {{ $o->nama }}</option>
                                        @else
                                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Jumlah Hari --}}
                            <div>
                                <label class="block text-sm mb-1">Jumlah Hari</label>
                                <input type="number" name="number_of_days" min="1"
                                    class="block w-full border-gray-300 rounded-md"
                                    value="{{ old('number_of_days') }}">
                            </div>
                        </div>

                        {{-- Multiple select (3 kolom) --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            {{-- Pengendali Teknis --}}
                            @php
                                $selectedPengtek = collect(old('pengendali_teknis', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Pengendali Teknis</label>
                                <select name="pengendali_teknis[]" id="pengendali_teknis" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($pengendaliTeknis as $o)
                                        <option value="{{ $o->id }}" @selected($selectedPengtek->contains((string) $o->id))>
                                            {{ $o->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="text-xs text-gray-500 mt-1">Maksimal 1 orang.</p>
                            </div>


                            {{-- Anggota Tim --}}
                            @php
                                $selectedAnggota = collect(old('anggota_tim', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Anggota Tim</label>
                                <select name="anggota_tim[]" id="anggota_tim" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($anggotaTim as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSel = $selectedAnggota->contains((string) $o->id);
                                        @endphp
                                        @if ($isSel)
                                            <option value="{{ $o->id }}" selected
                                                data-locked="{{ $isLocked ? 'true' : 'false' }}">{{ $o->nama }}
                                            </option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled data-locked="true">
                                                {{ $o->nama }}</option>
                                        @else
                                            <option value="{{ $o->id }}" data-locked="false">
                                                {{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Penunjang --}}
                            @php
                                $selectedPenunjang = collect(old('penunjang', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Penunjang</label>
                                <select name="penunjang[]" id="penunjang" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($penunjang as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSel = $selectedPenunjang->contains((string) $o->id);
                                        @endphp
                                        @if ($isSel)
                                            <option value="{{ $o->id }}" selected
                                                data-locked="{{ $isLocked ? 'true' : 'false' }}">{{ $o->nama }}
                                            </option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled data-locked="true">
                                                {{ $o->nama }}</option>
                                        @else
                                            <option value="{{ $o->id }}" data-locked="false">
                                                {{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="flex justify-end gap-3 pt-2">
                            <a href="{{ route('task.index') }}"
                                class="px-4 py-2 rounded-md bg-gray-600 text-white">Batal</a>
                            <button class="px-5 py-2 rounded-md bg-blue-600 text-white">Simpan Tugas</button>
                        </div>
                    </form>

                    {{-- Tom Select --}}
                    {{-- Tom Select --}}
                    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const commonConfig = {
                                plugins: ['remove_button'],
                                persist: false,
                                create: false,
                                render: {
                                    option: function(data, escape) {
                                        const originalOption = this.input.querySelector(
                                            `option[value="${escape(data.value)}"]`
                                        );
                                        const isLocked = originalOption && originalOption.dataset.locked === 'true' &&
                                            !document.getElementById('is_berjenjang').checked;
                                        return `<div>${isLocked ? '🔒 ' : ''}${escape(data.text)}</div>`;
                                    }
                                }
                            };

                            const checkbox = document.getElementById('is_berjenjang');
                            const selectIds = ['#anggota_tim', '#penunjang']; // hanya yang dikunci
                            const ketuaSelect = document.querySelector('select[name="ketua_tim"]');
                            let tomSelects = {};

                            // === INIT pengendali_teknis terpisah (tidak terkunci, tapi max 1) ===
                            new TomSelect('#pengendali_teknis', {
                                maxItems: 1,
                                plugins: ['remove_button'],
                                persist: false,
                                create: false,
                            });

                            // === INIT untuk anggota & penunjang ===
                            function initTomSelects() {
                                for (const id in tomSelects) {
                                    tomSelects[id].destroy();
                                }
                                tomSelects = {};

                                const isBerjenjang = checkbox.checked;

                                if (ketuaSelect) {
                                    for (const option of ketuaSelect.options) {
                                        const isLocked = option.dataset.locked === 'true';
                                        option.disabled = !isBerjenjang && isLocked;
                                    }
                                }

                                selectIds.forEach(id => {
                                    const el = document.querySelector(id);
                                    if (!el) return;

                                    for (const option of el.options) {
                                        const isLocked = option.dataset.locked === 'true';
                                        option.disabled = !isBerjenjang && isLocked;
                                    }

                                    tomSelects[id] = new TomSelect(id, commonConfig);
                                });
                            }

                            initTomSelects();
                            checkbox.addEventListener('change', initTomSelects);
                        });
                    </script>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
