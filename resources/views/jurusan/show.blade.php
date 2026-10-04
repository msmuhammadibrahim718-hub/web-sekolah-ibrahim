@extends('layouts.app')

@section('title', $jurusan->nama_jurusan . ' — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero" style="--hero-bg-image: url('{{ $jurusan->gambar ? asset('storage/'.$jurusan->gambar) : ($sekolah['gerbang'] ?? asset('images/gerbang-sekolah.jpeg')) }}');">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / <a href="{{ route('jurusan.index') }}">Jurusan</a> / {{ $jurusan->nama_jurusan }}</p>
        <h1>{{ $jurusan->nama_jurusan }}</h1>
        <p>{{ $jurusan->singkatan }}</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block content-page-single">
    <div class="content-text">
        {!! nl2br(e($jurusan->deskripsi)) !!}
    </div>
    <a href="{{ route('jurusan.index') }}" class="back-link">&larr; Kembali ke semua jurusan</a>
</section>
@endsection
