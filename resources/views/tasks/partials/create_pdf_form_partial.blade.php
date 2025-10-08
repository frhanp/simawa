<form method="POST" action="{{ route('task.sekretaris.create_pdf_with_data', $task->id) }}">
    @csrf
    {{-- Input Nomor Surat Otomatis --}}
    <div class="mb-4" x-data="{
        prefix: '{{ str_pad($task->id, 2, '0', STR_PAD_LEFT) }}',
        suffix: '{{ old('nomor_suffix', '/ST/P.KIN/INSP./' . date('m') . '/' . date('Y')) }}'
    }">
        <label for="nomor_suffix" class="block text-sm font-medium text-gray-700">Nomor</label>
        <div class="flex mt-1">
            <input type="text" id="nomor_prefix" x-model="prefix" disabled
                    class="w-16 text-center bg-gray-100 border-gray-300 rounded-l-md focus:ring-0 focus:border-gray-300">
            <input type="text" id="nomor_suffix" name="nomor_suffix" x-model="suffix" required
                    class="flex-1 block w-full border-gray-300 rounded-r-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <input type="hidden" name="nomor" :value="prefix + suffix">
        @error('nomor') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
    </div>

    <div class="mb-4">
        <label for="maksud" class="block text-sm font-medium text-gray-700">Maksud</label>
        <textarea id="maksud" name="maksud" rows="4" required
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ old('maksud') }}</textarea>
    </div>

    <div class="mb-4">
        <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu Pelaksanaan</label>
        <input type="text" id="waktu" name="waktu" value="{{ old('waktu') }}" required
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
    </div>

    <button type="submit"
        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
        Buat & Unduh SPT
    </button>
</form>
