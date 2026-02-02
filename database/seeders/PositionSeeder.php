<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'HRD',
            'Accounting',
            'Direktur',
            'Sales',
        ];

        foreach ($positions as $position) {
            Position::create(['position_name' => $position]);
        }
    }
}
