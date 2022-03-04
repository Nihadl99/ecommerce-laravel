<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Pull', 'Jean', 'Manteau', 'chaussure']),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'slug' => $this->faker->slug(1),
            'favorite' => $this->faker->boolean(),
            'colors' => $this->faker->randomElements(['Rouge', 'Vert', 'Bleu'], rand(0, 3)),
            'image' => $this->faker->imageUrl(),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'category_id' => category::factory(),
        ];

    }
}
