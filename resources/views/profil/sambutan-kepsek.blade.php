@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Profil Sekolah / Sambutan Kepala Sekolah</p>
        <h1>Sambutan Kepala Sekolah</h1>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page">
    <div class="content-portrait">
        <div class="portrait-frame"></div>
    </div>
    <div class="content-text">
        <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
        <p>
            Selamat datang di laman resmi {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}. Sebagai kepala sekolah, saya
            menyambut baik setiap langkah yang membawa peserta didik kami semakin dekat dengan cita-cita mereka.
            Sekolah ini berkomitmen menghasilkan lulusan yang {{ strtolower($sekolah['moto'] ?? 'kompeten, berkarakter, siap kerja') }},
            sejalan dengan visi kami menjadi {{ $sekolah['moto_panjang'] ?? 'SMK unggulan yang menghasilkan SDM bermutu dan berdaya saing tinggi' }}.
        </p>
        <p>
            Kami terus berupaya menghadirkan pembelajaran yang relevan dengan kebutuhan dunia industri, didukung oleh
            tenaga pendidik yang kompeten dan fasilitas praktik yang memadai. Harapan kami, setiap siswa tidak hanya
            unggul secara akademik, tetapi juga tumbuh menjadi pribadi yang berkarakter dan siap menghadapi tantangan
            dunia kerja maupun melanjutkan pendidikan yang lebih tinggi.
        </p>
        <p>Terima kasih atas kunjungan Anda. Mari bersama membangun generasi yang kompeten dan berdaya saing.</p>
        <p class="signature">Kepala Sekolah<br>{{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}</p>
    </div>
</section>
@endsection
