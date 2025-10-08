<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Surat Perintah Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-semibold mb-6">Edit SPT untuk Tugas: {{ $spt->task->jenis_penugasan }} - {{ $spt->task->assignment_type }}</h3>
                
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('sekretaris.spt.update', $spt) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="spt_file" class="block text-gray-700">Pilih File SPT Baru (PDF, DOC, DOCX)</label>
                        <input type="file" name="spt_file" id="spt_file" required class="mt-2 block w-full border border-gray-300 rounded-md p-2">
                    </div>
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('sekretaris.spt.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Batal</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update SPT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
