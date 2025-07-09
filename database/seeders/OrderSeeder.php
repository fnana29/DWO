<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\tb_order::create([
            'catalogue_id' => 1,
            'wedding_date' => '2024-06-16',
            'status' => 'requested',
            'user_id' => 1,
        ]);
    }
}
