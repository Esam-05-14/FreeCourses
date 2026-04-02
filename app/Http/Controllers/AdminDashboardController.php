<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
{
    // Eager load the language to prevent the N+1 query problem
    // Paginate to show 10 courses per page
    $courses = Course::with('language')->latest()->paginate(10);
    
    return view('pages.admin', compact('courses'));
}

// You will also need a destroy method to handle the Delete button
public function destroy(Course $course)
{
    $course->delete();
    return redirect()->back()->with('success', 'Course deleted successfully.');
}
}
