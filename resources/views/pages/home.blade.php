{{-- @extends('layouts.public')
@section('content')
<body class="bg-slate-50 text-slate-900 antialiased">




<!-- ============================================================
     VIEW 1: HOME PAGE
     ============================================================ -->
<section id="view2" >
  

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

      <!-- Sidebar Filters -->
      <aside class="md:col-span-1">
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5 sticky top-20">
          <h2 class="text-base font-bold text-slate-900 mb-5 flex items-center gap-2">
            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
            Filters
          </h2>

          <!-- Category -->
          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Category</h3>
            <div class="flex flex-col gap-2">
              @foreach ($categories as $item)
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                  <span class="text-sm text-slate-700">{{ $item->name }}</span>
                </label>
              @endforeach
              
              
            </div>
          </div>

          <div class="border-t border-slate-100 mb-6"></div>

          <!-- Language -->
          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Lecturing Language</h3>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="radio" name="language" checked class="w-4 h-4 border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Any Language</span>
              </label>
              @foreach ($languages as $item)
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input type="radio" name="language" class="w-4 h-4 border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                  <span class="text-sm text-slate-700">{{ $item->name }}</span>
                </label>
              @endforeach
            </div>
          </div>

          <div class="border-t border-slate-100 mb-6"></div>

          <!-- Difficulty -->
          <div>
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Difficulty</h3>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Beginner</span>
              </label>
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Intermediate</span>
              </label>
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Advanced</span>
              </label>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-slate-100">
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">Apply Filters</button>
          </div>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="md:col-span-3">
        <div class="flex items-center justify-between mb-6">
          <div>
            <p class="text-sm text-slate-500">Showing results for</p>
            <h2 class="text-xl font-bold text-slate-900">"JavaScript"</h2>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sm text-slate-500">Sort by:</span>
            <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
              <option>Most Popular</option>
              <option>Newest</option>
              <option>Duration</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
          <!-- Repeat 6 course cards (reuse same structure) -->
          @foreach ($courses as $item)
          <!-- Card A -->
            <x-course-card :course="$item" />
          @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10">
          {{ $courses->links() }}
        </div>
      </main>
    </div>
  </div>
</section>
</body>
@endsection --}}

@extends('layouts.public')
@section('content')

<div class="bg-slate-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900">Browse Courses</h1>
            <p class="text-slate-500 mt-2">Find exactly what you need to learn next.</p>
        </div>

        <form action="{{ route('courses.index') }}" method="GET" class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm mb-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                
                <div class="md:col-span-4 lg:col-span-1">
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="React, Python, etc..." class="w-full pl-9 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 focus:ring-2 focus:ring-indigo-500 outline-none" />
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Category</label>
                    <select name="category" class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none bg-white">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Provider</label>
                    <select name="provider" class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none bg-white">
                        <option value="">All Providers</option>
                        <option value="YouTube" {{ request('provider') == 'YouTube' ? 'selected' : '' }}>YouTube</option>
                        <option value="Coursera" {{ request('provider') == 'Coursera' ? 'selected' : '' }}>Coursera</option>
                        <option value="Udemy" {{ request('provider') == 'Udemy' ? 'selected' : '' }}>Udemy</option>
                        <option value="FreeCodeCamp" {{ request('provider') == 'FreeCodeCamp' ? 'selected' : '' }}>FreeCodeCamp</option>
                    </select>
                </div>

                <div class="flex items-end gap-3">
                    <div class="flex-1">
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Difficulty</label>
                        <select name="difficulty" class="w-full px-3 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none bg-white">
                            <option value="">Any Level</option>
                            <option value="Beginner" {{ request('difficulty') == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                            <option value="Intermediate" {{ request('difficulty') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                            <option value="Advanced" {{ request('difficulty') == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm h-[42px]">
                        Filter
                    </button>
                    @if(request()->anyFilled(['search', 'category', 'provider', 'difficulty']))
                        <a href="{{ route('courses.index') }}" class="text-slate-500 hover:text-rose-600 text-sm font-medium px-2 py-2.5 transition-colors">
                            Clear
                        </a>
                    @endif
                </div>
            </div>
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($courses as $course)
                <x-course-card :course="$course" />
            @empty
                <div class="col-span-full bg-white border border-slate-200 rounded-xl p-12 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1">No courses found</h3>
                    <p class="text-slate-500 mb-5">Try adjusting your filters or search terms.</p>
                    <a href="{{ route('courses.index') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">Clear all filters</a>
                </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $courses->links() }}
        </div>

    </div>
</div>
@endsection