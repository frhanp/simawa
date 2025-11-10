<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Temuan Baru') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900">
                    Tugas: {{ $lhp->task->assignment_type }}
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    Anda sedang menambahkan temuan baru untuk LHP yang disetujui pada {{ $lhp->updated_at->format('d M Y') }}.
                </p>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900 mb-4">
                    {{ __('Detail Temuan') }}
                </h3>
                
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('lhp.penemuan.store', $lhp) }}" class="space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="judul_penemuan" :value="__('1. Judul Penemuan')" />
                        <x-text-input id="judul_penemuan" name="judul_penemuan" type="text" class="mt-1 block w-full" :value="old('judul_penemuan')" required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-input-label for="kondisi" :value="__('2. Kondisi (Apa yang terjadi)')" />
                            <textarea id="kondisi" name="kondisi" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('kondisi') }}</textarea>
                        </div>
                        <div>
                            <x-input-label for="kriteria" :value="__('3. Kriteria (Aturan/Standar)')" />
                            <textarea id="kriteria" name="kriteria" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('kriteria') }}</textarea>
                        </div>
                    </div>

                    <fieldset class="border rounded-md p-4">
                        <legend class="text-md font-medium text-gray-900 px-2">{{ __('4. Penyebab') }}</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
                            <div class="md:col-span-1">
                                <x-input-label for="penyebab_kategori" :value="__('Kategori Penyebab')" />
                                <select id="penyebab_kategori" name="penyebab_kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Manusia" @selected(old('penyebab_kategori') == 'Manusia')>Manusia</option>
                                    <option value="Uang" @selected(old('penyebab_kategori') == 'Uang')>Uang</option>
                                    <option value="Material" @selected(old('penyebab_kategori') == 'Material')>Material</option>
                                    <option value="Mesin" @selected(old('penyebab_kategori') == 'Mesin')>Mesin</option>
                                    <option value="Metode/Proses" @selected(old('penyebab_kategori') == 'Metode/Proses')>Metode/Proses</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="penyebab_deskripsi" :value="__('Deskripsi Penyebab')" />
                                <textarea id="penyebab_deskripsi" name="penyebab_deskripsi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('penyebab_deskripsi') }}</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="border rounded-md p-4">
                        <legend class="text-md font-medium text-gray-900 px-2">{{ __('5. Akibat') }}</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
                            <div class="md:col-span-1">
                                <x-input-label for="akibat_kategori" :value="__('Kategori Akibat')" />
                                <select id="akibat_kategori" name="akibat_kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Kerugian Keuangan Negara" @selected(old('akibat_kategori') == 'Kerugian Keuangan Negara')>Kerugian Keuangan Negara</option>
                                    <option value="Administratif" @selected(old('akibat_kategori') == 'Administratif')>Administratif</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="akibat_deskripsi" :value="__('Deskripsi Akibat')" />
                                <textarea id="akibat_deskripsi" name="akibat_deskripsi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('akibat_deskripsi') }}</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="border rounded-md p-4">
                        <legend class="text-md font-medium text-gray-900 px-2">{{ __('6. Rekomendasi') }}</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
                            <div class="md:col-span-1">
                                <x-input-label for="rekomendasi_kategori" :value="__('Kategori Rekomendasi')" />
                                <select id="rekomendasi_kategori" name="rekomendasi_kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Pengembalian Keuangan Negara" @selected(old('rekomendasi_kategori') == 'Pengembalian Keuangan Negara')>Pengembalian Keuangan Negara</option>
                                    <option value="Sanksi/Teguran" @selected(old('rekomendasi_kategori') == 'Sanksi/Teguran')>Sanksi/Teguran</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="rekomendasi_deskripsi" :value="__('Deskripsi Rekomendasi')" />
                                <textarea id="rekomendasi_deskripsi" name="rekomendasi_deskripsi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('rekomendasi_deskripsi') }}</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Simpan Temuan') }}</x-primary-button>
                        <a href="{{ route('lhp.penemuan.index', $lhp) }}" class="text-sm text-gray-600 hover:underline">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-app-layout>