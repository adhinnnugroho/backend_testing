<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hometown;

class HometownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hometowns = [
            'Manado',
            'Jakarta',
            'Surabaya',
        ];

        foreach ($hometowns as $city) {
            Hometown::create(['home_town_name' => $city]);
        }
    }
}
