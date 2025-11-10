<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Rangkuman Temuan</title>
<style>
        /* Mengatur margin halaman (landscape) */
        @page {
            margin: 1.5cm;
            size: A4 landscape;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 10pt; /* Ukuran font lebih kecil untuk landscape */
            line-height: 1.3;
            color: #333;
        }
        
        /* --- KOP SURAT --- */
        .kop-surat {
            width: 100%;
            border-bottom: 4px double black;
            padding-bottom: 10px;
            position: relative;
        }
        .kop-surat img {
            width: 70px; /* Logo sedikit lebih kecil */
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
        }
        .kop-surat .kop-teks {
            text-align: center;
            margin-left: 80px; 
        }
        .kop-surat h1, .kop-surat h2, .kop-surat p {
            margin: 0;
            line-height: 1.3;
        }
        .kop-surat h1 { font-size: 14pt; font-weight: bold; }
        .kop-surat h2 { font-size: 16pt; font-weight: bold; }
        .kop-surat p { font-size: 10pt; }
        
        /* --- JUDUL LAPORAN --- */
        .judul-laporan {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            text-decoration: underline;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        .sub-judul {
            text-align: center;
            font-size: 11pt;
            margin-bottom: 15px;
        }

        /* --- TABEL KONTEN --- */
        .content-table {
            width: 100%;
            border-collapse: collapse;
        }
        .content-table th,
        .content-table td {
            border: 1px solid black;
            padding: 5px; /* Padding lebih kecil */
            text-align: left;
            vertical-align: top;
            word-wrap: break-word; /* Memecah teks jika terlalu panjang */
        }
        .content-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }
        
        /* Mengatur lebar kolom */
        .col-no { width: 3%; }
        .col-tugas { width: 15%; }
        .col-judul { width: 15%; }
        .col-kondisi { width: 15%; }
        .col-kriteria { width: 15%; }
        .col-penyebab { width: 15%; }
        .col-akibat { width: 12%; }
        .col-rekomendasi { width: 15%; }

        .sub-header {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="kop-surat">
        <img src="{{ public_path('images/LOGO_KOTA_GORONTALO.png') }}" alt="Logo">
        <div class="kop-teks">
            <h1>PEMERINTAH KOTA GORONTALO</h1>
            <h2>INSPEKTORAT</h2>
            <p>Jl. Achmad Nadjamudin Telepon (0435) 821012 Kota Gorontalo</p>
        </div>
    </div>

    <h3 class="judul-laporan">LAPORAN RANGKUMAN TEMUAN HASIL PENGAWASAN</h3>
    <p class="sub-judul">
        Periode: 
        {{ $filters['bulan'] ? \Carbon\Carbon::create()->month($filters['bulan'])->translatedFormat('F') : 'Semua Bulan' }}
        {{ $filters['tahun'] ?? 'Semua Tahun' }}
        | Jenis: {{ $filters['jenis_penugasan'] ?? 'Semua Jenis' }}
    </p>

    <table class="content-table">
        <thead>
            <tr>
                <th class="col-no">No</th>
                <th class="col-tugas">Tugas / LHP</th>
                <th class="col-judul">Judul Temuan</th>
                <th class="col-kondisi">Kondisi</th>
                <th class="col-kriteria">Kriteria</th>
                <th class="col-penyebab">Penyebab</th>
                <th class="col-akibat">Akibat</th>
                <th class="col-rekomendasi">Rekomendasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penemuans as $index => $temuan)
                <tr>
                    <td style="text-align: center;">{{ $index + 1 }}</td>
                    <td>
                        <span class="sub-header">{{ $temuan->lhp->task->assignment_type }}</span>
                        ({{ $temuan->lhp->task->jenis_penugasan }})
                    </td>
                    <td>{{ $temuan->judul_penemuan }}</td>
                    <td>{!! nl2br(e($temuan->kondisi)) !!}</td>
                    <td>{!! nl2br(e($temuan->kriteria)) !!}</td>
                    <td>
                        <span class="sub-header">{{ $temuan->penyebab_kategori }}:</span>
                        {!! nl2br(e($temuan->penyebab_deskripsi)) !!}
                    </td>
                    <td>
                        <span class="sub-header">{{ $temuan->akibat_kategori }}:</span>
                        {!! nl2br(e($temuan->akibat_deskripsi)) !!}
                    </td>
                    <td>
                        <span class="sub-header">{{ $temuan->rekomendasi_kategori }}:</span>
                        {!! nl2br(e($temuan->rekomendasi_deskripsi)) !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align: center; padding: 20px;">
                        Tidak ada data temuan yang sesuai dengan filter.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>