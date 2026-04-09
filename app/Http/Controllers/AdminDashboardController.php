<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Roadmap;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // 1. Gather High-Level Stats for the top cards
        $stats = [
            'total_courses' => Course::count(),
            'published_courses' => Course::where('is_published', true)->count(),
            'total_roadmaps' => Roadmap::count(),
            'published_roadmaps' => Roadmap::where('is_published', true)->count(),
        ];

        // 2. Fetch the 5 most recent items to display on the dashboard
        $recentCourses = Course::with('language')->latest()->take(5)->get();
        
        // We use withCount('courses') so we can easily show how many courses are in each roadmap!
        $recentRoadmaps = Roadmap::withCount('courses')->latest()->take(5)->get();

        return view('pages.admin.dashboard', compact('stats', 'recentCourses', 'recentRoadmaps'));
    }
    public function roadmaps()
    {
        // 1. Gather High-Level Stats for the top cards
        $roadmaps = Roadmap::all();

        return view('pages.admin.roadmaps', compact('roadmaps'));
    }
    public function courses()
    {
        // 1. Gather High-Level Stats for the top cards
        $courses = Course::with('language')->latest()->paginate(10);

   

        return view('pages.admin.courses', compact('courses'));
    }
    public function users()
    {
        // 1. Gather High-Level Stats for the top cards
        $users = User::latest()->paginate(10);

        return view('pages.admin.users', compact('users'));
    }
}