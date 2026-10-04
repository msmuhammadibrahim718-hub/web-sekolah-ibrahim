@extends('layouts.app')

@section('title', 'Berita — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Berita</p>
        <h1>Berita &amp; Kegiatan</h1>
        <p>Kabar terbaru seputar kegiatan sekolah.</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block">
    <div class="grid-cards grid-cards-3">
        @forelse ($berita as $item)
            <article class="card-berita">
                <div class="card-berita-media" style="--card-img: url('{{ $item->gambar ? asset('images/berita/'.$item->gambar) : asset('images/gerbang-sekolah.jpeg') }}');"></div>
                <div class="card-berita-body">
                    @if($item->tanggal)
                        <span class="card-berita-date">{{ \Illuminate\Support\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                    @endif
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit(strip_tags($item->isi), 130) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">Belum ada berita.</p>
        @endforelse
    </div>
</section>
@endsection