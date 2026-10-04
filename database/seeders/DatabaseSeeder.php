<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GuruSeeder::class,
            EkstrakurikulerSeeder::class,
            JurusanSeeder::class,
            // Tambahkan seeder lain di sini kalau ada (User, dll.)
        ]);
    }
}