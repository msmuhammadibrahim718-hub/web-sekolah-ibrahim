<?php

namespace Database\Factories;

use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ekstrakurikuler>
 */
class EkstrakurikulerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_ekskul' => fake()->randomElement([
                'Pramuka',
                'PMR',
                'Basket',
                'Futsal',
                'Paskibra',
                'English Club'
            ]),
            'pembina' => fake()->name(),
            'deskripsi' => fake()->paragraph(),
            'logo' => 'default.png',
            'guru_id' => Guru::factory(),
        ];
    }
}