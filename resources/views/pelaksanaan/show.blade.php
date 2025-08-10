<!-- resources/views/pelaksanaan/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Detail Pelaksanaan') }}
            </h2>
            <a href="{{ route('pelaksanaan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Detail Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <strong>ID Pelaksanaan:</strong> {{ $pelaksanaan->id }}
                </div>
                <div class="mb-4">
                    <strong>SPT:</strong>
                    @if($pelaksanaan->spt)
                        {{ $pelaksanaan->spt->id }} - {{ $pelaksanaan->spt->nama }}
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                <div class="mb-4">
                    <strong>Foto Entry Meeting:</strong><br>
                    @if($pelaksanaan->entry_meeting_photo)
                        <img src="{{ asset('storage/' . $pelaksanaan->entry_meeting_photo) }}" alt="Entry Meeting Photo" class="w-48 h-48 object-cover">
                    @else
                        -
                    @endif
                </div>
                <div class="mb-4">
                    <strong>Berita Acara Entry Meeting:</strong><br>
                    @if($pelaksanaan->berita_acara_entry)
                        <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_entry) }}" target="_blank" class="text-blue-500">Download Berita Acara Entry Meeting</a>
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                <div class="mb-4">
                    <strong>Foto Exit Meeting:</strong><br>
                    @if($pelaksanaan->exit_meeting_photo)
                        <img src="{{ asset('storage/' . $pelaksanaan->exit_meeting_photo) }}" alt="Exit Meeting Photo" class="w-48 h-48 object-cover">
                    @else
                        -
                    @endif
                </div>
                <div class="mb-4">
                    <strong>Berita Acara Exit Meeting:</strong><br>
                    @if($pelaksanaan->berita_acara_exit)
                        <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_exit) }}" target="_blank" class="text-blue-500">Download Berita Acara Exit Meeting</a>
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                {{-- <div class="mb-4">
                    <strong>Sent to Inspektur:</strong> {{ $pelaksanaan->sent_to_inspektur ? 'Ya' : 'Tidak' }}
                </div> --}}
                <div class="mb-4">
                    <strong>Dibuat Pada:</strong> {{ $pelaksanaan->created_at->format('d-m-Y H:i') }}
                </div>
                <div class="mb-4">
                    <strong>Diperbarui Pada:</strong> {{ $pelaksanaan->updated_at->format('d-m-Y H:i') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
