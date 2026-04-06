@extends('layouts.public')

@section('content')
<div class="bg-slate-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-slate-900">Welcome back, {{ auth()->user()->name }}! 👋</h1>
            <p class="text-slate-500 mt-2">Ready to pick up where you left off?</p>
        </div>

        <div class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    In Progress ({{ $inProgressCourses->count() }})
                </h2>
            </div>

            @if($inProgressCourses->isEmpty())
                <div class="bg-white border border-slate-200 rounded-xl p-8 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1">You aren't taking any courses yet.</h3>
                    <p class="text-slate-500 mb-5">Explore our library and start learning today!</p>
                    <a href="{{ route('courses.index') }}" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-semibold transition-colors">
                        Browse Courses
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($inProgressCourses as $course)
                        <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col">
                            <a href="{{ $course->url }}" target="_blank" class="relative aspect-video bg-slate-800 group overflow-hidden block">
                                @if($course->thumbnail)
                                    <img src="{{ $course->thumbnail }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" alt="{{ $course->title }}">
                                @endif
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/30">
                                    <div class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="w-6 h-6 text-indigo-600 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                </div>
                            </a>
                            
                            <div class="p-5 flex flex-col flex-grow">
                                <h3 class="font-bold text-slate-900 line-clamp-2 mb-4">
                                    <a href="{{ route('courses.show', $course->slug) }}" class="hover:text-indigo-600 transition-colors">{{ $course->title }}</a>
                                </h3>
                                
                                <div class="mt-auto">
                                    <div class="flex justify-between text-xs text-slate-500 mb-1.5 font-medium">
                                        <span>Learning in progress...</span>
                                        <span class="text-indigo-600">Incomplete</span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden">
                                        <div class="bg-indigo-600 h-2 rounded-full w-1/3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                    Saved for Later ({{ $savedCourses->count() }})
                </h2>
            </div>

            @if($savedCourses->isEmpty())
                <p class="text-slate-500 italic text-sm">You haven't saved any courses to your dashboard yet.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    @foreach($savedCourses as $course)
                        <x-course-card :course="$course" />
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</div>
@endsection