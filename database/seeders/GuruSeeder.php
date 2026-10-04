<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nip'        => 'GR-001',
                'nama_guru'  => 'Ahmad Suhendra',
                'mapel'      => 'Kebersihan & Keindahan Sekolah',
                'foto'       => 'images/guru/ahmad-suhendra.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-002',
                'nama_guru'  => 'Dedi Sukardi, S.Pd.',
                'mapel'      => 'PJOK',
                'foto'       => 'images/guru/dedi-sukardi.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-003',
                'nama_guru'  => 'Habib Suhandar, S.Pd.',
                'mapel'      => 'Pendidikan Pancasila & Sejarah',
                'foto'       => 'images/guru/habib-suhandar.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-004',
                'nama_guru'  => 'Mega Nurunnisa, S.Pd.',
                'mapel'      => 'Bahasa Indonesia & Seni Budaya',
                'foto'       => 'images/guru/mega-nurunnisa.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-005',
                'nama_guru'  => 'Sakti Alamsyah, S.E.',
                'mapel'      => 'Administrasi Sarpras',
                'foto'       => 'images/guru/sakti-alamsyah.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-006',
                'nama_guru'  => 'Ramdan Bastaman',
                'mapel'      => 'Administrasi Sarpras',
                'foto'       => 'images/guru/ramdan-bastaman.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-007',
                'nama_guru'  => 'Wahyudin, S.Tr.Kom.',
                'mapel'      => 'PPLG',
                'foto'       => 'images/guru/wahyudin.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-008',
                'nama_guru'  => 'Eli Maryamah, S.Pd.',
                'mapel'      => 'Pemasaran',
                'foto'       => 'images/guru/eli-maryamah.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-009',
                'nama_guru'  => 'A. Rahmat Dimyati, S.Pd., M.Pd.',
                'mapel'      => 'Kepala Sekolah',
                'foto'       => 'images/guru/rahmat-dimyati.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-010',
                'nama_guru'  => 'Emi Resmiyati, S.Pd.',
                'mapel'      => 'Projek Ilmu Pengetahuan Alam dan Sosial',
                'foto'       => 'images/guru/emi-resmiyati.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-011',
                'nama_guru'  => 'Dini Andriani, S.E.',
                'mapel'      => 'Pemasaran',
                'foto'       => 'images/guru/dini-andriani.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-012',
                'nama_guru'  => 'Ela Haryati, S.Pd.',
                'mapel'      => 'Pendidikan Pancasila & PKK',
                'foto'       => 'images/guru/ela-haryati.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-013',
                'nama_guru'  => 'Ende Iskandar, S.TP.',
                'mapel'      => 'APHP',
                'foto'       => 'images/guru/ende-iskandar.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-014',
                'nama_guru'  => 'Ai Nurhasanah, S.Pd.',
                'mapel'      => 'Matematika & Informatika',
                'foto'       => 'images/guru/ai-nurhasanah.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-015',
                'nama_guru'  => 'Andri Muhoir, S.T.',
                'mapel'      => 'Teknik Otomotif',
                'foto'       => 'images/guru/andri-muhoir.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-016',
                'nama_guru'  => 'Apendi',
                'mapel'      => 'Kebersihan & Keindahan Sekolah',
                'foto'       => 'images/guru/apendi.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-017',
                'nama_guru'  => 'Asep Muhlis Sulaeman, S.Pd.I.',
                'mapel'      => 'PAI. BP',
                'foto'       => 'images/guru/asep-muhlis-sulaeman.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-018',
                'nama_guru'  => 'Asep Purnama',
                'mapel'      => 'Laboran Teknik Otomotif',
                'foto'       => 'images/guru/asep-purnama.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-019',
                'nama_guru'  => 'Ayi Suryati, A.Ma.Pust.',
                'mapel'      => 'Administrasi Perpustakaan',
                'foto'       => 'images/guru/ayi-suryati.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-020',
                'nama_guru'  => 'Budiana Hermawan, S.TP.',
                'mapel'      => 'APHP',
                'foto'       => 'images/guru/budiana-hermawan.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-021',
                'nama_guru'  => 'D. Jamaludin',
                'mapel'      => 'Kebersihan & Keindahan Sekolah',
                'foto'       => 'images/guru/d-jamaludin.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-022',
                'nama_guru'  => 'Didi Mei Somatri, S.Kom.',
                'mapel'      => 'PPLG',
                'foto'       => 'images/guru/didi-mei-somatri.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-023',
                'nama_guru'  => 'Edeh Kurniasih, S.Pd.',
                'mapel'      => 'Bahasa Indonesia',
                'foto'       => 'images/guru/edeh-kurniasih.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-024',
                'nama_guru'  => 'Indra Murgianto, S.Pd.',
                'mapel'      => 'Pemasaran',
                'foto'       => 'images/guru/indra-murgianto.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-025',
                'nama_guru'  => 'Indra Priatna, S.Pd.',
                'mapel'      => 'Pendidikan Pancasila & Informatika',
                'foto'       => 'images/guru/indra-priatna.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-026',
                'nama_guru'  => 'Isnan Wiranursyeha, S.Pd.',
                'mapel'      => 'Bahasa Indonesia',
                'foto'       => 'images/guru/isnan-wiranursyeha.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-027',
                'nama_guru'  => 'Jajang Ridwan, S.T.',
                'mapel'      => 'Teknik Otomotif',
                'foto'       => 'images/guru/jajang-ridwan.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-028',
                'nama_guru'  => 'Jaya Nur Setiawandi, S.Pd.',
                'mapel'      => 'PJOK & Bahasa Sunda',
                'foto'       => 'images/guru/jaya-nur-setiawandi.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-029',
                'nama_guru'  => 'Kamalia, S.E.',
                'mapel'      => 'Pemasaran',
                'foto'       => 'images/guru/kamalia.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-030',
                'nama_guru'  => 'Mia Rusmiati, S.Pd.',
                'mapel'      => 'Matematika & Bahasa Inggris',
                'foto'       => 'images/guru/mia-rusmiati.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-031',
                'nama_guru'  => 'Moch. Najib',
                'mapel'      => 'Laboran PPLG',
                'foto'       => 'images/guru/moch-najib.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-032',
                'nama_guru'  => 'Moch. Yoga Agung N., S.Pd., M.Pd.',
                'mapel'      => 'Bahasa Sunda',
                'foto'       => 'images/guru/moch-yoga-agung.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-033',
                'nama_guru'  => 'Muldiansah',
                'mapel'      => 'Keamanan & Ketertiban Sekolah',
                'foto'       => 'images/guru/muldiansah.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-034',
                'nama_guru'  => 'Nanang Suryana, S.E., M.M.',
                'mapel'      => 'Pemasaran',
                'foto'       => 'images/guru/nanang-suryana.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-035',
                'nama_guru'  => 'Nopi Yanti, S.Pd.',
                'mapel'      => 'Pendidikan Pancasila & Sejarah',
                'foto'       => 'images/guru/nopi-yanti.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-036',
                'nama_guru'  => 'Nurah Alwaini, A.Ma.Pust.',
                'mapel'      => 'Administrasi Perpustakaan',
                'foto'       => 'images/guru/nurah-alwaini.jpg',
                'deskripsi'  => null,
            ],
            [
                'nip'        => 'GR-037',
                'nama_guru'  => 'Rahmat Setiawan, S.T.',
                'mapel'      => 'PPLG',
                'foto'       => 'images/guru/rahmat-setiawan.jpg',
                'deskripsi'  => null,
            ],
        ];

        foreach ($data as $item) {
            Guru::updateOrCreate(
                ['nip' => $item['nip']],
                [
                    'nama_guru' => $item['nama_guru'],
                    'mapel'     => $item['mapel'],
                    'foto'      => $item['foto'],
                    'deskripsi' => $item['deskripsi'],
                ]
            );
        }
    }
}