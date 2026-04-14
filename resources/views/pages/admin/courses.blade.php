@extends('layouts.public')
@section('content')

<section id="view5">
  <div class="flex min-h-screen">

    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col shrink-0">
      <div class="flex items-center gap-2.5 px-5 py-5 border-b border-slate-700/50">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
        </div>
        <span class="text-sm font-bold text-white">FreeCourses Admin</span>
      </div>
      <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
          Dashboard
        </a>
        <a href="{{ route('admin.roadmaps') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 text-white">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
          Manage Roadmaps
        </a>
        <a href="{{ route('admin.users') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          Manage Users
        </a>
        <div class=" border-t border-slate-700/50 pt-3 mt-3">
          <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Site
          </a>
        </div>
      </nav>
    </aside>

    <main class="flex-1 bg-slate-50 p-8 overflow-auto">
      
      @if(session('success'))
        <div class="mb-4 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
      @endif

      <div class="flex items-center justify-between mb-8">
        <div>
          <h1 class="text-2xl font-bold text-slate-900">Manage Courses</h1>
          <p class="text-sm text-slate-500 mt-0.5">{{ $courses->total() }} courses total</p>
        </div>
        <a href="{{ route('courses.create') }}" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-4 py-2.5 rounded-lg">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
          Add New Course
        </a>
      </div>

      <div class="flex items-center gap-3 mb-6">
<form action="{{route('admin.courses')}}" method="GET" class="flex items-center gap-3 flex-wrap">
    
    <div class="flex-1 relative">
      <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-slate-400">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
      </div>
      <input type="text" 
             name="search" 
             value="{{ request('search') }}" 
             placeholder="Search courses…" 
             class="w-full pl-9 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
    </div>

    <select name="provider" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
      <option value="">All Providers</option>
      <option value="YouTube" {{ request('provider') == 'YouTube' ? 'selected' : '' }}>YouTube</option>
      <option value="Coursera" {{ request('provider') == 'Coursera' ? 'selected' : '' }}>Coursera</option>
      <option value="Udemy" {{ request('provider') == 'Udemy' ? 'selected' : '' }}>Udemy</option>
    </select>

    <select name="is_published" class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
      <option value="">All Status</option>
      <option value="1" {{ request('is_published') === '1' ? 'selected' : '' }}>Published</option>
      <option value="0" {{ request('is_published') === '0' ? 'selected' : '' }}>Draft</option>
    </select>

    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm h-[42px]">
        Filter
    </button>

    @if(request()->anyFilled(['search', 'provider', 'is_published']))
        <a href="{{ route('admin.courses') }}" class="text-slate-500 hover:text-rose-600 text-sm font-medium px-2 py-2.5 transition-colors">
            Clear
        </a>
    @endif
</form>
      </div>

      <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <table class="w-full text-sm">
          <thead>
            <tr class="border-b border-slate-200 bg-slate-50">
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-5 py-3.5 w-8">
                <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" />
              </th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Course</th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Provider & Language</th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Difficulty</th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Status</th>
              <th class="text-right text-xs font-semibold text-slate-500 uppercase tracking-wider px-5 py-3.5">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">

            @forelse ($courses as $course)
                @php
                    // Dynamic Badge Colors
                    $providerColor = match(strtolower($course->provider)) {
                        'youtube' => 'bg-red-50 text-red-600',
                        'coursera' => 'bg-blue-50 text-blue-600',
                        'udemy' => 'bg-orange-50 text-orange-600',
                        default => 'bg-slate-50 text-slate-600'
                    };

                    $diffColor = match(strtolower($course->difficulty)) {
                        'beginner' => 'text-indigo-700 bg-indigo-50',
                        'intermediate' => 'text-amber-700 bg-amber-50',
                        'advanced' => 'text-rose-700 bg-rose-50',
                        default => 'text-slate-700 bg-slate-50'
                    };

                    // Format Time
                    $hours = floor($course->duration / 60);
                    $minutes = $course->duration % 60;
                    $durationStr = ($hours > 0 ? $hours . 'h ' : '') . ($minutes > 0 ? $minutes . 'm' : '');
                @endphp

                <tr class="hover:bg-slate-50 transition-colors">
                  <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
                  <td class="px-4 py-4">
                    <div class="flex items-center gap-3">
                      @if($course->thumbnail)
                        <div class="w-14 h-10 rounded-lg flex items-center justify-center shrink-0 overflow-hidden bg-slate-200">
                          <img src="{{ $course->thumbnail }}" alt="Thumbnail" class="w-full h-full object-cover">
                        </div>
                      @else
                        <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0">
                          <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                      @endif

                      <div>
                        <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate" title="{{ $course->title }}">
                          {{ $course->title }}
                        </p>
                        <p class="text-xs text-slate-400 mt-0.5">
                          {{ $durationStr ?: '0m' }} · {{ $course->view_count }} views
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-4">
                    <span class="inline-flex items-center gap-1 text-xs font-semibold px-2 py-1 rounded-md {{ $providerColor }}">
                      {{ $course->provider }}
                    </span>
                    <p class="text-xs text-slate-400 mt-1">{{ $course->language->name ?? 'Unknown' }}</p>
                  </td>
                  <td class="px-4 py-4">
                    <span class="text-xs font-medium px-2.5 py-1 rounded-full {{ $diffColor }}">
                      {{ $course->difficulty }}
                    </span>
                  </td>
                  <td class="px-4 py-4">
                    @if($course->is_published)
                      <span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Published
                      </span>
                    @else
                      <span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-slate-100 text-slate-500 px-2.5 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>Draft
                      </span>
                    @endif
                  </td>
                  <td class="px-5 py-4">
                    <div class="flex items-center justify-end gap-1">
                      <a href="{{ route('courses.edit', $course->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors" title="Edit">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                      </a>
                      
                      <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors" title="Delete">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                          </button>
                      </form>
                    </div>
                  </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-5 py-8 text-center text-slate-500 text-sm">
                        No courses found in the database.
                    </td>
                </tr>
            @endforelse

          </tbody>
        </table>

        <div class="px-5 py-4 border-t border-slate-200 bg-slate-50/50">
           {{ $courses->links() }}
        </div>
      </div>
    </main>
  </div>
</section>

@endsection