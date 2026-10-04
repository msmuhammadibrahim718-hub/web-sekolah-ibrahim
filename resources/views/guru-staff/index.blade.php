@extends('layouts.app')

@section('title', 'Guru & Staff — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Guru &amp; Staff</p>
        <h1>Guru &amp; Staff</h1>
        <p>Tenaga pendidik dan kependidikan {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}.</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block guru-page">
    <div class="guru-grid">
        @forelse ($guru as $item)
            <article class="guru-card">
                <div class="guru-card-photo">
                    <img
                        src="{{ $item->foto ? asset($item->foto) : asset('images/logo-smkn1cijati.png') }}"
                        alt="{{ $item->nama_guru }}"
                        loading="lazy"
                    >
                </div>
                <div class="guru-card-body">
                    <h3>{{ $item->nama_guru }}</h3>
                    <p class="guru-mapel">{{ $item->mapel }}</p>
                    @if($item->deskripsi)
                        <p class="guru-desc">{{ Str::limit($item->deskripsi, 80) }}</p>
                    @endif
                </div>
            </article>
        @empty
            <div class="guru-empty">
                <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"></path>
                </svg>
                <p>Belum ada data guru &amp; staff.</p>
            </div>
        @endforelse
    </div>
</section>

<style>
    .guru-page{
        padding: 40px 0 70px;
    }

    .guru-grid{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 26px;
    }

    .guru-card{
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.07);
        border: 1px solid rgba(15, 23, 42, 0.06);
        transition: transform .25s ease, box-shadow .25s ease;
        display: flex;
        flex-direction: column;
    }

    .guru-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.14);
    }

    .guru-card-photo{
        width: 100%;
        aspect-ratio: 3 / 4;
        overflow: hidden;
        background: #f1f5f9;
    }

    .guru-card-photo img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
        display: block;
        transition: transform .35s ease;
    }

    .guru-card:hover .guru-card-photo img{
        transform: scale(1.05);
    }

    .guru-card-body{
        padding: 16px 18px 20px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .guru-card-body h3{
        margin: 0;
        font-size: 1rem;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.3;
    }

    .guru-mapel{
        margin: 0;
        font-size: .82rem;
        font-weight: 600;
        color: #d97706;
    }

    .guru-desc{
        margin: 6px 0 0;
        font-size: .85rem;
        line-height: 1.5;
        color: #64748b;
    }

    .guru-empty{
        grid-column: 1 / -1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        padding: 60px 20px;
        color: #94a3b8;
        text-align: center;
    }

    @media (max-width: 480px){
        .guru-grid{
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
    }
</style>
@endsection