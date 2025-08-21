<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'  => $this->faker->lastName(),
            'email'      => $this->faker->unique()->safeEmail(),
            'phone'      => $this->faker->unique()->phoneNumber(),
            'address'    => $this->faker->address(),
            'city'       => $this->faker->city(),
            'country'    => $this->faker->country(),
            'total_spent'=> $this->faker->randomFloat(2, 0, 50000), // up to 50k
        ];
    }
}
