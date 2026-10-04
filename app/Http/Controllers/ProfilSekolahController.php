<?php

namespace App\Http\Controllers;

class ProfilSekolahController extends Controller
{
    private function getSekolahData(): array
    {
        return [
            'nama'         => 'SMKN 1 Cijati',
            'moto'         => 'Kompeten, Berkarakter, Siap Kerja',
            'moto_panjang' => 'SMK Unggulan yang Menghasilkan SDM Bermutu dan Berdaya Saing Tinggi',
            'logo'         => asset('images/logo-smkn1cijati.png'),
            'gerbang'      => asset('images/gerbang-sekolah.jpeg'),
            'alamat'       => 'Jl. Raya Cijati No. 1, Kabupaten Cianjur, Jawa Barat',
            'telepon'      => '022-1234567',
            'website'      => 'www.smkn1cijati.sch.id',
            'deskripsi'    => 'SMK Negeri 1 Cijati adalah sekolah kejuruan yang berkomitmen mencetak lulusan siap kerja dan berkarakter.',
        ];
    }

    public function sambutanKepsek()
    {
        return view('profil.sambutan-kepsek', ['sekolah' => $this->getSekolahData()]);
    }

    public function visiMisi()
    {
        return view('profil.visi-misi', ['sekolah' => $this->getSekolahData()]);
    }

    public function sejarah()
    {
        return view('profil.sejarah', ['sekolah' => $this->getSekolahData()]);
    }

    public function strukturOrganisasi()
    {
        return view('profil.struktur-organisasi', ['sekolah' => $this->getSekolahData()]);
    }

    public function komiteSekolah()
    {
        return view('profil.komite-sekolah', ['sekolah' => $this->getSekolahData()]);
    }
}