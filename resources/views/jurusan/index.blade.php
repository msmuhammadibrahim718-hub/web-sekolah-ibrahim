@extends('layouts.app')

@section('title', 'Jurusan — ' . ($sekolah['nama'] ?? 'SMKN 1 Cijati'))

@section('hero')
<section class="page-hero">
    <div class="page-hero-content">
        <p class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a> / Jurusan</p>
        <h1>Program Keahlian</h1>
        <p>Pilihan jurusan yang kami sediakan untuk membekali siswa siap kerja.</p>
    </div>
</section>
@endsection

@section('content')
<section class="section-block jurusan-page">
    <div class="jurusan-grid">
        @forelse ($jurusan as $index => $j)
            @php
                $logoUrl = $j->gambar ? asset($j->gambar) : asset('images/gerbang-sekolah.jpeg');
            @endphp
            <div
                class="jurusan-card jurusan-accent-{{ $index % 4 }}"
                onclick="bukaPreviewJurusan('{{ addslashes($logoUrl) }}', '{{ addslashes($j->nama_jurusan) }}')"
            >
                <div class="jurusan-card-logo">
                    <img
                        src="{{ $logoUrl }}"
                        alt="Logo {{ $j->nama_jurusan }}"
                        loading="lazy"
                    >
                    <span class="jurusan-badge">{{ $j->singkatan }}</span>
                </div>
                <div class="jurusan-card-body">
                    <h3>{{ $j->nama_jurusan }}</h3>
                    <p>{{ Str::limit(strip_tags($j->deskripsi), 110) }}</p>
                </div>
            </div>
        @empty
            <div class="jurusan-empty">
                <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 3l9 5-9 5-9-5 9-5z"></path>
                    <path d="M3 12l9 5 9-5M3 17l9 5 9-5"></path>
                </svg>
            </div>
        @endforelse
    </div>
</section>

<div class="jurusan-lightbox" id="jurusanLightbox" onclick="tutupPreviewJurusan()">
    <button type="button" class="jurusan-lightbox-close" onclick="tutupPreviewJurusan()">&times;</button>
    <div class="jurusan-lightbox-inner" onclick="event.stopPropagation()">
        <img id="jurusanLightboxImg" src="" alt="">
        <p id="jurusanLightboxTitle"></p>
    </div>
</div>

<style>
    .jurusan-page{
        padding: 40px 0 70px;
    }

    .jurusan-grid{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
        gap: 28px;
    }

    .jurusan-card{
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.07);
        border: 1px solid rgba(15, 23, 42, 0.06);
        transition: transform .25s ease, box-shadow .25s ease;
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }

    .jurusan-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.14);
    }

    .jurusan-card-logo{
        position: relative;
        height: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background:
            radial-gradient(circle at 30% 20%, rgba(255,255,255,.6), transparent 60%),
            var(--jurusan-accent, #f1f5f9);
    }

    .jurusan-card-logo img{
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 16px;
    }

    .jurusan-badge{
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(15, 23, 42, 0.85);
        color: #fff;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .03em;
        padding: 4px 10px;
        border-radius: 999px;
    }

    .jurusan-card-body{
        padding: 20px 22px 24px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1;
    }

    .jurusan-card-body h3{
        margin: 0;
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.35;
    }

    .jurusan-card-body p{
        margin: 0;
        font-size: .9rem;
        line-height: 1.55;
        color: #64748b;
        flex: 1;
    }

    /* Warna aksen bergantian per kartu */
    .jurusan-accent-0 .jurusan-card-logo{ --jurusan-accent: #fef3e2; }
    .jurusan-accent-1 .jurusan-card-logo{ --jurusan-accent: #e7f0ff; }
    .jurusan-accent-2 .jurusan-card-logo{ --jurusan-accent: #e8f7ee; }
    .jurusan-accent-3 .jurusan-card-logo{ --jurusan-accent: #fdeaea; }

    .jurusan-empty{
        grid-column: 1 / -1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        padding: 60px 20px;
        color: #94a3b8;
        text-align: center;
    }

    /* Lightbox / preview logo */
    .jurusan-lightbox{
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.82);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
        opacity: 0;
        visibility: hidden;
        transition: opacity .25s ease;
        z-index: 1000;
    }

    .jurusan-lightbox.active{
        opacity: 1;
        visibility: visible;
    }

    .jurusan-lightbox-inner{
        background: #fff;
        border-radius: 20px;
        padding: 24px;
        max-width: 480px;
        width: 100%;
        text-align: center;
        transform: scale(.9);
        transition: transform .25s ease;
    }

    .jurusan-lightbox.active .jurusan-lightbox-inner{
        transform: scale(1);
    }

    .jurusan-lightbox-inner img{
        max-width: 100%;
        max-height: 60vh;
        object-fit: contain;
        border-radius: 12px;
    }

    .jurusan-lightbox-inner p{
        margin: 16px 0 0;
        font-weight: 700;
        color: #1e293b;
        font-size: 1.05rem;
    }

    .jurusan-lightbox-close{
        position: absolute;
        top: 22px;
        right: 28px;
        width: 42px;
        height: 42px;
        border: none;
        border-radius: 50%;
        background: rgba(255,255,255,.15);
        color: #fff;
        font-size: 1.6rem;
        line-height: 1;
        cursor: pointer;
        transition: background .2s ease;
    }

    .jurusan-lightbox-close:hover{
        background: rgba(255,255,255,.3);
    }

    @media (max-width: 480px){
        .jurusan-grid{
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    function bukaPreviewJurusan(src, judul) {
        const lightbox = document.getElementById('jurusanLightbox');
        document.getElementById('jurusanLightboxImg').src = src;
        document.getElementById('jurusanLightboxTitle').textContent = judul;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function tutupPreviewJurusan() {
        const lightbox = document.getElementById('jurusanLightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') tutupPreviewJurusan();
    });
</script>
@endsection