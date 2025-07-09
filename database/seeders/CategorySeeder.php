<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\tb_category::create([
            'name' => 'All in One',
            'description' => 'lorem ipsum dolor sit amet',
            'user_id' => 1,
        ]);

        \App\Models\tb_category::create([
            'name' => 'Intimate',
            'description' => 'lorem ipsum dolor sit amet',
            'user_id' => 1,
        ]);

        \App\Models\tb_category::create([
            'name' => 'Organize Only',
            'description' => 'lorem ipsum dolor sit amet',
            'user_id' => 1,
        ]);
    }
}
