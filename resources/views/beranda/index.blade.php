@extends('layouts.app')

@section('title', ($sekolah['nama'] ?? 'SMKN 1 Cijati') . ' — Beranda')

@section('content')
<section class="section-block section-pengumuman">
    <div class="section-header">
        <h2>Pengumuman</h2>
        <p>Informasi dan agenda terbaru dari sekolah.</p>
    </div>

    <div class="grid-cards">
        @forelse ($pengumuman as $item)
            <article class="card-pengumuman">
                <div class="card-date">
                    <span class="card-date-num">{{ $item->tanggal }}</span>
                    <span class="card-date-month">{{ $item->bulan }}</span>
                </div>
                <div class="card-body">
                    <span class="card-tag card-tag-{{ $item->kategori }}">{{ ucfirst($item->kategori) }}</span>
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit(strip_tags($item->isi), 140) }}</p>
                </div>
            </article>
        @empty
            <p class="empty-state">Belum ada pengumuman.</p>
        @endforelse
    </div>
</section>

<section class="section-block section-prestasi">
    <div class="section-header">
        <h2>Prestasi</h2>
        <p>Capaian siswa dan sekolah yang membanggakan.</p>
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
            <p class="empty-state">Belum ada prestasi.</p>
        @endforelse
    </div>
</section>
@endsection
