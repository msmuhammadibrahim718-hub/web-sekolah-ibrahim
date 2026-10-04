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
<section class="section-block ekskul-page">
    <div class="ekskul-grid">
        @forelse ($ekstrakurikuler as $index => $item)
            <article class="ekskul-card ekskul-accent-{{ $index % 5 }}">
                <div class="ekskul-card-logo">
                    <img
                        src="{{ $item->logo ? asset($item->logo) : asset('images/logo-smkn1cijati.png') }}"
                        alt="Logo {{ $item->nama_ekskul }}"
                        loading="lazy"
                    >
                </div>
                <div class="ekskul-card-body">
                    <h3>{{ $item->nama_ekskul }}</h3>

                    <div class="ekskul-pembina">
                        <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"></path>
                        </svg>
                        <span>{{ $item->pembina }}</span>
                    </div>

                    <p class="ekskul-desc">{{ Str::limit(strip_tags($item->deskripsi), 120) }}</p>
                </div>
            </article>
        @empty
            <div class="ekskul-empty">
                <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                    <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                    <path d="M3 9h18M8 4v5"></path>
                </svg>
                <p>Belum ada data ekstrakurikuler.</p>
            </div>
        @endforelse
    </div>
</section>

<style>
    .ekskul-page{
        padding: 40px 0 70px;
    }

    .ekskul-grid{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
        gap: 28px;
    }

    .ekskul-card{
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.07);
        border: 1px solid rgba(15, 23, 42, 0.06);
        transition: transform .25s ease, box-shadow .25s ease;
        display: flex;
        flex-direction: column;
    }

    .ekskul-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.14);
    }

    .ekskul-card-logo{
        position: relative;
        height: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
        background:
            radial-gradient(circle at 30% 20%, rgba(255,255,255,.6), transparent 60%),
            var(--ekskul-accent, #f1f5f9);
    }

    .ekskul-card-logo img{
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 18px;
    }

    .ekskul-card-body{
        padding: 20px 22px 24px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1;
    }

    .ekskul-card-body h3{
        margin: 0;
        font-size: 1.15rem;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.3;
    }

    .ekskul-pembina{
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: .85rem;
        font-weight: 600;
        color: #475569;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 4px 10px;
        border-radius: 999px;
        width: fit-content;
    }

    .ekskul-desc{
        margin: 4px 0 0;
        font-size: .9rem;
        line-height: 1.55;
        color: #64748b;
    }

    /* Warna aksen bergantian per kartu */
    .ekskul-accent-0 .ekskul-card-logo{ --ekskul-accent: #fef3e2; }
    .ekskul-accent-1 .ekskul-card-logo{ --ekskul-accent: #e7f0ff; }
    .ekskul-accent-2 .ekskul-card-logo{ --ekskul-accent: #fdeaea; }
    .ekskul-accent-3 .ekskul-card-logo{ --ekskul-accent: #e8f7ee; }
    .ekskul-accent-4 .ekskul-card-logo{ --ekskul-accent: #f2ecfb; }

    .ekskul-empty{
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
        .ekskul-grid{
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection