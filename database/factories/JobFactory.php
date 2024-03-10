<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

// Extend the Factory class provided by Laravel for the Job model
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed> An array defining the default attributes for the Job model
     */
    public function definition(): array
    {
        return [
            // Generate a fake job title
            'title' => fake()->jobTitle,
            
            // Generate fake paragraphs for job description
            'description' => fake()->paragraphs(3, true),
            
            // Generate a fake salary between 5000 and 150000
            'salary' => fake()->numberBetween(5_000, 150_000),
            
            // Generate a fake city for job location
            'location' => fake()->city,
            
            // Select a random category from the defined categories in the Job model
            'category' => fake()->randomElement(Job::$category),
            
            // Select a random experience level from the defined levels in the Job model
            'experience' => fake()->randomElement(Job::$experience)
        ];
    }
}
