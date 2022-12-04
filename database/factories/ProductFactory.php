<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$name = $this->faker->word;   - busca pelo primeiro name

        // $name = $this->faker->sentence;
        $name = $this->faker->text(25);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'cover' => $this->faker->imageUrl($width = 140, $height = 300),            
            'price' => $this->faker->randomFloat(1,7,30),            
            'description' => $this->faker->text(100),
            'stock' => $this->faker->randomDigit(),
            // 'cover' => $this->faker->imageUrl,
            // 'description' => $this->faker->sentence,
        ];
    }
}
