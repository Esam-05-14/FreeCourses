<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement([
            'Frontend', 'Backend', 'AI & Machine Learning', 'Cybersecurity', 
            'DevOps', 'Databases', 'Mobile Development', 'UI/UX Design', 
            'Cloud Computing', 'Data Science'
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(10)
        ];
    }
}
