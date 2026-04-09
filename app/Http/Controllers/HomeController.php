<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch 6 categories (ordered by how many courses they have)
        $categories = Category::withCount('courses')
                            ->orderByDesc('courses_count')
                            ->take(6)
                            ->get();

        // Fetch 4 recently published courses
        // (If you added an 'is_featured' column earlier, you can use ->where('is_featured', true) here!)
        $featuredCourses = Course::with('language')
                            ->where('is_published', true)
                            ->where('is_featured', true)
                            ->latest()
                            ->take(4)
                            ->get();
        $languages = Language::all();

        return view('welcome', compact('languages','categories', 'featuredCourses'));
    }
}