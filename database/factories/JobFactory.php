<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => '$' . fake()->numberBetween(40000, 100000),
            'description' => fake()->paragraph(),
        ];
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
