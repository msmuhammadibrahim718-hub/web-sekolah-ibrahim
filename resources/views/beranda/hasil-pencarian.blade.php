@extends('layouts.app')

@section('title', 'Hasil Pencarian: ' . $keyword . ' — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Pencarian</p>
        <h1>Hasil Pencarian</h1>
        <p>Kata kunci: &ldquo;{{ $keyword ?: '-' }}&rdquo;</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block">
    <div class="section-header">
        <h2>Pengumuman</h2>
    </div>
    <div class="grid-cards">
        @forelse ($pengumuman as $item)
            <article class="card-pengumuman">
                <div class="card-date">
                    <span class="card-date-num">{{ $item->tanggal }}</span>
                    <span class="card-date-month">{{ $item->bulan }}</span>
                </div>
                <div class="card-body">
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit(strip_tags($item->isi), 140) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">
                @if($keyword)
                    Tidak ada pengumuman yang cocok dengan &ldquo;{{ $keyword }}&rdquo;.
                @else
                    Masukkan kata kunci untuk mencari pengumuman.
                @endif
            </p>
        @endforelse
    </div>
</section>

<section class="section-block">
    <div class="section-header">
        <h2>Prestasi</h2>
    </div>
    <div class="grid-cards">
        @forelse ($prestasi as $item)
            <article class="card-prestasi">
                <svg class="card-prestasi-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 01-10 0V4z"/><path d="M7 6H4a2 2 0 002 4M17 6h3a2 2 0 01-2 4"/></svg>
                <div>
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit(strip_tags($item->keterangan), 140) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">
                @if($keyword)
                    Tidak ada prestasi yang cocok dengan &ldquo;{{ $keyword }}&rdquo;.
                @else
                    Masukkan kata kunci untuk mencari prestasi.
                @endif
            </p>
        @endforelse
    </div>
</section>
@endsection
