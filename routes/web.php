<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/courses', CourseController::class);
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
Route::get('/courses/{course}', [CourseController::class, 'show'])->name("courses.show");

Route::post('/courses/', [CourseController::class, 'store'])->name("courses.store");
Route::put('/courses/{course}', [CourseController::class, 'update'])->name("courses.update");
Route::delete('/courses/{course}', [AdminDashboardController::class, 'destroy'])->name("courses.destroy");


Route::get('/roadmaps', [RoadmapController::class, 'index'])->name("roadmaps.index");

Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/user', function () {
    return view('pages.admin.users');
})->name('admin.users');
Route::get('/admin/courses', function () {
    return view('pages.admin.courses');
})->name('admin.courses');

Route::get('/admin/add-course', [CourseController::class, 'create'])->name('courses.create');
Route::get('/admin/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    // Replace the default Breeze dashboard route with this:
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // We will also need routes to actually save/start courses later!
    Route::post('/courses/{course}/save', [DashboardController::class, 'saveCourse'])->name('courses.save');
    Route::post('/courses/{course}/start', [DashboardController::class, 'startCourse'])->name('courses.start');

    
});
require __DIR__.'/auth.php';
