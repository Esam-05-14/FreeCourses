<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeRoadmapeRequest;
use App\Http\Requests\updateCourseRequest;
use App\Http\Requests\updateRoadmapeRequest;
use App\Models\Course;
use App\Models\Roadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roadmaps = Roadmap::where('is_published', true)->with('courses')->get();
        return view('pages.roadmaps', [
            'roadmaps' => $roadmaps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::orderBy('title')->get();
    
        return view('pages.roadmaps.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeRoadmapeRequest $request)
    {
        //

        $validated = $request->validated();

        $roadmap = Roadmap::create(Arr::except($validated, ['courses', 'course_orders']));
        $this->syncCoursesAndAggregates($roadmap, $request->input('courses', []), $request->input('course_orders', []));

        return redirect()->route('admin.roadmaps')->with('success', 'Roadmap created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Roadmap $roadmap)
    {
        // Eager load the courses and their providers/languages for performance
        $roadmap->load('courses.language'); 

        return view('pages.roadmaps.show', compact('roadmap'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roadmap $roadmap)
    {
    // dd($roadmap);    
    $courses = Course::all();
        
        return view('pages.roadmaps.edit', compact('roadmap','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRoadmapeRequest $request, Roadmap $roadmap)
    {
        $validated = $request->validated();

        $roadmap->update(Arr::except($validated, ['courses', 'course_orders']));
        $this->syncCoursesAndAggregates($roadmap, $request->input('courses', []), $request->input('course_orders', []));

        return redirect()->route('admin.roadmaps')->with('success', 'Roadmap updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roadmap $roadmap)
    {
        $roadmap->delete();
        return redirect()->route('admin.roadmaps')->with('success', 'Roadmap deleted!');
    }

    /**
 * Helper method to handle the complex pivot syncing and aggregate calculations
 */
private function syncCoursesAndAggregates(Roadmap $roadmap, array $courseIds, array $courseOrders)
{
    $syncData = [];
    
    // Build the sync array: [course_id => ['sort_order' => 1]]
    foreach ($courseIds as $courseId) {
        $syncData[$courseId] = [
            'sort_order' => $courseOrders[$courseId] ?? 0
        ];
    }

    // Sync to pivot table
    $roadmap->courses()->sync($syncData);

    // Auto-calculate cached data!
    $roadmap->update([
        'courses_count' => count($courseIds),
        'duration_minutes' => Course::whereIn('id', $courseIds)->sum('duration')
    ]);
}
}
