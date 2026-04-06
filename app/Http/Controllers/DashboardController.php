<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get the currently logged-in user
        $user = $request->user();

        // 1. Fetch courses marked as "in_progress"
        // We eager load the 'language' to prevent N+1 queries in the view
        $inProgressCourses = $user->courses()
                                 ->with('language')
                                 ->wherePivot('status', 'in_progress')
                                 ->orderByPivot('updated_at', 'desc') // Most recently accessed first
                                 ->get();

        // 2. Fetch courses marked as "saved"
        $savedCourses = $user->courses()
                             ->with('language')
                             ->wherePivot('status', 'saved')
                             ->orderByPivot('created_at', 'desc')
                             ->get();

        return view('dashboard', compact('inProgressCourses', 'savedCourses'));
    }

    public function saveCourse(Request $request, Course $course)
    {
        // Attach the course to the user with the 'saved' status
        $request->user()->courses()->syncWithoutDetaching([
            $course->id => ['status' => 'saved']
        ]);

        return back()->with('success', 'Course saved to your dashboard!');
    }

    public function startCourse(Request $request, Course $course)
    {
        // Attach the course to the user with 'in_progress' status
        $request->user()->courses()->syncWithoutDetaching([
            $course->id => [
                'status' => 'in_progress',
                'last_accessed_at' => now()
            ]
        ]);

        // When they start a course, it's a good idea to redirect them to their dashboard
        return redirect()->route('dashboard')->with('success', 'Course started! Good luck!');
    }

}
