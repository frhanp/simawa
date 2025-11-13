<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Rangkuman Tugas</title>
    <style>
        @page {
            margin: 1.5cm;
            size: A4 portrait;
            /* Diubah ke Portrait */
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
            /* Font sedikit lebih besar */
            line-height: 1.3;
            color: #333;
        }

        .kop-surat {
            width: 100%;
            border-bottom: 4px double black;
            padding-bottom: 10px;
            position: relative;
        }

        .kop-surat img {
            width: 70px;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
        }

        .kop-surat .kop-teks {
            text-align: center;
            margin-left: 80px;
        }

        .kop-surat h1 {
            font-size: 14pt;
            font-weight: bold;
            margin: 0;
            line-height: 1.3;
        }

        .kop-surat h2 {
            font-size: 16pt;
            font-weight: bold;
            margin: 0;
            line-height: 1.3;
        }

        .kop-surat p {
            font-size: 10pt;
            margin: 0;
            line-height: 1.3;
        }

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

        .content-table {
            width: 100%;
            border-collapse: collapse;
        }

        .content-table th,
        .content-table td {
            border: 1px solid black;
            padding: 6px;
            /* Padding disesuaikan */
            text-align: left;
            vertical-align: top;
            word-wrap: break-word;
        }

        .content-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }

        .col-no {
            width: 5%;
        }

        .col-jenis {
            width: 20%;
        }

        .col-nama {
            width: 40%;
        }

        .col-status {
            width: 20%;
        }

        .col-tgl {
            width: 15%;
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

    <h3 class="judul-laporan">LAPORAN AKHIR TAHUN</h3>
    {{-- <p class="sub-judul">
        @php
            $filterText = [];
            if (!empty($filters['jenis_penugasan'])) {
                $filterText[] = 'Jenis: ' . $filters['jenis_penugasan'];
            }
            if (!empty($filters['tahun'])) {
                $filterText[] = 'Tahun: ' . $filters['tahun'];
            }
            if (!empty($filters['bulan'])) {
                $filterText[] = 'Bulan: ' . \Carbon\Carbon::create()->month($filters['bulan'])->translatedFormat('F');
            }
            if (!empty($filters['status_lhp'])) {
                $filterText[] = 'Status: ' . ($lhpStatusOptions[$filters['status_lhp']] ?? ucfirst($filters['status_lhp']));
            }
            if (empty($filterText)) {
                $filterText[] = 'Semua Data';
            }
        @endphp
        Filter: {{ implode(' | ', $filterText) }}
    </p> --}}

    <table class="content-table">
        <thead>
            <tr>
                <th class="col-no">No</th>
                <th class="col-jenis">Jenis Penugasan</th>
                <th class="col-nama">Nama Tugas</th>
                <th class="col-status">Status LHP</th>
                <th class="col-tgl">Tanggal ACC</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $index => $task)
                <tr>
                    <td style="text-align: center;">{{ $index + 1 }}</td>
                    <td>{{ $task->jenis_penugasan }}</td>
                    <td>{{ $task->assignment_type }}</td>
                    <td style="text-align: center;">
                        @if ($task->lhp)
                            {{ $lhpStatusOptions[$task->lhp->status] ?? ucfirst($task->lhp->status) }}
                        @else
                            Belum ada LHP
                        @endif
                    </td>
                    <td style="text-align: center;">
                        {{ $task->lhp && $task->lhp->status == 'disetujui' ? $task->lhp->updated_at->format('d M Y') : '-' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">
                        Tidak ada data tugas yang sesuai dengan filter.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
