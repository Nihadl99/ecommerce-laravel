<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


        public function definition()
        {
            return [
                'name' => $this->faker->randomElement(['t-shirt', 'pentalon', 'veste', 'chaussure']),
                'description' => $this->faker->text(),
                'price' => $this->faker->randomFloat(2, 0, 1000),
                'slug' => $this->faker->slug(1),
                'favorite' => $this->faker->boolean(),
                'colors' => $this->faker->randomElements(['Rouge', 'Vert', 'Bleu'], rand(0, 3)),
                'image' => $this->faker->imageUrl(),
                'discount' => $this->faker->randomFloat(2, 0, 100),
                'category_id' => Category::factory(),
            ];
        }
}
