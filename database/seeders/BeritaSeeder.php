<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Catatan: file gambar harus sudah diletakkan di public/images/berita/
     * (diakses langsung via asset('images/berita/...'), tidak perlu storage:link).
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Back to School 2026',
                'isi' => 'SMKN 1 Cijati menyambut kembali seluruh siswa untuk tahun ajaran baru dalam kegiatan Back to School yang digelar dengan upacara dan sambutan hangat dari seluruh warga sekolah.',
                'gambar' => 'back-to-school.jpg',
                'tanggal' => '2026-07-15',
            ],
            [
                'judul' => 'Pembukaan MPLS Pancawaluya',
                'isi' => 'Masa Pengenalan Lingkungan Sekolah (MPLS) Pancawaluya resmi dibuka dengan mengusung tema "Membangun Generasi Berkarakter, Disiplin, dan Siap Berprestasi bersama Panca Waluya". Kegiatan dihadiri oleh perwakilan Dinas Perindustrian & Perdagangan Provinsi Jawa Barat.',
                'gambar' => 'pembukaan-mpls-2026.jpg',
                'tanggal' => '2026-07-15',
            ],
            [
                'judul' => 'Pesantren Ekologi: Bersih Hati, Bersih Badan, Bersih Lingkungan',
                'isi' => 'SMKN 1 Cijati mengadakan kegiatan Pesantren Ekologi yang memadukan pembinaan spiritual dengan kesadaran menjaga kebersihan lingkungan, diikuti oleh siswa-siswi dalam suasana kekeluargaan.',
                'gambar' => 'pesantren-ekologi-2026.jpg',
                'tanggal' => '2026-08-01',
            ],
            [
                'judul' => 'Ilham Sulaeman Dikukuhkan sebagai Paskibra Kabupaten Cianjur',
                'isi' => 'Selamat dan sukses kepada Ilham Sulaeman, siswa SMKN 1 Cijati, atas pengukuhannya sebagai Pasukan Pengibar Bendera Pusaka Kabupaten Cianjur. Prestasi ini menjadi kebanggaan bagi seluruh keluarga besar sekolah.',
                'gambar' => 'ilham-sulaeman-paskibra.jpg',
                'tanggal' => '2026-08-17',
            ],
            [
                'judul' => 'Class Meeting Recap 2026',
                'isi' => 'Rangkaian Class Meeting 2026 berlangsung meriah dengan berbagai pertandingan olahraga antar kelas, mulai dari voli hingga futsal, sekaligus menjadi ajang mempererat kebersamaan siswa di luar kegiatan akademik.',
                'gambar' => 'class-meeting-2026.jpg',
                'tanggal' => '2026-08-20',
            ],
            [
                'judul' => 'Jatizi Fest Season II 2026 Segera Hadir',
                'isi' => 'SMKN 1 Cijati bersiap menggelar Jatizi Fest Season II dengan tema "Harmoni: Hari Unjuk Kabisa, Olahraga & Kreasi Seni" bertajuk "Bersatu dalam karya, bersaudara dalam laga". Nantikan kemeriahannya!',
                'gambar' => 'jatizi-fest-2026.jpg',
                'tanggal' => '2026-09-01',
            ],
        ];

        foreach ($data as $item) {
            Berita::updateOrCreate(
                ['judul' => $item['judul']],
                $item
            );
        }
    }
}