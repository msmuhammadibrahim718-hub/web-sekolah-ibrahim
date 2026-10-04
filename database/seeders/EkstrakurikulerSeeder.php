<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan minimal ada 1 data guru untuk dijadikan pembina default (guru_id wajib diisi / FK).
        $defaultGuruId = Guru::query()->value('id') ?? Guru::factory()->create()->id;

        $data = [
            [
                'nama_ekskul' => 'Cinemak (Jurnalistik & Media)',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Ekstrakurikuler jurnalistik dan media SMKN 1 Cijati yang mengelola peliputan, fotografi, dan produksi video kegiatan sekolah.',
                'logo'        => 'images/ekskul/cinemak.jpg',
            ],
            [
                'nama_ekskul' => 'Futsal',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Ekstrakurikuler futsal untuk mengembangkan kemampuan teknik, kerja sama tim, dan sportivitas siswa.',
                'logo'        => 'images/ekskul/futsal.jpg',
            ],
            [
                'nama_ekskul' => 'Karawitan',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Ekstrakurikuler seni karawitan yang melestarikan kesenian musik tradisional Sunda.',
                'logo'        => 'images/ekskul/karawitan.jpg',
            ],
            [
                'nama_ekskul' => 'Marching Band Gitamadhuswara',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Unit marching band sekolah yang tampil pada upacara dan berbagai kejuaraan tingkat daerah.',
                'logo'        => 'images/ekskul/marchingband.jpg',
            ],
            [
                'nama_ekskul' => 'Paskibra',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Pasukan pengibar bendera yang melatih kedisiplinan, kekompakan, dan jiwa kepemimpinan siswa.',
                'logo'        => 'images/ekskul/paskibra.jpg',
            ],
            [
                'nama_ekskul' => 'PMR (Z-Unity)',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Palang Merah Remaja yang membekali siswa dengan keterampilan pertolongan pertama dan kepedulian sosial.',
                'logo'        => 'images/ekskul/pmr.jpg',
            ],
            [
                'nama_ekskul' => 'Pramuka',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Gerakan Pramuka Gugus Depan A.E. Kawilarang & Siti Jenab, membentuk karakter mandiri dan cinta tanah air.',
                'logo'        => 'images/ekskul/pramuka.jpg',
            ],
            [
                'nama_ekskul' => 'Rohis',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Rohani Islam yang membina keimanan, ketakwaan, dan akhlak mulia siswa muslim di sekolah.',
                'logo'        => 'images/ekskul/rohis.jpg',
            ],
            [
                'nama_ekskul' => 'Bola Voli',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Ekstrakurikuler bola voli untuk mengasah teknik dasar, strategi, dan semangat kompetisi siswa.',
                'logo'        => 'images/ekskul/voli.jpg',
            ],
            [
                'nama_ekskul' => 'Bahasa Jepang',
                'pembina'     => 'Menunggu data pembina',
                'deskripsi'   => 'Kelas minat Bahasa Jepang yang memperkenalkan bahasa, aksara, dan budaya Jepang kepada siswa.',
                'logo'        => 'images/ekskul/jepang.jpg',
            ],
        ];

        foreach ($data as $item) {
            Ekstrakurikuler::updateOrCreate(
                ['nama_ekskul' => $item['nama_ekskul']],
                [
                    'pembina'   => $item['pembina'],
                    'deskripsi' => $item['deskripsi'],
                    'logo'      => $item['logo'],
                    'guru_id'   => $defaultGuruId,
                ]
            );
        }
    }
}