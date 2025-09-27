<!-- resources/views/pelaksanaan/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Daftar Pelaksanaan') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Daftar Pelaksanaan -->
            
            @if (auth()->user() && auth()->user()->role === 'admin')
            <div class="mb-4 flex justify-end">
                <a href="{{ route('pelaksanaan.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                    Tambah Pelaksanaan
                </a>
            </div>
            @endif
            <table class="min-w-full bg-white border border-gray-200 rounded-md shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama Tugas</th>
                        <th class="py-2 px-4 border-b">Foto Entry</th>
                        <th class="py-2 px-4 border-b">Berita Acara Entry</th>
                        <th class="py-2 px-4 border-b">Foto Exit</th>
                        <th class="py-2 px-4 border-b">Berita Acara Exit</th>
                        <!-- <th class="py-2 px-4 border-b">Kirim ke Inspektur</th> --> <!-- Hapus baris ini -->
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($pelaksanaan as $item)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                @if ($item->task)
                                    {{ $item->task->assignment_type }}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b">
                                @if ($item->entry_meeting_photo)
                                    <img src="{{ asset('storage/' . $item->entry_meeting_photo) }}" alt="Entry Photo"
                                        class="w-24 h-24 object-cover">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b">
                                @if ($item->berita_acara_entry)
                                    <a href="{{ asset('storage/' . $item->berita_acara_entry) }}" target="_blank"
                                        class="text-blue-500">Download</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b">
                                @if ($item->exit_meeting_photo)
                                    <img src="{{ asset('storage/' . $item->exit_meeting_photo) }}" alt="Exit Photo"
                                        class="w-24 h-24 object-cover">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b">
                                @if ($item->berita_acara_exit)
                                    <a href="{{ asset('storage/' . $item->berita_acara_exit) }}" target="_blank"
                                        class="text-blue-500">Download</a>
                                @else
                                    -
                                @endif
                            </td>

                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pelaksanaan.show', $item->id) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Lihat</a>
                                <a href="{{ route('pelaksanaan.edit', $item->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('pelaksanaan.destroy', $item->id) }}" method="POST"
                                    class="inline-block"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($pelaksanaan->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center py-4">Tidak ada data pelaksanaan.</td>
                        </tr>
                    @endif
                </tbody>

            </table>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
