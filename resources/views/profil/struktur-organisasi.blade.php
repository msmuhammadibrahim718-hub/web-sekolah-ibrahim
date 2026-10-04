@extends('layouts.app')

@section('title', 'Struktur Organisasi — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Profil Sekolah / Struktur Organisasi</p>
        <h1>Struktur Organisasi</h1>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page-single">
    <div class="struktur-chart">
        <div class="struktur-node struktur-node-top">Kepala Sekolah</div>
        <div class="struktur-branch">
            <div class="struktur-node">Wakasek Kurikulum</div>
            <div class="struktur-node">Wakasek Kesiswaan</div>
            <div class="struktur-node">Wakasek Sarana &amp; Prasarana</div>
            <div class="struktur-node">Wakasek Humas &amp; DU/DI</div>
        </div>
        <div class="struktur-branch struktur-branch-wide">
            <div class="struktur-node struktur-node-sm">Kepala Jurusan</div>
            <div class="struktur-node struktur-node-sm">Wali Kelas</div>
            <div class="struktur-node struktur-node-sm">Guru &amp; Staff</div>
            <div class="struktur-node struktur-node-sm">Siswa</div>
        </div>
    </div>
    <p class="empty-state">Bagan di atas adalah struktur umum. Hubungi bagian Tata Usaha untuk data terbaru.</p>
</section>
@endsection
