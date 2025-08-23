<x-app-layout>
    <x-slot name="header">
      <h2 class="text-lg font-semibold text-gray-900">Tambah Personel</h2>
    </x-slot>
  
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-2xl">
        <form method="post" action="{{ route('inspektur.orang.store') }}" class="grid gap-4">
          @csrf
  
          <div>
            <x-input-label value="Nama" />
            <x-text-input name="nama" value="{{ old('nama') }}" class="mt-1 w-full" />
            <x-input-error :messages="$errors->get('nama')" class="mt-1" />
          </div>
  
          <div>
            <x-input-label value="Jabatan" />
            <select name="jabatan" class="mt-1 w-full border-gray-300 rounded-md">
              <option value="">-- Pilih --</option>
              @foreach(['Penanggung Jawab','Wakil Penanggung Jawab','Ketua Tim','Anggota Tim','Pengendali Teknis','Penunjang'] as $r)
                <option value="{{ $r }}" @selected(old('jabatan')==$r)>{{ $r }}</option>
              @endforeach
            </select>
            <x-input-error :messages="$errors->get('jabatan')" class="mt-1" />
          </div>
  
          <div class="flex items-center gap-2">
            <x-primary-button>Simpan</x-primary-button>
            <a href="{{ route('inspektur.orang.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </x-app-layout>
  