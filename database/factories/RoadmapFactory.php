<?php

namespace Database\Factories;

use App\Models\Roadmap;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Roadmap>
 */
class RoadmapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->jobTitle() . ' Path'; // e.g., "Software Engineer Path"

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'is_published' => $this->faker->boolean(80), // 80% chance to be published
            'sort_order' => $this->faker->numberBetween(1, 10),
            // Defaulting aggregates to 0, though you could calculate them later
            'duration_minutes' => 0,
            'courses_count' => 0, 
        ];
    }
}
