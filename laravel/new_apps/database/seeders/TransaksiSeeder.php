<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
Transaksi::factory(5)->recycle(Pelanggan::all())->create();
    }
}
