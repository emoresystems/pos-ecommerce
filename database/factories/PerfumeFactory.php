<?php

namespace Database\Factories;

use App\Models\Perfume;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfumeFactory extends Factory
{
    protected $model = Perfume::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true) . ' Perfume',
            'profile_pic' => $this->faker->imageUrl(400, 400, 'perfume', true),
            'description' => $this->faker->paragraph(3),
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),
            'stock_quantity' => $this->faker->numberBetween(10, 100),
            'buying_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expire_date' => $this->faker->dateTimeBetween('+1 year', '+3 years'),
            'buying_price' => $this->faker->randomFloat(2, 20, 200),
            'retail_price' => $this->faker->randomFloat(2, 30, 300),
        ];
    }
}