    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Perintah Tugas</title>
        <style>
            body {
                font-family: "Times New Roman", serif;
                font-size: 12pt;
                margin: 5px;
            }

            .container {
                width: 100%;
            }

            .header {
                text-align: center;
            }

            .content {
                margin-top: 20px;
            }

            .content h2 {
                text-align: center;
                text-decoration: underline;
                font-size: 15px;
                margin-bottom: 5px;
            }

            .content table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .content th,
            .content td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            .footer-note {
                text-align: left;
                font-style: italic;
                font-size: 10pt;
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
            }

            .signature {
                width: 100%;
                margin-top: 30px;
            }

            .signature td {
                text-align: center;
            }

            .signature .name {
                font-weight: bold;
                text-decoration: underline;
                white-space: nowrap;
                /* Mencegah teks berpindah baris */
            }


            .signature .nip {
                font-size: 12pt;
            }

            .signature p {
                margin: 0;
                /* Menghapus margin default */
                padding: 0;
                /* Menghapus padding default */
                line-height: 1;
                /* Mengurangi jarak antar baris */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- Header -->
            <table style="width: 100%;">
                <tr>
                    <td style="width: 100px; text-align: center;">
                        <img src="{{ public_path('images/LOGO_KOTA_GORONTALO.png') }}" style="width: 80px;">

                    </td>
                    <td style="text-align: center;">
                        <h2 style="margin: 0;">PEMERINTAH KOTA GORONTALO</h2>
                        <h2 style="margin: 0;">INSPEKTORAT</h2>
                        <p style="margin: 0;">Jl. Achmad Nadjamudin Telepon (0435) 821012 Kota Gorontalo</p>
                    </td>
                </tr>
            </table>
            <hr style="border-top: 5px solid black;">

            <!-- Content -->
            <div class="content">
                <h2 style="margin-top: -10px;">SURAT PERINTAH TUGAS</h2>
                <div style="text-align: center; margin-top: 10px;">
                    <div style="display: inline-block; text-align: left;">
                        <p style="margin: 0;">Nomor&nbsp;&nbsp;&nbsp;: {{ $nomor }}</p>
                        <p style="margin: 0;">Tanggal&nbsp;:
                            {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('d F Y') }}</p>
                    </div>
                </div>



                <p>Inspektur Kota Gorontalo Menugaskan Kepada:</p>

                <!-- Tabel Petugas -->
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center; width: 10%;">No</th>
                            <th style="width: 45%;">Nama</th>
                            <th style="width: 45%;">Jabatan Dalam Tim</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $index => $p)
                            <tr>
                                <td style="text-align: center;">{{ $index + 1 }}</td>
                                <td>{{ $p['nama'] }}</td>
                                <td>{{ $p['jabatan'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p style="text-align: justify; padding-left:70px; text-indent:-70px;">
                    Maksud: {{ $maksud }}
                </p>

                <p>Waktu: {{ $waktu }}</p>



                <!-- Ketentuan -->
                <div style="font-size: 12pt; text-align: justify; margin-top: 10px;">
                    <p><strong>Ketentuan :</strong></p>
                    <ol>
                        <li>Biaya perjalanan dinas sehubungan dengan penugasan tersebut menjadi beban Inspektorat Kota
                            Gorontalo TA. 2025;</li>
                        <li>Pegawai Inspektorat Kota Gorontalo dalam melaksanakan tugas tidak menerima / meminta
                            gratifikasi dan suap.</li>
                    </ol>
                </div>
            </div>

            <!-- Tanda Tangan -->
            <table class="signature">
                <tr>
                    <td style="width: 60%;"></td>
                    <td style="text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">INSPEKTUR</p>
                        <br><br><br> <!-- Untuk jarak tanda tangan -->
                        <p class="name">MOHAMAD TAUFIQ DUNGGIO, SE</p>
                        <p class="nip">PEMBINA UTAMA MUDA</p>
                        <p class="nip">NIP. 19660712 200003 1 006</p>
                    </td>
                </tr>
            </table>

            {{-- <hr style="border-top: 2px solid black; margin-top: 30px;"> --}}

            <!-- Footer Note -->
            <div class="footer-note" style="text-align: center; margin-top: 10px;">
                <p>
                    Layanan Pengaduan/Website: <br>
                    Apabila Pegawai Inspektorat Kota Gorontalo menerima / meminta gratifikasi dan suap,
                    dapat dilaporkan melalui mekanisme penyampaian pengaduan pada
                    <a href="http://inspektorat.gorontalokota.go.id">wbs.inspektorat.gorontalokota.go.id</a>
                </p>
            </div>

        </div>
    </body>

    </html>
