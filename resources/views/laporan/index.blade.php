<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Akhir Tahun Rangkuman Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Filter Laporan</h3>
                <form action="{{ route('laporan.index') }}" method="GET">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        <div>
                            <label for="jenis_penugasan" class="block text-sm font-medium text-gray-700">Jenis Penugasan</label>
                            <select id="jenis_penugasan" name="jenis_penugasan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Jenis</option>
                                @foreach($jenisPenugasanOptions as $jenis)
                                    <option value="{{ $jenis }}" @selected(($filters['jenis_penugasan'] ?? null) == $jenis)>{{ $jenis }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun ACC</label>
                            <select id="tahun" name="tahun" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Tahun</option>
                                @foreach($availableYears as $year)
                                    <option value="{{ $year }}" @selected(($filters['tahun'] ?? null) == $year)>{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="bulan" class="block text-sm font-medium text-gray-700">Bulan ACC</label>
                            <select id="bulan" name="bulan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Bulan</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}" @selected(($filters['bulan'] ?? null) == $i)>{{ \Carbon\Carbon::create()->month($i)->translatedFormat('F') }}</option>
                                @endfor
                            </select>
                        </div>

                        <div>
                            <label for="status_lhp" class="block text-sm font-medium text-gray-700">Status LHP</label>
                            <select id="status_lhp" name="status_lhp" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">Semua Status</option>
                                @foreach($lhpStatusOptions as $value => $label)
                                    <option value="{{ $value }}" @selected(($filters['status_lhp'] ?? null) == $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-end space-x-2 col-span-1">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700">
                                Filter
                            </button>
                            <a href="{{ route('laporan.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md shadow hover:bg-gray-700">
                                Reset
                            </a>
                            <button type="submit" name="pdf" value="true" formtarget="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md shadow hover:bg-green-700">
                                PDF
                            </button>
                        </div>
                    </div>
                </form>
            </div>

<div class="bg-white p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">No</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Jenis Penugasan</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Nama Tugas</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Status LHP</th>
                                <th class="px-4 py-3 text-left font-semibold text-gray-600">Tanggal ACC</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($tasks as $index => $task)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $task->jenis_penugasan }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $task->assignment_type }}</td>
                                    <td class="px-4 py-3">
                                        @if ($task->lhp)
                                            @php
                                                $status = $task->lhp->status;
                                                $badge = match ($status) {
                                                    'disetujui' => 'bg-green-100 text-green-800',
                                                    'pending' => 'bg-yellow-100 text-yellow-800',
                                                    'ditolak' => 'bg-red-100 text-red-800',
                                                    default => 'bg-gray-100 text-gray-800',
                                                };
                                                $statusText = $lhpStatusOptions[$status] ?? ucfirst($status);
                                            @endphp
                                            <span class="px-2 py-1 text-xs font-medium rounded-full {{ $badge }}">
                                                {{ $statusText }}
                                            </span>
                                        @else
                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                                Belum ada LHP
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ ($task->lhp && $task->lhp->status == 'disetujui') ? $task->lhp->updated_at->format('d M Y') : '-' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                                        Tidak ada data tugas yang sesuai dengan filter.
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