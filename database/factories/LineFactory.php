<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Line>
 */
class LineFactory extends Factory
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
            'qte' => $this->faker->randomNumber(2),
            'description' => $this->faker->sentence,
            'taxes' => $this->faker->randomFloat(2, 0, 100),
            'montant_ht' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
