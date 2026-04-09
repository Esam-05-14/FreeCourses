@extends('layouts.public')
@section('content')

<section id="admin-dashboard">
  <div class="flex min-h-screen bg-slate-50">

    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col shrink-0">
      <div class="flex items-center gap-2.5 px-5 py-5 border-b border-slate-700/50">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" /></svg>
        </div>
        <span class="text-sm font-bold text-white">FreeCourses Admin</span>
      </div>
      <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 text-white">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
          Overview
        </a>
        <a href="{{ route('admin.courses') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          Manage Courses
        </a>
        <a href="{{ route('admin.roadmaps') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
          Manage Roadmaps
        </a>
      </nav>
    </aside>

    <main class="flex-1 p-8 overflow-auto">
      
      <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900">Dashboard Overview</h1>
        <p class="text-sm text-slate-500 mt-1">Welcome back. Here is what is happening on your platform today.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-medium text-slate-500">Total Courses</h3>
                <span class="w-8 h-8 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['total_courses'] }}</p>
            <p class="text-xs text-emerald-600 mt-2 font-medium">{{ $stats['published_courses'] }} published</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-medium text-slate-500">Learning Roadmaps</h3>
                <span class="w-8 h-8 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                </span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['total_roadmaps'] }}</p>
            <p class="text-xs text-emerald-600 mt-2 font-medium">{{ $stats['published_roadmaps'] }} active</p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-200 flex items-center justify-between">
                <h2 class="font-bold text-slate-900">Recently Added Courses</h2>
                <a href="{{ route('admin.courses') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">View All &rarr;</a>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentCourses as $course)
                    <div class="px-6 py-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div>
                            <p class="font-medium text-slate-900">{{ $course->title }}</p>
                            <p class="text-xs text-slate-500 mt-0.5">{{ $course->provider }} &bull; {{ $course->language->name ?? 'No Language' }}</p>
                        </div>
                        <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full {{ $course->is_published ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">
                            {{ $course->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                @empty
                    <div class="px-6 py-8 text-center text-slate-500 text-sm">No courses added yet.</div>
                @endforelse
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-200 flex items-center justify-between">
                <h2 class="font-bold text-slate-900">Recent Roadmaps</h2>
                <a href="{{ route('admin.roadmaps') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">View All &rarr;</a>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentRoadmaps as $roadmap)
                    <div class="px-6 py-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div>
                            <p class="font-medium text-slate-900">{{ $roadmap->title }}</p>
                            <p class="text-xs text-slate-500 mt-0.5">{{ $roadmap->courses_count }} courses attached</p>
                        </div>
                        <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full {{ $roadmap->is_published ? 'bg-indigo-100 text-indigo-700' : 'bg-slate-100 text-slate-600' }}">
                            {{ $roadmap->is_published ? 'Active' : 'Draft' }}
                        </span>
                    </div>
                @empty
                    <div class="px-6 py-8 text-center text-slate-500 text-sm">No roadmaps created yet.</div>
                @endforelse
            </div>
        </div>

      </div>
    </main>
  </div>
</section>
@endsection