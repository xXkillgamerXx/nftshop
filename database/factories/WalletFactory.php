<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 0,
            'chain_id' =>  0,
            'wallet_address' => $this->faker->sha1(),
            'status' => 0,
        ];
    }
}
