<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
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
    public function store(Request $request)
    {
        //
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
            "languages" => $languages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('welcome');
    }
}
