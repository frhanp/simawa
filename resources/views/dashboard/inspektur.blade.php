<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Aktif Saya</h3>
        <p class="text-5xl font-semibold text-green-600 my-4">{{ $data['myActiveTasks'] ?? 0 }}</p>
        {{-- <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">Lihat semua tugas</a> --}}
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan LHP Saya</h3>
        <ul>
            <li class="flex justify-between py-2 border-b">
                <span class="text-gray-600">Pending</span>
                <span class="font-bold text-yellow-600">{{ $data['myLhpStatus']['pending'] ?? 0 }}</span>
            </li>
            <li class="flex justify-between py-2 border-b">
                <span class="text-gray-600">Disetujui</span>
                <span class="font-bold text-green-600">{{ $data['myLhpStatus']['disetujui'] ?? 0 }}</span>
            </li>
            <li class="flex justify-between py-2">
                <span class="text-gray-600">Ditolak</span>
                <span class="font-bold text-red-600">{{ $data['myLhpStatus']['ditolak'] ?? 0 }}</span>
            </li>
        </ul>
        <a href="{{ route('lhp.index') }}" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Lihat LHP Saya
        </a>
    </div>
</div>