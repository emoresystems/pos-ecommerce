<?php

namespace Database\Seeders;

use App\Models\Perfume;
use Illuminate\Database\Seeder;

class PerfumeSeeder extends Seeder
{
    public function run(): void
    {
        // Create 50 perfume records
        Perfume::factory()->count(50)->create();
    }
}