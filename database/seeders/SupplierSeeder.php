<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 10 random suppliers
        Supplier::factory()->count(10)->create();

        // Optionally add some fixed ones
        Supplier::create([
            'name' => 'Fragrance Hub Ltd',
            'email' => 'contact@fragrancehub.com',
            'phone' => '+254700000000',
            'address' => 'Nairobi, Kenya',
        ]);
    }
}
