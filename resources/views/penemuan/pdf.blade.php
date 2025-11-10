<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Resume Temuan {{ $penemuan->id }}</title>
<style>
        /* Mengatur margin halaman standar (2cm) */
        @page {
            margin: 2cm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.4;
            color: #333; /* Warna teks standar */
        }
        
        /* --- KOP SURAT --- */
        .kop-surat {
            width: 100%;
            border-bottom: 4px double black; /* Garis ganda tebal */
            padding-bottom: 10px;
            position: relative; /* Diperlukan untuk logo absolut */
        }
        .kop-surat img {
            width: 80px; /* Ukuran logo */
            height: auto;
            /* Posisi logo di kiri */
            position: absolute;
            top: 0;
            left: 0;
        }
        .kop-surat .kop-teks {
            text-align: center;
            /* Beri ruang agar teks tidak tumpang tindih dengan logo */
            margin-left: 90px; 
        }
        .kop-surat h1, .kop-surat h2, .kop-surat p {
            margin: 0;
            line-height: 1.4;
        }
        .kop-surat h1 {
            font-size: 16pt;
            font-weight: bold;
        }
        .kop-surat h2 {
            font-size: 18pt;
            font-weight: bold;
        }
        .kop-surat p {
            font-size: 11pt;
        }
        
        /* --- JUDUL LAPORAN --- */
        .judul-laporan {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            text-decoration: underline;
            margin-top: 30px; /* Jarak dari kop surat */
            margin-bottom: 25px; /* Jarak ke tabel */
        }

        /* --- TABEL KONTEN --- */
        .content-table {
            width: 100%;
            border-collapse: collapse; /* Menghilangkan spasi antar border */
            margin-bottom: 20px;
            border: 1px solid #555; /* Border luar tabel */
        }
        .content-table th,
        .content-table td {
            border: 1px solid #555; /* Border untuk setiap sel */
            padding: 10px; /* Padding di dalam sel */
            text-align: left;
            vertical-align: top; /* Teks mulai dari atas */
        }
        
        /* Kolom Header (Kiri) */
        .content-table th {
            font-weight: bold;
            background-color: #f7f7f7; /* Latar belakang abu-abu sangat muda */
            width: 25%; /* Lebar kolom header */
        }
        
        /* Kolom Data (Kanan) */
        .content-table td {
            width: 75%;
        }

        /* Styling untuk Kategori dan Deskripsi di dalam sel */
        .sub-header {
            font-weight: bold;
            display: block; /* Agar kategori di baris sendiri */
            margin-bottom: 5px;
        }
        .sub-data {
            /* Teks deskripsi */
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

    <h3 class="judul-laporan">RESUME HASIL PENGAWASAN</h3>

    <table class="content-table">
        <tr>
            <th>Jenis Penugasan</th>
            <td>{{ $penemuan->lhp->task->jenis_penugasan ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Nama Tugas</th>
            <td>{{ $penemuan->lhp->task->assignment_type ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Tanggal LHP Disetujui</th>
            <td>{{ $penemuan->lhp->updated_at ? $penemuan->lhp->updated_at->format('d M Y') : 'N/A' }}</td>
        </tr>
    </table>

    <table class="content-table">
        <tr>
            <th>1. Judul Penemuan</th>
            <td>{{ $penemuan->judul_penemuan }}</td>
        </tr>
        <tr>
            <th>2. Kondisi</th>
            <td>{!! nl2br(e($penemuan->kondisi)) !!}</td>
        </tr>
        <tr>
            <th>3. Kriteria</th>
            <td>{!! nl2br(e($penemuan->kriteria)) !!}</td>
        </tr>
        <tr>
            <th>4. Penyebab</th>
            <td>
<span class="sub-header">{{ $penemuan->penyebab_kategori }}</span>
                <div class="sub-data">{!! nl2br(e($penemuan->penyebab_deskripsi)) !!}</div>
</td>
        </tr>
        <tr>
            <th>5. Akibat</th>
            <td>
<span class="sub-header">{{ $penemuan->akibat_kategori }}</span>
                <div class="sub-data">{!! nl2br(e($penemuan->akibat_deskripsi)) !!}</div>
</td>
        </tr>
        <tr>
            <th>6. Rekomendasi</th>
            <td>
<span class="sub-header">{{ $penemuan->rekomendasi_kategori }}</span>
                <div class="sub-data">{!! nl2br(e($penemuan->rekomendasi_deskripsi)) !!}</div>
</td>
        </tr>
    </table>

</body>
</html>