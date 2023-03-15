<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer' => $this->faker,
            'first_name' => $this->faker,
            'last_name' => $this->faker,
            'email' => $this->faker->email,
            'event_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
