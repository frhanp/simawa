{{-- resources/views/inspektur/orang/index.blade.php --}}

<x-app-layout>
  <x-slot name="header">
    <h2 class="text-lg font-semibold text-gray-900">Data Personel</h2>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
    @if (session('ok'))
      <div class="mb-4 rounded-md bg-green-50 border border-green-200 p-3 text-sm text-green-800">
        {{ session('ok') }}
      </div>
    @endif

    <!-- Card: Filter + Tambah -->
    <div class="mb-4 bg-white rounded-lg shadow-sm border border-gray-200 p-4">
      {{-- [DIUBAH] Grid dari 3 jadi 4 kolom untuk menampung dropdown jabatan --}}
      <form method="get" class="grid gap-3 sm:grid-cols-4">
        <div class="sm:col-span-2">
          {{-- [TETAP] Input pencarian keyword --}}
          <x-input-label value="Cari" />
          <x-text-input name="q" value="{{ $q }}" class="mt-1 w-full" placeholder="Nama atau Jabatan…" />
        </div>

        <div>
          {{-- [DITAMBAHKAN] Dropdown filter jabatan --}}
          <x-input-label value="Jabatan" />
          <select name="jabatan" class="mt-1 w-full border-gray-300 rounded-md">
            <option value="">-- Semua --</option>
            @foreach($roles as $r)
              <option value="{{ $r }}" @selected(($jabatan ?? '') === $r)>{{ $r }}</option>
            @endforeach
          </select>
        </div>

        <div class="flex items-end gap-2">
          {{-- [TETAP] Tombol cari --}}
          <x-primary-button class="h-10">Cari</x-primary-button>

          {{-- [DITAMBAHKAN] Tombol reset untuk menghapus filter & keyword --}}
          @if(request()->hasAny(['q','jabatan']))
            <a href="{{ route('inspektur.orang.index') }}"
               class="inline-flex items-center h-10 px-4 rounded-lg border border-gray-200 bg-white text-gray-700 text-sm">
              Reset
            </a>
          @endif

          {{-- [TETAP] Tombol tambah data --}}
          <a href="{{ route('inspektur.orang.create') }}" class="inline-flex items-center h-10 px-4 rounded-lg bg-blue-600 text-white text-sm font-medium">
            Tambah
          </a>
        </div>
      </form>
    </div>

    <!-- Card: Tabel -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
          <thead class="bg-gray-50 text-gray-700">
            <tr>
              <th class="px-4 py-2 text-left font-medium">Nama</th>
              <th class="px-4 py-2 text-left font-medium">Jabatan</th>
              <th class="px-4 py-2 text-right font-medium w-40">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            @forelse($items as $i)
              <tr>
                <td class="px-4 py-2">{{ $i->nama }}</td>
                <td class="px-4 py-2">{{ $i->jabatan }}</td>
                <td class="px-4 py-2 text-right">
                  <a href="{{ route('inspektur.orang.edit',$i) }}" class="text-blue-600 hover:underline">Edit</a>
                  <form action="{{ route('inspektur.orang.destroy',$i) }}" method="post" class="inline"
                        onsubmit="return confirm('Hapus data ini?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline ml-3">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="px-4 py-6 text-center text-gray-500">Belum ada data.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- [TETAP] Pagination; sudah otomatis ikut query string karena withQueryString() di controller --}}
      <div class="px-4 py-3 border-t border-gray-100">
        {{ $items->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
