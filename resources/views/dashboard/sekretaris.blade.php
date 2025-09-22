<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Perlu Pertimbangan</h3>
        <p class="text-5xl font-semibold text-blue-600 my-4">{{ $data['tasksForConsiderationCount'] ?? 0 }}</p>
        <a href="{{ route('pertimbangan') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Lihat Detail
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Total Tugas Dibuat Saya</h3>
        <p class="text-5xl font-semibold text-green-600 my-4">{{ $data['myTasksCount'] ?? 0 }}</p>
        <a href="{{ route('sekretaris.task.view') }}" class="inline-block px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
            Lihat Detail
        </a>
    </div>

    {{-- <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Status Tugas Saya</h3>
        @if(!empty($data['myTasksStatusSummary']) && $data['myTasksStatusSummary']->count() > 0)
            <ul>
                @foreach($data['myTasksStatusSummary'] as $status => $total)
                    <li class="flex justify-between py-2 border-b last:border-b-0">
                        <span class="text-gray-600">{{ ucfirst(str_replace('_', ' ', $status)) }}</span>
                        <span class="font-bold text-gray-800">{{ $total }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">Anda belum membuat tugas.</p>
        @endif
    </div> --}}
</div>

<div class="bg-white p-6 rounded-lg shadow-sm mt-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">5 Tugas Terbaru Perlu Pertimbangan</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Jenis Penugasan</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data['recentTasksForConsideration'] as $task)
                    <tr class="border-b">
                        <td class="py-2 px-4 text-gray-600">{{ $task->assignment_type }}</td>
                        <td class="py-2 px-4 text-gray-500 text-sm">{{ $task->created_at->format('d M Y, H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="py-4 px-4 text-center text-gray-500">Tidak ada tugas yang perlu pertimbangan saat ini.</td>
                    </tr>   
                @endforelse
            </tbody>
        </table>
    </div>
</div>