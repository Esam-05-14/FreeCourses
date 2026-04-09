@extends('layouts.public')
@section('content')

<section id="view1">
  <div class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
      <span class="inline-block text-xs font-semibold tracking-widest text-indigo-600 uppercase bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full mb-5">100% Free, Always</span>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-5">Stop Searching.<br class="hidden sm:block" /> Start Learning.</h1>
      <p class="text-lg text-slate-500 max-w-xl mx-auto mb-10">The largest hand-curated library of free CS and programming courses from YouTube, Coursera, and Udemy — all in one place.</p>
      
      <form action="{{ route('courses.index') }}" method="GET" class="flex max-w-2xl mx-auto shadow-md rounded-xl overflow-hidden border border-slate-200 bg-white">
        <div class="flex items-center pl-4 text-slate-400">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        <input type="text" name="search" placeholder="Search courses, topics, or skills…" class="flex-1 px-4 py-4 text-sm text-slate-900 placeholder-slate-400 outline-none bg-transparent" required />
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-6 py-4 whitespace-nowrap">Search</button>
      </form>

    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <div class="mb-16">
      <h2 class="text-xl font-bold text-slate-900 mb-6">Browse by Category</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
        
        @forelse($categories as $category)
          <a href="{{ route('courses.index', ['category' => $category->slug ?? $category->id]) }}" class="group flex flex-col items-center gap-3 bg-white border border-slate-200 rounded-xl p-5 shadow-sm hover:shadow-md hover:border-indigo-300 transition-all">
            <div class="w-10 h-10 bg-indigo-50 rounded-lg flex items-center justify-center group-hover:bg-indigo-100 transition-colors">
              <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
            </div>
            <span class="text-sm font-semibold text-slate-700">{{ $category->name }}</span>
          </a>
        @empty
            <p class="text-sm text-slate-500 col-span-full">No categories available yet.</p>
        @endforelse

      </div>
    </div>

    <div>
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-slate-900">Featured Courses</h2>
        <a href="{{ route('courses.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700 transition-colors flex items-center gap-1">
          View all
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @forelse($featuredCourses as $course)
            @php
                // Dynamic Badge Colors (Just like your Admin dashboard!)
                $providerColor = match(strtolower($course->provider)) {
                    'youtube' => 'bg-red-500',
                    'coursera' => 'bg-blue-600',
                    'udemy' => 'bg-orange-500',
                    default => 'bg-slate-800'
                };

                $diffColor = match(strtolower($course->difficulty)) {
                    'beginner' => 'text-indigo-700 bg-indigo-50',
                    'intermediate' => 'text-amber-700 bg-amber-50',
                    'advanced' => 'text-rose-700 bg-rose-50',
                    default => 'text-slate-700 bg-slate-50'
                };

                // Format Time
                $hours = floor($course->duration / 60);
                $durationStr = $hours > 0 ? $hours . ' hours' : $course->duration . ' mins';
            @endphp

            <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group flex flex-col">
              <a href="{{ route('courses.show', $course->slug) }}" class="relative block">
                <div class="aspect-video bg-slate-200 flex items-center justify-center overflow-hidden">
                  @if($course->thumbnail)
                    <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                  @else
                    <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  @endif
                </div>
                <span class="absolute top-2 left-2 {{ $providerColor }} text-white text-xs font-bold px-2 py-0.5 rounded-md">
                    {{ $course->provider }}
                </span>
              </a>
              
              <div class="p-4 flex flex-col flex-1">
                <h3 class="font-semibold text-slate-900 text-sm line-clamp-2 mb-3 hover:text-indigo-600 transition-colors">
                    <a href="{{ route('courses.show', $course->slug) }}">{{ $course->title }}</a>
                </h3>
                
                <div class="mt-auto">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-2">
                    <span class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $durationStr }}
                    </span>
                    <span class="flex items-center gap-1 {{ $diffColor }} font-medium px-2 py-0.5 rounded-md">
                        {{ $course->difficulty }}
                    </span>
                    </div>
                    <div class="flex items-center justify-between text-xs text-slate-500">
                    <span class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                        {{ $course->language->name ?? 'English' }}
                    </span>
                    </div>
                </div>
              </div>
            </div>
        @empty
            <p class="text-sm text-slate-500 col-span-full">No featured courses available yet.</p>
        @endforelse
      </div>
    </div>
  </div>
</section>

@endsection