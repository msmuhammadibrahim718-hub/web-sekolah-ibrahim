<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitas>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => 'Ruang ' . fake()->words(2, true),
            'deskripsi' => fake()->paragraph(),
            'gambar' => null,
            'kategori' => fake()->randomElement(['Laboratorium', 'Ruang Penunjang', 'Sarana Ibadah', 'Ruang Praktik']),
            'urutan' => fake()->numberBetween(1, 20),
        ];
    }
}