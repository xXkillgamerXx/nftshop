<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(512, 512, 'production'),
            'link' => $this->faker->url(),
            'description' => $this->faker->text(250),
            'price' => $this->faker->numberBetween(100,1000)
        ];
    }
}
