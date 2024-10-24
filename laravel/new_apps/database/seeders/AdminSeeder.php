<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        Admin::create([
            'username' => 'kasir',
            'password' => Hash::make('password'),
            'role' => 'kasir'
        ]);

        Admin::factory(5)->create();
    }
}
