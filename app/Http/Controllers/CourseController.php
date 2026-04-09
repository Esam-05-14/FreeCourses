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
    public function index()
    {
        $courses = Course::with('language')->where('is_published', true)
        ->latest()
        ->paginate(9);;
        $categories = Category::all();
        $languages = Language::all();
        return view('pages.home',[
            "courses" => $courses,
            "categories" => $categories,
            "languages" => $languages
        ]);
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
        return redirect()->route('pages.home');
    }
}
