<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Generate 10 random categories
        Category::factory()->count(10)->create();

        // Optionally add some fixed ones
        Category::create(['name' => 'Luxury', 'description' => 'High-end perfumes']);
        Category::create(['name' => 'Casual', 'description' => 'Everyday wear']);
    }
}
