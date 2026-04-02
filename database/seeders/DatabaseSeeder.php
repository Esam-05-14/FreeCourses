<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Roadmap;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Language::insert([
            ['name' => 'English', 'code' => 'en'],
            ['name' => 'Spanish', 'code' => 'es'],
            ['name' => 'Arabic', 'code' => 'ar'],
        ]);

        // 2. Now create 50 fake courses. 
        // The CourseFactory will randomly pick from the languages we just created!
        $categories = Category::factory(10)->create();
        $roadmaps = Roadmap::factory(5)->create();

        $courses= Course::factory(50)->create();

        foreach($courses as $course)
            {
                $randomCat = $categories->random(rand(1,3))->pluck('id');
                $course->categories()->attach($randomCat);

                if (rand(0, 1)) {
                    $randomRoadmaps = $roadmaps->random(rand(1, 2));
                
                    foreach ($randomRoadmaps as $roadmap) {
                    // Attach with a random sort order so they appear sequentially
                        $course->roadmaps()->attach($roadmap->id, [
                            'sort_order' => rand(1, 10)
                        ]);
                    }
                }

            }
    }
}
