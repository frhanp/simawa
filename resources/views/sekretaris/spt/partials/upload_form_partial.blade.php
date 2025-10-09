
<form action="{{ route('sekretaris.spt.store', $task->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="task_id" value="{{ $task->id }}">
    <div class="mb-4">
        <label for="spt_file" class="block text-gray-700">Pilih File Surat Perintah Tugas (PDF, DOC, DOCX)</label>
        <input type="file" name="spt_file" id="spt_file" accept=".pdf,.doc,.docx" required
            class="mt-2 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-purple-600">
        @error('spt_file') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
    </div>
    <div class="flex justify-start">
        <button type="submit"
            class="px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md shadow hover:bg-purple-700 transition">
            Unggah Surat Perintah Tugas
        </button>
    </div>
</form>
