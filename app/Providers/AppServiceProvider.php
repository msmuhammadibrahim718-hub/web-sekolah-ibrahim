<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (! $view->offsetExists('sekolah')) {
                $view->with('sekolah', [
                    'nama'         => 'SMKN 1 Cijati',
                    'moto'         => 'Kompeten, Berkarakter, Siap Kerja',
                    'moto_panjang' => 'SMK Unggulan yang Menghasilkan SDM Bermutu dan Berdaya Saing Tinggi',
                    'logo'         => asset('images/logo-smkn1cijati.png'),
                    'gerbang'      => asset('images/gerbang-sekolah.jpeg'),
                    'alamat'       => 'Jl. Raya Cijati No. 1, Kabupaten Cianjur, Jawa Barat',
                    'telepon'      => '022-1234567',
                    'website'      => 'www.smkn1cijati.sch.id',
                    'deskripsi'    => 'SMK Negeri 1 Cijati adalah sekolah kejuruan yang berkomitmen mencetak lulusan siap kerja dan berkarakter.',
                ]);
            }
        });
    }
}