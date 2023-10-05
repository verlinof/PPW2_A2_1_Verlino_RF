<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_barang" => fake()->words(2, true),
            "harga" => fake()->numerify('###00'),
            "stok" => fake()->randomNumber(2, false),
            "id_supplier" => fake()->randomNumber(2, false)            
        ];
    }
}