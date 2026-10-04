@extends('layouts.app')

@section('title', 'Ekstrakurikuler — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Ekstrakurikuler</p>
        <h1>Ekstrakurikuler</h1>
        <p>Kegiatan pengembangan minat dan bakat siswa di luar jam pelajaran.</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block">
    <div class="grid-cards grid-cards-3">
        @forelse ($ekstrakurikuler as $item)
            <article class="card-ekskul">
                <div class="card-ekskul-media" style="--card-img: url('{{ $item->logo ? asset($item->logo) : asset('images/logo-smkn1cijati.png') }}');"></div>
                <div class="card-ekskul-body">
                    <h3>{{ $item->nama_ekskul }}</h3>
                    <p class="card-ekskul-pembina">Pembina: {{ $item->pembina }}</p>
                    <p>{{ Str::limit(strip_tags($item->deskripsi), 120) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">Belum ada data ekstrakurikuler.</p>
        @endforelse
    </div>
</section>
@endsection
