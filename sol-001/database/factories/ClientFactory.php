<?php

namespace Database\Factories;

use App\Models\Client;
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
            'full_name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'cpf' => strval(fake()->numberBetween(100000000, 999999999)),
            'cnpj' => strval(fake()->numberBetween(100000000, 999999999)),
            'birth_date' => fake()->date(),
            'status' => fake()->randomElement(Client::STATUS),
        ];
    }
}
