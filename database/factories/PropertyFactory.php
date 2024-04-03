<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph(5),
            'surface' => $this->faker->numberBetween(28, 352),
            'rooms' => $this->faker->numberBetween(1, 5),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'floor' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(500000, 3000000),
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'postal_code' => $this->faker->postcode,
            'sold' => $this->faker->boolean(),
        'image' => $this->faker->imageUrl(640, 480, 'animals', true),];
    }
}
