<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruStaffController;
use App\Http\Controllers\EkstrakurikulerController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/pencarian', [BerandaController::class, 'search'])->name('beranda.search');

Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/sambutan-kepsek', [ProfilSekolahController::class, 'sambutanKepsek'])->name('sambutan-kepsek');
    Route::get('/visi-misi', [ProfilSekolahController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/sejarah', [ProfilSekolahController::class, 'sejarah'])->name('sejarah');
    Route::get('/struktur-organisasi', [ProfilSekolahController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
    Route::get('/komite-sekolah', [ProfilSekolahController::class, 'komiteSekolah'])->name('komite-sekolah');
});

Route::prefix('jurusan')->name('jurusan.')->group(function () {
    Route::get('/', [JurusanController::class, 'index'])->name('index');
    Route::get('/{slug}', [JurusanController::class, 'show'])->name('show');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/guru-staff', [GuruStaffController::class, 'index'])->name('guru-staff.index');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');