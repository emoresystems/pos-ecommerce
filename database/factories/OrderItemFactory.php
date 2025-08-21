<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Perfume;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        $perfume = Perfume::inRandomOrder()->first() ?? Perfume::factory()->create();
        $qty = $this->faker->numberBetween(1, 5);

        return [
            'order_id' => Order::factory(),
            'perfume_id' => $perfume->id,
            'quantity' => $qty,
            'unit_price' => $perfume->retail_price,
            'subtotal' => $perfume->retail_price * $qty,
        ];
    }
}
