<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'city' => fake()->city(),
            'time' => fake()->numberBetween(1,120) . 'min + 0',
            'mode' => 'Swiss',
            'location'=> fake()->streetAddress(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
        ];
    }
}
