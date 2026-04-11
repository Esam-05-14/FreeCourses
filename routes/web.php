<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ZONE 1: PUBLIC ROUTES (Anyone can view)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/roadmaps', [RoadmapController::class, 'index'])->name('roadmaps.index');
Route::get('/roadmaps/{roadmap}', [RoadmapController::class, 'show'])->name('roadmaps.show');

/*
|--------------------------------------------------------------------------
| ZONE 2: STUDENT ROUTES (Must be logged in)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/courses/{course}/save', [DashboardController::class, 'saveCourse'])->name('courses.save');
    Route::post('/courses/{course}/start', [DashboardController::class, 'startCourse'])->name('courses.start');
    Route::post('/courses/{course}/complete', [DashboardController::class, 'completeCourse'])->name('courses.complete');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ZONE 3: ADMIN ROUTES (Must be logged in AND an Admin)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {
    
    // Admin Dashboard Views
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminDashboardController::class , 'users'])->name('admin.users');
    Route::get('/admin/courses', [AdminDashboardController::class , 'courses'])->name('admin.courses');
    Route::get('/admin/roadmaps', [AdminDashboardController::class , 'roadmaps'])->name('admin.roadmaps');

    // Course CRUD
    Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // Roadmap CRUD
    Route::get('/admin/roadmaps/create', [RoadmapController::class, 'create'])->name('roadmaps.create');
    Route::post('/roadmaps', [RoadmapController::class, 'store'])->name('roadmaps.store');
    Route::get('/admin/roadmaps/{roadmap}/edit', [RoadmapController::class, 'edit'])->name('roadmaps.edit');
    Route::put('/roadmaps/{roadmap}', [RoadmapController::class, 'update'])->name('roadmaps.update');
    Route::delete('/roadmaps/{roadmap}', [RoadmapController::class, 'destroy'])->name('roadmaps.destroy');
});

require __DIR__.'/auth.php';