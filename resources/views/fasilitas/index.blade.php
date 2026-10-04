@extends('layouts.app')

@section('title', 'Fasilitas — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Fasilitas</p>
        <h1>Fasilitas Sekolah</h1>
        <p>Sarana dan prasarana penunjang pembelajaran dan praktik.</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block">
    <div class="grid-cards grid-cards-3">
        @forelse ($fasilitas as $item)
            <article class="card-fasilitas">
                <div class="card-fasilitas-media" style="--card-img: url('{{ ($item->gambar ?? null) ? asset('images/fasilitas/'.$item->gambar) : asset('images/gerbang-sekolah.jpeg') }}');"></div>
                <div class="card-fasilitas-body">
                    <h3>{{ $item->nama ?? $item->judul ?? '-' }}</h3>
                    @if ($item->kategori)
                        <span class="badge-kategori">{{ $item->kategori }}</span>
                    @endif
                    <p>{{ Str::limit(strip_tags($item->deskripsi ?? ''), 120) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">Belum ada data fasilitas.</p>
        @endforelse
    </div>
</section>
@endsection