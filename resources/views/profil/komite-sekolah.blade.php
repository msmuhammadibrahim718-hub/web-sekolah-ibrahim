@extends('layouts.app')

@section('title', 'Komite Sekolah — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Profil Sekolah / Komite Sekolah</p>
        <h1>Komite Sekolah</h1>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page content-page-single">
    <div class="content-text">
        <p>
            Komite Sekolah {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }} merupakan lembaga mandiri yang beranggotakan
            orang tua/wali peserta didik, tokoh masyarakat, dan tokoh pendidikan. Komite berperan sebagai mitra
            sekolah dalam meningkatkan mutu pelayanan pendidikan.
        </p>
        <p>Tugas dan fungsi Komite Sekolah meliputi:</p>
        <ul class="misi-list">
            <li>Memberikan pertimbangan dalam penentuan dan pelaksanaan kebijakan pendidikan di sekolah.</li>
            <li>Mendukung penyelenggaraan pendidikan, baik secara finansial, pemikiran, maupun tenaga.</li>
            <li>Mengawasi kebijakan dan program sekolah.</li>
            <li>Menjadi penghubung antara sekolah, orang tua, dan masyarakat.</li>
        </ul>
    </div>
</section>
@endsection
