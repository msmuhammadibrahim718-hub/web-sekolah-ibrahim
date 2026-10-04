<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', ($sekolah['nama'] ?? 'SMKN 1 Cijati') . ' — ' . ($sekolah['moto'] ?? ''))</title>
<meta name="description" content="@yield('meta_description', $sekolah['deskripsi'] ?? '')">
<link rel="icon" href="{{ $sekolah['logo'] ?? asset('images/logo-smkn1cijati.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@stack('styles')
</head>
<body>
<div class="app">

  <main>
    <div class="utility-bar">
      <div class="utility-left">
        <a href="{{ route('beranda') }}#kontak" class="utility-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v16H4z"/><path d="M4 6l8 6 8-6"/></svg>
          Kontak
        </a>
        <button type="button" class="utility-item utility-icon" id="searchToggle" aria-label="Cari">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        </button>
        <button type="button" class="utility-item utility-icon" id="notifToggle" aria-label="Notifikasi">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 01-3.4 0"/></svg>
        </button>
        <div class="notif-panel" id="notifPanel" hidden>
          <p>Tidak ada notifikasi baru.</p>
        </div>
        <span class="utility-datetime" id="liveClock" data-format-date="{{ now()->translatedFormat('D, M jS, Y') }}">{{ now()->translatedFormat('D, M jS, Y') }} &nbsp; {{ now()->format('H.i.s') }}</span>
      </div>

      <form action="{{ route('beranda.search') }}" method="GET" class="utility-search" id="searchBox">
        <input type="text" name="q" placeholder="Cari di situs ini..." autocomplete="off" value="{{ request('q') }}">
        <button type="submit" aria-label="Cari sekarang">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        </button>
      </form>

      <div class="utility-social">
        <a href="{{ $sekolah['linkedin'] ?? '#' }}" target="_blank" rel="noopener" class="social-icon social-in">in</a>
        <a href="{{ $sekolah['facebook'] ?? '#' }}" target="_blank" rel="noopener" class="social-icon social-fb">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 22v-8.4h2.8l.4-3.3h-3.2V8.1c0-.95.26-1.6 1.63-1.6H17V3.5c-.3-.04-1.3-.13-2.5-.13-2.46 0-4.15 1.5-4.15 4.26v2.38H7.5v3.3h2.85V22h3.15z"/></svg>
        </a>
        <a href="{{ $sekolah['instagram'] ?? '#' }}" target="_blank" rel="noopener" class="social-icon social-ig">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
        </a>
        <a href="{{ $sekolah['youtube'] ?? '#' }}" target="_blank" rel="noopener" class="social-icon social-yt">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12s0-3.2-.4-4.7c-.24-.86-.93-1.5-1.8-1.75C18.3 5 12 5 12 5s-6.3 0-7.8.55c-.87.25-1.56.9-1.8 1.75C2 8.8 2 12 2 12s0 3.2.4 4.7c.24.86.93 1.5 1.8 1.75C5.7 19 12 19 12 19s6.3 0 7.8-.55c.87-.25 1.56-.9 1.8-1.75.4-1.5.4-4.7.4-4.7z"/><path d="M10 9.5l5 2.5-5 2.5v-5z" fill="#fff"/></svg>
        </a>
      </div>
    </div>

    <nav class="top-nav">
      <div class="nav-brand">
        <img src="{{ $sekolah['logo'] ?? asset('images/logo-smkn1cijati.png') }}" alt="Logo {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}">
        <div class="nav-brand-text">
          <span class="nav-brand-name">{{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}</span>
          <span class="nav-brand-tagline">&ldquo; {{ $sekolah['moto'] ?? 'Kompeten, Berkarakter, Siap Kerja' }} &rdquo;</span>
        </div>
      </div>

      <button type="button" class="nav-toggle" id="navToggle" aria-label="Buka menu" aria-expanded="false" aria-controls="topMenu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>

      <ul class="top-menu" id="topMenu">
        <li class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
          <a href="{{ route('beranda') }}">BERANDA</a>
        </li>

        <li class="has-dropdown {{ request()->routeIs('profil.*') ? 'active' : '' }}">
          <button type="button" class="dropdown-toggle" aria-expanded="false">
            PROFIL SEKOLAH
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <ul class="dropdown-menu">
            <li><a href="{{ route('profil.sambutan-kepsek') }}">Sambutan Kepala Sekolah</a></li>
            <li><a href="{{ route('profil.visi-misi') }}">Visi &amp; Misi</a></li>
            <li><a href="{{ route('profil.sejarah') }}">Sejarah</a></li>
            <li><a href="{{ route('profil.struktur-organisasi') }}">Struktur Organisasi</a></li>
            <li><a href="{{ route('profil.komite-sekolah') }}">Komite Sekolah</a></li>
          </ul>
        </li>

        <li class="has-dropdown {{ request()->routeIs('jurusan.*') ? 'active' : '' }}">
          <button type="button" class="dropdown-toggle" aria-expanded="false">
            JURUSAN
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <ul class="dropdown-menu">
            @forelse($jurusanMenu ?? [] as $j)
            <li><a href="{{ route('jurusan.show', \Illuminate\Support\Str::slug($j->nama_jurusan)) }}">{{ $j->nama_jurusan }}</a></li>
            @empty
            <li><span class="dropdown-empty">Belum ada data jurusan</span></li>
            @endforelse
            <li class="dropdown-footer"><a href="{{ route('jurusan.index') }}">Lihat semua jurusan &rarr;</a></li>
          </ul>
        </li>

        <li class="{{ request()->routeIs('berita.*') ? 'active' : '' }}">
          <a href="{{ route('berita.index') }}">BERITA</a>
        </li>
        <li class="{{ request()->routeIs('fasilitas.*') ? 'active' : '' }}">
          <a href="{{ route('fasilitas.index') }}">FASILITAS</a>
        </li>
        <li class="{{ request()->routeIs('guru-staff.*') ? 'active' : '' }}">
          <a href="{{ route('guru-staff.index') }}">GURU &amp; STAFF</a>
        </li>
        <li class="{{ request()->routeIs('ekstrakurikuler.*') ? 'active' : '' }}">
          <a href="{{ route('ekstrakurikuler.index') }}">EKSTRAKURIKULER</a>
        </li>
      </ul>
    </nav>

    @hasSection('hero')
      @yield('hero')
    @else
    <section class="hero-banner" style="--hero-bg-image: url('{{ $sekolah['gerbang'] ?? asset('images/gerbang-sekolah.jpeg') }}');">
      <div class="hero-content">
        <img class="hero-badge" src="{{ $sekolah['logo'] ?? asset('images/logo-smkn1cijati.png') }}" alt="Logo {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}">
        <h1>{{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}</h1>
        <p>{{ $sekolah['moto_panjang'] ?? 'SMK Unggulan yang Menghasilkan SDM Bermutu dan Berdaya Saing Tinggi' }}</p>
      </div>
    </section>
    @endif

    @yield('content')

  </main>
</div>

<footer class="site-footer" id="kontak">
  <div class="footer-grid">
    <div class="footer-col">
      <h3>Link Terkait</h3>
      <ul class="footer-links">
        @forelse($linkTerkait ?? [] as $l)
        <li><a href="{{ $l['url'] }}">{{ $l['label'] }}</a></li>
        @empty
        <li><a href="{{ route('beranda') }}">Beranda</a></li>
        <li><a href="{{ route('profil.sambutan-kepsek') }}">Profil Sekolah</a></li>
        <li><a href="{{ route('jurusan.index') }}">Jurusan</a></li>
        @endforelse
      </ul>

      <div class="footer-quicklinks">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          @forelse($quickLinks ?? [] as $l)
          <li><a href="{{ $l['url'] }}">{{ $l['label'] }}</a></li>
          @empty
          <li><a href="{{ route('berita.index') }}">Berita</a></li>
          <li><a href="{{ route('fasilitas.index') }}">Fasilitas</a></li>
          <li><a href="{{ route('guru-staff.index') }}">Guru &amp; Staff</a></li>
          <li><a href="{{ route('ekstrakurikuler.index') }}">Ekstrakurikuler</a></li>
          @endforelse
        </ul>
      </div>
    </div>

    <div class="footer-col footer-address">
      <h3>Address</h3>
      <p>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-6.5 7-12a7 7 0 10-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
        <span>{{ $sekolah['alamat'] ?? '-' }}</span>
      </p>
      <p>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.4 2.1L8 9.9a16 16 0 006 6l1.5-1.3a2 2 0 012.1-.4c.9.3 1.8.5 2.7.6a2 2 0 011.7 2.1z"/></svg>
        <a href="tel:{{ $sekolah['telepon'] ?? '' }}">{{ $sekolah['telepon'] ?? '-' }}</a>
      </p>
      <p>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 6l10 7 10-7"/></svg>
        <span>{{ $sekolah['website'] ?? '-' }}</span>
      </p>
    </div>

    <div class="footer-col footer-about">
      <img src="{{ $sekolah['logo'] ?? asset('images/logo-smkn1cijati.png') }}" alt="Logo {{ $sekolah['nama'] ?? 'SMKN 1 Cijati' }}">
      <p>{{ $sekolah['deskripsi'] ?? '' }}</p>
    </div>
  </div>

  <div class="footer-bottom">
    &copy; {{ date('Y') }} {{ $sekolah['nama'] ?? '' }}. All rights reserved.
  </div>
</footer>

<script src="{{ asset('js/beranda.js') }}"></script>
@stack('scripts')
</body>
</html>
