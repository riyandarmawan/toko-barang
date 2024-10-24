<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailTransaksi>
 */
class DetailTransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_transaksi' => Transaksi::class,
            'id_barang' => Barang::class,
            'jumlah' => $this->faker->randomNumber(100),
            'sub_total' => $this->faker->randomNumber(),
        ];
    }
}
