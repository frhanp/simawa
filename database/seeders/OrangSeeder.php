<?php

namespace Database\Seeders;

use App\Models\Orang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrangSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // Penanggung Jawab
        Orang::create(['nama' => 'Moh. Taufiq Dunggio, SE', 'jabatan' => 'Penanggung Jawab']);
        
        // Ketua Tim
        $ketuaTim = [
            'Abdul Rasyid, S.Pd, M.Pd',
            'Hj. Rahmi Kadir, S.AP',
            'Ir. Hj. Ermita Karnain Laya',
            'Nurmala Bau, S.H, M.Si',
            'Nurhajati Helingo, S.Pt',
            'Fidya Usman, S.Pi, M.Ec. Dev',
            'Lyone Taha, SE, MM',
            'Ronny Polumulo, SE',
            'Handayani Botutihe, SE',
            'Sri Alla Abd. Rahman, SE, M.Si',
            'Yetty Abd. Sani Syahbudin, SE',
            'Roy W. Antuli, SE',
            'Shintawaty Jusuf, S.IP',
            'Nurhayati J. Hakim, S.Pd',
            'Nirmawaty Pakaya, S.Pd',
            'Haryanto Ibrahim, SE',
            'Rinda F. Dunggio, SE',
            'Isnawaty T. Abd Kadir, M.Pd',
            'Erni Hatabu, S.Sos',
            'Febriyana Puluhulawa, S.Si, M.Si',
            'Vivi Meriyanti Komendangi, SH',
            'Srirahayu Eraku, S.Si',
            'Novy W. Utiarahman, ST',
            'Syahriani Zakaria, SE',
            'Yulianty Ibrahim, S.Kom, M.E.QRMA',
            'Indrawati Nunu, SE, M.SA, AAP',
            'Moh. Ronald Pautina, SH',
            'Husen Bau, SE',
            'Rafik, S.Pd',
            'Chandi Afriana Ibrahim, S.Pd',
            'Ridwan Dilapanga, SH',
            'Rinangsih Hamzah, ST, M.Si',
            'Adrianto Arsyad, ST',
        ];
        foreach ($ketuaTim as $nama) {
            Orang::create(['nama' => $nama, 'jabatan' => 'Ketua Tim']);
        }

        // Wakil Penanggung Jawab
        $wakilPenanggungJawab = [
            'Hi. Sahrin H. Lasomba, S.Sos, M.Si, CHCAE',
            'Bambang Soejantoro, S.Sos',
            'Drs. Yacob Hubu',
            'Hj. Irena Utiarahman, ST, M.Ec.Dev',
        ];
        foreach ($wakilPenanggungJawab as $nama) {
            Orang::create(['nama' => $nama, 'jabatan' => 'Wakil Penanggung Jawab']);
        }

        // Anggota Tim
        $anggotaTim = [
            'Shintawaty Jusuf, S.IP',
            'Nurhayati J. Hakim, S.Pd',
            'Nirmawaty Pakaya, S.Pd',
            'Haryanto Ibrahim, SE',
            'Rinda F. Dunggio, SE',
            'Isnawaty T. Abd Kadir, M.Pd',
            'Erni Hatabu, S.Sos',
            'Febriyana Puluhulawa, S.Si, M.Si',
            'Vivi Meriyanti Komendangi, SH',
            'Srirahayu Eraku, S.Si',
            'Novy W. Utiarahman, ST',
            'Syahriani Zakaria, SE',
            'Yulianty Ibrahim, S.Kom, M.E.QRMA',
            'Indrawati Nunu, SE, M.SA, AAP',
            'Moh. Ronald Pautina, SH',
            'Husen Bau, SE',
            'Rafik, S.Pd',
            'Chandi Afriana Ibrahim, S.Pd',
            'Ridwan Dilapanga, SH',
            'Rinangsih Hamzah, ST, M.Si',
            'Adrianto Arsyad, ST',
            'Selfi Dama, S.AP',
            'Ervanita Mustapa, SE',
            'Fitrawaty Yantu, S.Kep',
            'Dwi Kartika Sari, SH',
            'Olies R. Djabu, S.Si',
            'Rahmiyati Mii, SE',
            'Israfil Adam, S.H.I',
            'Nuryati Adam, A.Md',
            'Syahrul Thalib, A.Ma.Ts',
            'Harianto Abdul Hamid, SE',
            'Zubaidah Buloto, SE',
            'Mama Hasan, S.M',
            'Andri Sriyono, S.M',
            'Abd Kadir Nusi, SH',
            'Ramsela Bahsoan',
            'Fathonah Nur Afifa Kasim, S.Tr.I.P',
        ];
        foreach ($anggotaTim as $nama) {
            Orang::create(['nama' => $nama, 'jabatan' => 'Anggota Tim']);
        }

        // Pengendali Teknis
        $pengendaliTeknis = [
            'Hartati Abdullah, SE, M.Si',
            'Meike Abdullah, S.Sos',
            'Abdul Rasyid, S.Pd, M.Pd',
            'Hj. Rahmi Kadir, S.AP',
            'Ir. Hj. Ermita Karnain Laya',
            'Nurmala Bau, S.H, M.Si',
            'Nurmala Helingo, S.Pt',
            'Fidya Usman, S.Pi, M.Ec.Dev',
            'Lyone Taha, SE, MM',
            'Ronny Polumulo, SE',
            'Handayani Botutihe, SE',
            'Sri Alia Abd. Rahman, SE, M.Si',
            'Yetty Abd. Sani Syahbudin, SE',
            'Roy W. Antuli, SE',
        ];
        foreach ($pengendaliTeknis as $nama) {
            Orang::create(['nama' => $nama, 'jabatan' => 'Pengendali Teknis']);
        }

        // Penunjang
        $penunjang = [
            'Sofyan S. Bakari, S.Akun',
            'Djalaludin Paneo, S.SI',
            'Agustina Titik Nuryani, SE',
            'Rifki Nawawi',
            'Ilsye Tamalonggehe, S.AP',
            'Yulfi R. Polontalo, S.Pd',
            'Isna Iriana Dwi Astuty Gobel, S.Kom',
            'Sulastri Djalil',
            'Milawati Sahrain, SH',
            'Nadhillah Amalia Mane, S.AP',
            'Budiman Idji',
            'Maimun Ishak, SH',
        ];
        foreach ($penunjang as $nama) {
            Orang::create(['nama' => $nama, 'jabatan' => 'Penunjang']);
        }
    }
}
