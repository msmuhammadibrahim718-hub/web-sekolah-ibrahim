@extends('layouts.app')

@section('title', 'Sejarah — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Profil Sekolah / Sejarah</p>
        <h1>Sejarah Sekolah</h1>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page content-page-single">
    <div class="content-text">
        <p>
            {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }} didirikan dengan tujuan menghadirkan pendidikan kejuruan yang
            berkualitas bagi masyarakat di sekitar Cianjur. Sejak awal berdiri, sekolah ini berkomitmen mencetak
            lulusan yang {{ strtolower($sekolah['moto'] ?? 'kompeten, berkarakter, siap kerja') }}.
        </p>
        <p>
            Dari tahun ke tahun, sekolah terus berkembang melalui penambahan program keahlian, peningkatan fasilitas
            praktik, serta kerja sama dengan berbagai dunia usaha dan dunia industri. Perjalanan ini menjadi fondasi
            bagi {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }} untuk terus tumbuh menjadi sekolah kejuruan unggulan di
            wilayahnya.
        </p>
        <p>
            Hingga saat ini, {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }} tetap berpegang pada semangat awal
            pendiriannya: menghasilkan sumber daya manusia yang bermutu dan berdaya saing tinggi.
        </p>
    </div>
</section>
@endsection
