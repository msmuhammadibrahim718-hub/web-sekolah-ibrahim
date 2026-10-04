document.addEventListener('DOMContentLoaded', function () {

  /* ---------------------------------------------------------
     1) Dropdown menus (PROFIL SEKOLAH, JURUSAN)
     - Klik tombol untuk buka/tutup
     - Klik di luar menutup semua dropdown
     - Esc menutup semua dropdown
     - Hanya satu dropdown terbuka dalam satu waktu
  --------------------------------------------------------- */
  var dropdownParents = document.querySelectorAll('.top-menu .has-dropdown');

  function closeAllDropdowns(except) {
    dropdownParents.forEach(function (parent) {
      if (parent === except) return;
      parent.classList.remove('open');
      var toggle = parent.querySelector('.dropdown-toggle');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
  }

  dropdownParents.forEach(function (parent) {
    var toggle = parent.querySelector('.dropdown-toggle');
    if (!toggle) return;

    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      var isOpen = parent.classList.contains('open');
      closeAllDropdowns(parent);
      parent.classList.toggle('open', !isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
    });
  });

  document.addEventListener('click', function (e) {
    var clickedInsideDropdown = e.target.closest('.has-dropdown');
    if (!clickedInsideDropdown) {
      closeAllDropdowns();
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAllDropdowns();
    }
  });

  /* ---------------------------------------------------------
     2) Mobile menu toggle (hamburger)
  --------------------------------------------------------- */
  var navToggle = document.getElementById('navToggle');
  var topMenu = document.getElementById('topMenu');

  if (navToggle && topMenu) {
    navToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = topMenu.classList.toggle('mobile-open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      if (!isOpen) closeAllDropdowns();
    });

    // Tutup menu mobile saat klik link biasa (bukan dropdown toggle)
    topMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth <= 900) {
          topMenu.classList.remove('mobile-open');
          navToggle.setAttribute('aria-expanded', 'false');
        }
      });
    });

    // Reset state saat resize melewati breakpoint mobile
    window.addEventListener('resize', function () {
      if (window.innerWidth > 900) {
        topMenu.classList.remove('mobile-open');
        navToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---------------------------------------------------------
     3) Kotak pencarian di utility bar
  --------------------------------------------------------- */
  var searchToggle = document.getElementById('searchToggle');
  var searchBox = document.getElementById('searchBox');

  if (searchToggle && searchBox) {
    searchToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = searchBox.classList.toggle('open');
      if (isOpen) {
        var input = searchBox.querySelector('input');
        if (input) input.focus();
      }
    });

    document.addEventListener('click', function (e) {
      if (!searchBox.contains(e.target) && e.target !== searchToggle) {
        searchBox.classList.remove('open');
      }
    });
  }

  /* ---------------------------------------------------------
     4) Jam berjalan di utility bar (opsional, kosmetik)
  --------------------------------------------------------- */
  var liveClock = document.getElementById('liveClock');
  if (liveClock) {
    var bulan = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var hari = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

    function ordinal(n) {
      if (n > 3 && n < 21) return n + 'th';
      switch (n % 10) {
        case 1: return n + 'st';
        case 2: return n + 'nd';
        case 3: return n + 'rd';
        default: return n + 'th';
      }
    }

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function updateClock() {
      var now = new Date();
      var tanggal = hari[now.getDay()] + ', ' + bulan[now.getMonth()] + ' ' + ordinal(now.getDate()) + ', ' + now.getFullYear();
      var jam = pad(now.getHours()) + '.' + pad(now.getMinutes()) + '.' + pad(now.getSeconds());
      liveClock.textContent = tanggal + '   ' + jam;
    }

    updateClock();
    setInterval(updateClock, 1000);
  }

});