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
            @if($errors->has('anggota'))
              <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                {{ $errors->first('anggota') }}
              </div>
            @endif
  
            <form method="POST" action="{{ route('task.store') }}" class="space-y-6">
              @csrf
  
              {{-- Jenis Penugasan --}}
              <div>
                <label class="block text-sm mb-1">Jenis Penugasan</label>
                <input type="text" name="assignment_type"
                       class="block w-full border-gray-300 rounded-md"
                       value="{{ old('assignment_type') }}">
              </div>
  
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Penanggung Jawab --}}
                <div>
                  <label class="block text-sm mb-1">Penanggung Jawab</label>
                  <select name="penanggung_jawab" class="w-full border-gray-300 rounded-md">
                    <option value="">-- Pilih --</option>
                    @foreach($penanggungJawab as $o)
                      <option value="{{ $o->id }}" @selected(old('penanggung_jawab') == $o->id)>
                        {{ $o->nama }}
                      </option>
                    @endforeach
                  </select>
                </div>
  
                {{-- Wakil Penanggung Jawab --}}
                <div>
                  <label class="block text-sm mb-1">Wakil Penanggung Jawab</label>
                  <select name="wakil_penanggung_jawab" class="w-full border-gray-300 rounded-md">
                    <option value="">-- Pilih --</option>
                    @foreach($wakilPenanggungJawab as $o)
                      <option value="{{ $o->id }}" @selected(old('wakil_penanggung_jawab') == $o->id)>
                        {{ $o->nama }}
                      </option>
                    @endforeach
                  </select>
                </div>
  
                {{-- Ketua Tim --}}
                <div>
                  <label class="block text-sm mb-1">Ketua Tim</label>
                  <select name="ketua_tim" class="w-full border-gray-300 rounded-md">
                    <option value="">-- Pilih --</option>
                    @foreach($ketuaTim as $o)
                      @php
                        $isLocked    = $lockedIds->contains((string)$o->id);
                        $isSelectedK = (string)old('ketua_tim') === (string)$o->id;
                      @endphp
                      @if($isSelectedK)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>🔒 {{ $o->nama }}</option>
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
                  $selectedPengtek = collect(old('pengendali_teknis', []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Pengendali Teknis</label>
                  <select name="pengendali_teknis[]" id="pengendali_teknis" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($pengendaliTeknis as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedPengtek->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>🔒 {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
  
                {{-- Anggota Tim --}}
                @php
                  $selectedAnggota = collect(old('anggota_tim', []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Anggota Tim</label>
                  <select name="anggota_tim[]" id="anggota_tim" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($anggotaTim as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedAnggota->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>🔒 {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
  
                {{-- Penunjang --}}
                @php
                  $selectedPenunjang = collect(old('penunjang', []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Penunjang</label>
                  <select name="penunjang[]" id="penunjang" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($penunjang as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedPenunjang->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>🔒 {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
  
              <div class="flex justify-end gap-3 pt-2">
                <a href="{{ route('task.index') }}" class="px-4 py-2 rounded-md bg-gray-600 text-white">Batal</a>
                <button class="px-5 py-2 rounded-md bg-blue-600 text-white">Simpan Tugas</button>
              </div>
            </form>
  
            {{-- Tom Select --}}
            <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
            <script>
              document.addEventListener('DOMContentLoaded', function () {
                const common = { plugins: ['remove_button'], persist: false, create: false };
                new TomSelect('#pengendali_teknis', common);
                new TomSelect('#anggota_tim', common);
                new TomSelect('#penunjang', common);
              });
            </script>
  
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  