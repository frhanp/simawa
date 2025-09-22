<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Perlu Persetujuan</h3>
        <p class="text-5xl font-semibold text-blue-600 my-4">{{ $data['tasksForApprovalCount'] ?? 0 }}</p>
        <a href="{{ route('inspektur.approve_inspektur') }}" class="text-blue-500 hover:underline">Lihat Detail</a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Persiapan Perlu Persetujuan</h3>
        <p class="text-5xl font-semibold text-yellow-600 my-4">{{ $data['preparationsForApprovalCount'] ?? 0 }}</p>
        <a href="{{ route('inspektur.preparations.index') }}" class="text-yellow-600 hover:underline">Lihat Detail</a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Pelaporan Perlu Tinjauan</h3>
        <p class="text-5xl font-semibold text-purple-600 my-4">{{ $data['reportsForReviewCount'] ?? 0 }}</p>
        <a href="{{ route('pelaporan.index') }}" class="text-purple-500 hover:underline">Lihat Detail</a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">LHP Perlu Persetujuan</h3>
        <p class="text-5xl font-semibold text-green-600 my-4">{{ $data['lhpsForApprovalCount'] ?? 0 }}</p>
        <a href="{{ route('lhp.index') }}" class="text-green-500 hover:underline">Lihat Detail</a>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Total Data Personel</h3>
        <p class="text-5xl font-semibold text-gray-800 my-4">{{ $data['totalPersonnelCount'] ?? 0 }}</p>
        <a href="{{ route('inspektur.orang.index') }}" class="text-gray-600 hover:underline">Lihat Detail</a>
    </div>

</div>