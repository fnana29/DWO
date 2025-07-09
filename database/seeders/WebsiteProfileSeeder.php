<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\tb_settings::create([
            'phone_number' => '021-34567',
            'email' => 'sales@jewepe.co.id',
            'address' => 'Jl. Bekasi, Kota Bekasi, Jawa Barat',
            'instagram' => '@weddingorganizerjewepe',
            'time_business_hour' => 'Senin-Jumat: 09.00-17.00',
            'user_id' => 1,
        ]);
    }
}
