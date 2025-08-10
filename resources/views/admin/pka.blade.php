<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja Audit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.pka.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="file_pka" class="block text-sm font-medium text-gray-700">Unggah Program Kerja
                                Audit (PDF)</label>
                            <input type="file" id="file_pka" name="file_pka" required class="mt-1 block w-full">
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Unggah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 