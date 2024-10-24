<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_transaksi' => $this->faker->numerify('TRS-####################'),
            'id_pelanggan' => Pelanggan::class,
            'tanggal_transaksi' => $this->faker->date(),
            'total_harga' => $this->faker->randomNumber()
        ];
    }
}
