<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gudang>
 */
class GudangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->sentence(),
            'harga' => fake()->randomNumber(3, true)*1000,
            'stok' => fake()->randomNumber(3),
            'id_supplier' => fake()->randomNumber(2)
        ];
    }
}
