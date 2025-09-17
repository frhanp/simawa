<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Perlu Ditugaskan</h3>
        <p class="text-5xl font-semibold text-blue-600 my-4">{{ $data['pendingAssignmentTasks'] ?? 0 }}</p>
        {{-- <a href="{{ route('sekretaris.tasks.index') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Lihat Tugas
        </a> --}}
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tugas Baru Menunggu</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                @forelse($data['newTasks'] as $task)
                    <tr class="border-b">
                        <td class="py-2 text-gray-600">{{ $task->assignment_type }}</td>
                        <td class="py-2 text-gray-500 text-sm">{{ $task->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-2 text-gray-500">Tidak ada tugas baru.</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>