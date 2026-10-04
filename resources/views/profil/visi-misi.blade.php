@extends('layouts.app')

@section('title', 'Visi & Misi — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Profil Sekolah / Visi &amp; Misi</p>
        <h1>Visi &amp; Misi</h1>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page content-page-single">
    <div class="visi-box">
        <h2>Visi</h2>
        <p>{{ $sekolah['moto_panjang'] ?? 'SMK Unggulan yang Menghasilkan SDM Bermutu dan Berdaya Saing Tinggi' }}</p>
    </div>

    <div class="misi-box">
        <h2>Misi</h2>
        <ol class="misi-list">
            <li>Menyelenggarakan pembelajaran berbasis kompetensi yang relevan dengan kebutuhan dunia usaha dan industri.</li>
            <li>Membentuk karakter peserta didik yang disiplin, jujur, dan bertanggung jawab.</li>
            <li>Mengembangkan sarana dan prasarana praktik yang mendukung keterampilan siap kerja.</li>
            <li>Menjalin kerja sama dengan dunia industri untuk praktik kerja lapangan dan penyerapan lulusan.</li>
            <li>Menumbuhkan semangat inovasi dan daya saing peserta didik di tingkat regional maupun nasional.</li>
        </ol>
    </div>
</section>
@endsection
