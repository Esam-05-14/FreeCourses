<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoadmapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/courses', CourseController::class);
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/add-course', [CourseController::class, 'create']);
Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
Route::get('/courses/{course}', [CourseController::class, 'show'])->name("courses.show");

Route::post('/courses/', [CourseController::class, 'store'])->name("courses.store");
Route::put('/courses/', [CourseController::class, 'update'])->name("courses.update");
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name("courses.destroy");



Route::get('/details', function () {
    return view('pages.details');
});
Route::get('/roadmaps', [RoadmapController::class, 'index'])->name("roadmaps.index");
Route::get('/admin', function () {
    return view('pages.admin');
});
Route::get('/add-course', function () {
    return view('pages.addCourse');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
