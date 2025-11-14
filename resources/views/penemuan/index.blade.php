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
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Kondisi</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Kriteria</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Penyebab</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Akibat</th>
                                <th class="px-4 py-3 text-center font-semibold text-gray-600">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($lhp->penemuans as $temuan)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-gray-900 font-medium">
                                        {{ $temuan->judul_penemuan }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ Str::limit($temuan->kondisi, 40) }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ $temuan->kriteria }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        <span
                                            class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">
                                            {{ $temuan->penyebab_kategori }}
                                        </span>
                                        <span class="ml-1">{{ Str::limit($temuan->penyebab_deskripsi, 35) }}</span>
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        <span
                                            class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">
                                            {{ $temuan->akibat_kategori }}
                                        </span>
                                        <span class="ml-1">{{ Str::limit($temuan->akibat_deskripsi, 35) }}</span>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <div class="flex justify-center space-x-2">
                                            <a href="{{ route('penemuan.pdf', $temuan) }}" target="_blank"
                                                class="px-3 py-1.5 bg-indigo-600 text-white text-xs rounded-md hover:bg-indigo-700">
                                                Cetak PDF
                                            </a>
                                            @if (auth()->user()->role !== 'inspektur')
                                                <a href="{{ route('penemuan.edit', $temuan) }}"
                                                    class="px-3 py-1.5 bg-yellow-500 text-white text-xs rounded-md hover:bg-yellow-600">
                                                    Edit
                                                </a>
                                                @endif
                                                <form action="{{ route('penemuan.destroy', $temuan) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus temuan ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="px-3 py-1.5 bg-red-600 text-white text-xs rounded-md hover:bg-red-700">
                                                        Hapus
                                                    </button>
                                                </form>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
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
