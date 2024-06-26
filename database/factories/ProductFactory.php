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
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'type' => $this->faker->word(),
            'category' => $this->faker->word(),
            'style' => $this->faker->word(),
            'berat' => $this->faker->numberBetween(1, 100),
            'panjang_product' => $this->faker->numberBetween(1, 100),
            'lebar_product' => $this->faker->numberBetween(1, 100),
            'tinggi_product' => $this->faker->numberBetween(1, 100)


        ];
    }
}
