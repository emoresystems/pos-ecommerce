<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 20 orders with items
        Order::factory(20)->create()->each(function ($order) {
            // Each order will have 1–5 items
            OrderItem::factory(rand(1, 5))->create([
                'order_id' => $order->id,
            ]);

            // Recalculate total_amount from items
            $total = $order->items()->sum('subtotal');
            $order->update(['total_amount' => $total]);
        });
    }
}
