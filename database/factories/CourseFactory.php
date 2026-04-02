<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str ;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->catchPhrase();

        return [
            'title' => $title,
            // Automatically generate a valid URL slug from the title
            'slug' => Str::slug($title),
            
            // This assigns a random existing language ID. 
            // If no languages exist, it creates one on the fly using the Language factory.
            'language_id' => Language::inRandomOrder()->first()->id ?? Language::factory(),
            
            'description' => $this->faker->paragraphs(3, true),
            'provider' => $this->faker->randomElement(['YouTube', 'Coursera', 'Udemy', 'FreeCodeCamp']),
            'url' => $this->faker->url(),
            
            // Generates a placeholder image URL (e.g., 640x360 pixels)
            'thumbnail' => $this->faker->imageUrl(640, 360, 'education'),
            
            // Random duration between 30 minutes and 20 hours (1200 mins)
            'duration' => $this->faker->numberBetween(30, 1200),
            
            'difficulty' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            
            // 85% chance of being true (most courses should be published for testing)
            'is_published' => $this->faker->boolean(85),
            
            // 15% chance of being true (only a few should be featured)
            'is_featured' => $this->faker->boolean(15),
            
            'view_count' => $this->faker->numberBetween(0, 50000),
        ];
    }
}
