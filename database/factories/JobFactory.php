<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000', '$100,000', '$150,000']),
            'location' => 'Remote', 
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'URL' => fake()->url,
            'FEATURED' => false, 
        ];
    }
}
