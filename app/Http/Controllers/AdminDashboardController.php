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
    public function roadmaps(Request $request)
    {
        $query = Roadmap::with('courses');

        // 2. Handle Search (checks title, description, and provider)
        $query->when($request->filled('search'), function ($q) use ($request) {
            $searchTerm = '%' . $request->search . '%';
            $q->where(function ($subQuery) use ($searchTerm) {
                $subQuery->where('title', 'like', $searchTerm);
            });
        });
        $query->when($request->filled('provider'), function ($q) use ($request) {
            $q->where('provider', $request->provider);
        });
        // 1. Gather High-Level Stats for the top cards
        $roadmaps = $query->get();

        return view('pages.admin.roadmaps', compact('roadmaps'));
    }
    public function courses(Request $request)
    {
        
    $query = Course::with(['language', 'categories']);

        // 2. Handle Search (checks title, description, and provider)
        $query->when($request->filled('search'), function ($q) use ($request) {
            $searchTerm = '%' . $request->search . '%';
            $q->where(function ($subQuery) use ($searchTerm) {
                $subQuery->where('title', 'like', $searchTerm)
                         ->orWhere('description', 'like', $searchTerm)
                         ->orWhere('provider', 'like', $searchTerm);
            });
        });

        $query->when($request->filled('provider'), function ($q) use ($request) {
            $q->where('provider', $request->provider);
        });

        // 4. Handle Provider Filter
        $query->when($request->filled('is_published'), function ($q) use ($request) {
            $q->where('is_published', $request->is_published);
        });


        // 6. Execute query, paginate, and append query strings so filters survive page 2, 3, etc.
        $courses = $query->latest()->paginate(12)->withQueryString();


   

        return view('pages.admin.courses', compact('courses'));
    }
    public function users()
    {
        // 1. Gather High-Level Stats for the top cards
        $users = User::latest()->paginate(10);

        return view('pages.admin.users', compact('users'));
    }
}