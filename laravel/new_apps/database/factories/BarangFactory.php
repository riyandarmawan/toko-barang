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
            'id_barang' => $this->faker->numerify('BRG-######'),
            'nama_barang' => $this->faker->words(3, true),
            'harga' => $this->faker->randomNumber(),
            'stok' => $this->faker->randomNumber(1000),
        ];
    }
}
