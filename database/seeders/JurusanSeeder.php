<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_jurusan' => 'Agriteknologi Pengolahan Hasil Pertanian',
                'singkatan'    => 'APHP',
                'deskripsi'    => 'Program keahlian yang mempelajari teknologi pengolahan hasil pertanian menjadi produk pangan bernilai tambah, mulai dari proses produksi hingga pengemasan.',
                'gambar'       => 'images/jurusan/agroindustri.jpg',
            ],
            [
                'nama_jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
                'singkatan'    => 'PPLG',
                'deskripsi'    => 'Program keahlian yang membekali siswa dengan kemampuan membangun aplikasi, website, dan game mulai dari perancangan hingga pengembangan.',
                'gambar'       => 'images/jurusan/pplg.jpg',
            ],
            [
                'nama_jurusan' => 'Teknik Kendaraan Ringan Otomotif',
                'singkatan'    => 'TKRO',
                'deskripsi'    => 'Program keahlian yang mempelajari perawatan, perbaikan, dan diagnosis kendaraan ringan sesuai standar industri otomotif.',
                'gambar'       => 'images/jurusan/tkro.jpg',
            ],
            [
                'nama_jurusan' => 'Pemasaran',
                'singkatan'    => 'PM',
                'deskripsi'    => 'Program keahlian yang membekali siswa dengan kemampuan pemasaran produk dan jasa, baik secara konvensional maupun digital.',
                'gambar'       => 'images/jurusan/pemasaran.jpg',
            ],
        ];

        foreach ($data as $item) {
            Jurusan::updateOrCreate(
                ['nama_jurusan' => $item['nama_jurusan']],
                [
                    'singkatan' => $item['singkatan'],
                    'deskripsi' => $item['deskripsi'],
                    'gambar'    => $item['gambar'],
                ]
            );
        }
    }
}