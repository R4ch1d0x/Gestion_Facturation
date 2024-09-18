<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['en attande', 'payé']);

        return [
            'code_facture'=>mt_rand(1000,9999),
            'client_id' => Client::factory(),
            'prix_hors_taxes' => $this->faker->numberBetween(100, 20000),
            'tva' => $this->faker->numberBetween(0, 25),
            'status' => $status,
            "echéance" => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'prix_total'=> $this->faker->numberBetween(100, 20000),
];
}
}
