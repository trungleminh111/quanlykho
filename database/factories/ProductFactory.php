<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'unit' =>  $this->faker->name(),
            'desc' => $this->faker->name(),
            'price' => $this->faker->randomDigit(),
            'import_price' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'category_id' => 1,
        ];
    }
}
