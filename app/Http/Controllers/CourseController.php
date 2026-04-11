<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCourseRequest;
use App\Http\Requests\updateCourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // 1. Start a base query for published courses, eager loading relationships
        $query = Course::with(['language', 'categories'])->where('is_published', true);

        // 2. Handle Search (checks title, description, and provider)
        $query->when($request->filled('search'), function ($q) use ($request) {
            $searchTerm = '%' . $request->search . '%';
            $q->where(function ($subQuery) use ($searchTerm) {
                $subQuery->where('title', 'like', $searchTerm)
                         ->orWhere('description', 'like', $searchTerm)
                         ->orWhere('provider', 'like', $searchTerm);
            });
        });

        // 3. Handle Category Filter (checks the pivot table!)
        $query->when($request->filled('category'), function ($q) use ($request) {
            $q->whereHas('categories', function ($subQuery) use ($request) {
                // Allows matching by ID or Slug depending on how the frontend passes it
                $subQuery->where('slug', $request->category)
                         ->orWhere('categories.id', $request->category); 
            });
        });

        // 4. Handle Provider Filter
        $query->when($request->filled('provider'), function ($q) use ($request) {
            $q->where('provider', $request->provider);
        });

        // 5. Handle Difficulty Filter
        $query->when($request->filled('difficulty'), function ($q) use ($request) {
            $q->where('difficulty', $request->difficulty);
        });

        // 6. Execute query, paginate, and append query strings so filters survive page 2, 3, etc.
        $courses = $query->latest()->paginate(12)->withQueryString();

        // Fetch categories to populate the dropdown filter
        $categories = Category::orderBy('name')->get();

        return view('pages.home', compact('courses', 'categories'));
    }

    public function show(Course $course) {
        return view('pages.details', [
            "course" => $course,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $languages = Language::all();
        return view('pages.add-course', [
            "categories" => $categories,
            "languages" => $languages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCourseRequest $request)
    {
        
        $validated = $request->validated();
        $categoryIds = $validated['categories'];
        unset($validated['categories']);

        // 2. Create the course
        $course = Course::create($validated);

        // 3. Attach the Many-to-Many relationship
        $course->categories()->attach($categoryIds);
        return redirect()->route('courses.show', ['course' => $course]);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        
        $categories = Category::all();
        $languages = Language::all();
        return view('pages.edit-course', [
            "categories" => $categories,
            "languages" => $languages,
            "course" => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCourseRequest $request, Course $course)
    {
    // dd($course);    
        $validated = $request->validated();
            // dd($validated);
        $validated['slug'] = $course->slug;
        $categoryIds = $validated['categories'];
        unset($validated['categories']);

        
        $course->update($validated);
        $course->categories()->sync($categoryIds);

        return redirect()->route('courses.show', ['course' => $course->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back();
    }
}
