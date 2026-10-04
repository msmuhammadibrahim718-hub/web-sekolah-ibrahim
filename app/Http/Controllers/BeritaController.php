<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class BerandaController extends Controller
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

    // Dipanggil oleh Route::get('/', ...)->name('beranda')
    public function index()
    {
        $pengumuman = Pengumuman::latest()->take(5)->get();
        $prestasi   = Prestasi::latest()->take(5)->get();

        return view('beranda.index', [
            'pengumuman' => $pengumuman,
            'prestasi'   => $prestasi,
            'sekolah'    => $this->getSekolahData(),
        ]);
    }

    // Dipanggil oleh Route::get('/pencarian', ...)->name('beranda.search')
    public function search(Request $request)
    {
        $keyword = trim((string) $request->input('q', ''));

        $pengumuman = collect();
        $prestasi   = collect();

        if ($keyword !== '') {
            $pengumuman = Pengumuman::where('judul', 'like', "%{$keyword}%")
                ->orWhere('isi', 'like', "%{$keyword}%")
                ->latest()
                ->get();

            $prestasi = Prestasi::where('judul', 'like', "%{$keyword}%")
                ->orWhere('keterangan', 'like', "%{$keyword}%")
                ->latest()
                ->get();
        }

        return view('beranda.hasil-pencarian', [
            'keyword'    => $keyword,
            'pengumuman' => $pengumuman,
            'prestasi'   => $prestasi,
            'sekolah'    => $this->getSekolahData(),
        ]);
    }
}