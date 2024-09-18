<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'code_client'=>mt_rand(1000,9999),
            'name' => $this->faker->name(),
            'type_client' => $this->faker->randomElement(['B', 'C']),
            'email' => $this->faker->companyEmail(),
            'telephone' => $this->faker->phoneNumber(),
];
}
}
