<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Temuan LHP') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Header Card --}}
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">
                            LHP untuk Tugas:
                            <span class="text-blue-600 font-semibold">{{ $lhp->task->assignment_type }}</span>
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            Daftar temuan (Kondisi, Kriteria, Penyebab, Akibat) untuk LHP ini.
                        </p>
                    </div>

                    @if (auth()->user()->role !== 'inspektur')
                        <a href="{{ route('lhp.penemuan.create', $lhp) }}"
                            class="inline-flex items-center gap-2 px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Tambah Temuan Baru
                        </a>
                    @endif
                </div>
            </div>
            {{-- Tabel --}}
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    Daftar Temuan Saat Ini
                </h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Judul</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600 w-1/6">Kondisi</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600 w-1/6">Kriteria</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600 w-1/6">Penyebab</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600 w-1/6">Akibat</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600 w-1/6">Rekomendasi</th>
                                <th class="px-4 py-3 text-center font-semibold text-gray-600">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($lhp->penemuans as $temuan)
                                <tr class="hover:bg-gray-50 align-top">
                                    {{-- Judul --}}
                                    <td class="px-4 py-3 text-gray-900 font-medium">
                                        {{ $temuan->judul_penemuan }}
                                    </td>

                                    {{-- Kondisi (Full Text) --}}
                                    <td class="px-4 py-3 text-gray-700">
                                        <div class="whitespace-pre-wrap">{{ $temuan->kondisi }}</div>
                                    </td>

                                    {{-- Kriteria (Full Text) --}}
                                    <td class="px-4 py-3 text-gray-700">
                                        <div class="whitespace-pre-wrap">{{ $temuan->kriteria }}</div>
                                    </td>

                                    {{-- Penyebab (Full Text) --}}
                                    <td class="px-4 py-3 text-gray-700">
                                        <span class="inline-block bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium mb-1">
                                            {{ $temuan->penyebab_kategori }}
                                        </span>
                                        <div class="whitespace-pre-wrap">{{ $temuan->penyebab_deskripsi }}</div>
                                    </td>

                                    {{-- Akibat (Full Text) --}}
                                    <td class="px-4 py-3 text-gray-700">
                                        <span class="inline-block bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium mb-1">
                                            {{ $temuan->akibat_kategori }}
                                        </span>
                                        <div class="whitespace-pre-wrap">{{ $temuan->akibat_deskripsi }}</div>
                                    </td>
                                    
                                    {{-- Rekomendasi (Full Text) --}}
                                    <td class="px-4 py-3 text-gray-700">
                                        <span class="inline-block bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium mb-1">
                                            {{ $temuan->rekomendasi_kategori }}
                                        </span>
                                        <div class="whitespace-pre-wrap">{{ $temuan->rekomendasi_deskripsi }}</div>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-4 py-3 text-center">
                                        <div class="flex flex-col space-y-2 items-center">
                                            <a href="{{ route('penemuan.pdf', $temuan) }}" target="_blank"
                                                class="w-full px-3 py-1.5 bg-indigo-600 text-white text-xs rounded-md hover:bg-indigo-700 text-center">
                                                Cetak PDF
                                            </a>
                                            @if (auth()->user()->role !== 'inspektur')
                                                <a href="{{ route('penemuan.edit', $temuan) }}"
                                                    class="w-full px-3 py-1.5 bg-yellow-500 text-white text-xs rounded-md hover:bg-yellow-600 text-center">
                                                    Edit
                                                </a>
                                                <form action="{{ route('penemuan.destroy', $temuan) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus temuan ini?');" class="w-full">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="w-full px-3 py-1.5 bg-red-600 text-white text-xs rounded-md hover:bg-red-700">
                                                        Hapus
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-4 text-center text-gray-500">
                                        Belum ada temuan untuk LHP ini.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
