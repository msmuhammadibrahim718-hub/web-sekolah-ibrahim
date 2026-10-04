<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Catatan: file gambar harus sudah diletakkan di public/images/fasilitas/
     * (tidak perlu storage:link, karena diakses langsung via asset('images/fasilitas/...')).
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Laboratorium APHP',
                'deskripsi' => 'Laboratorium Agribisnis Pengolahan Hasil Pertanian (APHP) dilengkapi dengan mesin-mesin pengolahan hasil pertanian, seperti mesin penepung, mesin pengemas, dan peralatan produksi lainnya untuk menunjang praktik siswa dalam mengolah bahan pangan menjadi produk jadi.',
                'gambar' => 'leb-aphp.jpg',
                'kategori' => 'Laboratorium',
                'urutan' => 1,
            ],
            [
                'nama' => 'Workshop BDP',
                'deskripsi' => 'Workshop Bisnis Daring Pemasaran (BDP) menjadi tempat praktik siswa dalam mengelola usaha, mulai dari pengemasan produk hingga transaksi jual beli langsung, sekaligus berfungsi sebagai kantin/koperasi sekolah.',
                'gambar' => 'leb-bdp.jpg',
                'kategori' => 'Ruang Praktik',
                'urutan' => 2,
            ],
            [
                'nama' => 'Workshop RPL',
                'deskripsi' => 'Workshop Rekayasa Perangkat Lunak (RPL) berupa laboratorium komputer yang digunakan siswa untuk praktik pemrograman, pengembangan aplikasi, dan pembelajaran teknologi informasi lainnya.',
                'gambar' => 'leb-rpl.jpg',
                'kategori' => 'Laboratorium',
                'urutan' => 3,
            ],
            [
                'nama' => 'Musola Sekolah',
                'deskripsi' => 'Musola sekolah menjadi sarana ibadah bagi seluruh warga sekolah, digunakan untuk melaksanakan salat berjamaah maupun kegiatan keagamaan lainnya.',
                'gambar' => 'musola.jpg',
                'kategori' => 'Sarana Ibadah',
                'urutan' => 4,
            ],
            [
                'nama' => 'Gedung RPS TKR',
                'deskripsi' => 'Ruang Praktik Siswa Teknik Kendaraan Ringan (RPS TKR) merupakan gedung workshop otomotif tempat siswa jurusan TKR melakukan praktik perawatan dan perbaikan kendaraan ringan.',
                'gambar' => 'rps-tkr.jpg',
                'kategori' => 'Ruang Praktik',
                'urutan' => 5,
            ],
            [
                'nama' => 'Ruang Guru',
                'deskripsi' => 'Ruang guru merupakan tempat kerja dan istirahat bagi tenaga pendidik, sekaligus lokasi koordinasi kegiatan belajar mengajar sehari-hari.',
                'gambar' => 'ruang-guru.jpg',
                'kategori' => 'Ruang Penunjang',
                'urutan' => 6,
            ],
            [
                'nama' => 'Ruang Bimbingan & Konseling',
                'deskripsi' => 'Ruang Bimbingan dan Konseling (BK) menyediakan layanan konseling bagi siswa, membantu menangani masalah akademik, pribadi, maupun perencanaan karier siswa.',
                'gambar' => 'ruang-bk.jpg',
                'kategori' => 'Ruang Penunjang',
                'urutan' => 7,
            ],
        ];

        foreach ($data as $item) {
            Fasilitas::updateOrCreate(
                ['nama' => $item['nama']],
                $item
            );
        }
    }
}