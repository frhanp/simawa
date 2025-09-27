<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    {{-- <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total Pengguna</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalUsers'] ?? 0 }}</p>
    </div> --}}
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total Tugas</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalTasks'] ?? 0 }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total Laporan Hasil Pelaksanaan</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalLhps'] ?? 0 }}</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Status Tugas</h3>
        <ul>
            @forelse($data['taskStatusSummary'] as $status => $total)
                <li class="flex justify-between py-2 border-b">
                    <span class="text-gray-600">{{ ucfirst($status) }}</span>
                    <span class="font-bold text-gray-800">{{ $total }}</span>
                </li>
            @empty
                <li class="text-gray-500">Belum ada tugas.</li>
            @endforelse
        </ul>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Status Laporan Hasil Pelaksanaan</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                @forelse($data['recentLhps'] as $lhp)
                    <tr class="border-b">
                        <td class="py-2 text-gray-600">{{ $lhp->task->assignment_type ?? 'N/A' }}</td>
                        <td class="py-2 text-right">
                            <span
                                class="text-xs font-semibold px-2 py-1 rounded-full 
                                {{ $lhp->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                {{ $lhp->status === 'disetujui' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $lhp->status === 'ditolak' ? 'bg-red-100 text-red-800' : '' }}">
                                {{ ucfirst($lhp->status) }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-2 text-gray-500">Belum ada LHP.</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
