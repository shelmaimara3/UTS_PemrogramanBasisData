<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InventarisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3),
            'lokasis_id' => mt_rand(1,4),
            'peminjamen_id' => 1,
            'nama' => $this->faker->sentence(mt_rand(2,8)),
            'kondisi' => $this->faker->sentence(mt_rand(2,8))
        ];
    }
}
