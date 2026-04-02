@extends('layouts.public')

@section('content')
@php
    // Dynamic styling for providers
    $providerColor = match(strtolower($course->provider)) {
        'youtube' => 'bg-red-500',
        'coursera' => 'bg-blue-600',
        'udemy' => 'bg-orange-500',
        default => 'bg-slate-800'
    };

    // Calculate hours and minutes
    $hours = floor($course->duration / 60);
    $minutes = $course->duration % 60;
    $durationString = ($hours > 0 ? $hours . ' hours ' : '') . ($minutes > 0 ? $minutes . ' mins' : '');
    
    // Get comma-separated string of categories
    $categoriesString = $course->categories->pluck('name')->join(', ');
@endphp

<body class="bg-slate-50 text-slate-900 antialiased">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <nav class="flex items-center gap-1.5 text-xs text-slate-500 mb-6">
      <a href="/" class="hover:text-indigo-600 transition-colors">Home</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <a href="/courses" class="hover:text-indigo-600 transition-colors">Courses</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <span class="text-slate-700 font-medium">{{ $course->title }}</span>
    </nav>

    <a href="{{ $course->url }}" target="_blank" rel="noopener noreferrer" class="aspect-video bg-slate-900 rounded-xl overflow-hidden flex items-center justify-center mb-8 relative shadow-lg hover:opacity-95 transition-opacity group">
      <div class="flex flex-col items-center gap-3 text-slate-500 group-hover:text-white transition-colors">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <span class="text-sm">Click to view course on {{ $course->provider }}</span>
      </div>
      <span class="absolute top-4 left-4 {{ $providerColor }} text-white text-xs font-bold px-2.5 py-1 rounded-md">
        {{ $course->provider }}
      </span>
    </a>

    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
      <div>
        <h1 class="text-2xl font-bold text-slate-900 leading-snug mb-2">{{ $course->title }}</h1>
        <p class="text-sm text-slate-500">
            Provider: <span class="font-semibold text-indigo-600">{{ $course->provider }}</span> 
            @if($categoriesString)
                · {{ $categoriesString }}
            @endif
        </p>
      </div>
      <div class="flex items-center gap-3 shrink-0">
        <button class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
          Save to Dashboard
        </button>
        <button class="flex items-center gap-2 border border-slate-200 bg-white hover:border-indigo-300 transition-colors text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-lg whitespace-nowrap">
          <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Mark as In-Progress
        </button>
      </div>
    </div>

    <div class="flex flex-wrap gap-0 border border-slate-200 rounded-xl overflow-hidden bg-white shadow-sm mb-8">
      <div class="flex items-center gap-3 px-5 py-4 border-r border-slate-200 flex-1 min-w-[140px]">
        <div class="w-9 h-9 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-4.5 h-4.5 text-red-500 w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
        </div>
        <div>
          <p class="text-xs text-slate-500 font-medium">Provider</p>
          <p class="text-sm font-semibold text-slate-800">{{ $course->provider }}</p>
        </div>
      </div>
      <div class="flex items-center gap-3 px-5 py-4 border-r border-slate-200 flex-1 min-w-[140px]">
        <div class="w-9 h-9 bg-indigo-50 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
          <p class="text-xs text-slate-500 font-medium">Duration</p>
          <p class="text-sm font-semibold text-slate-800">{{ $durationString ?: 'Self-paced' }}</p>
        </div>
      </div>
      <div class="flex items-center gap-3 px-5 py-4 border-r border-slate-200 flex-1 min-w-[140px]">
        <div class="w-9 h-9 bg-sky-50 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
        </div>
        <div>
          <p class="text-xs text-slate-500 font-medium">Language</p>
          <p class="text-sm font-semibold text-slate-800">{{ $course->language->name ?? 'Unknown' }}</p>
        </div>
      </div>
      <div class="flex items-center gap-3 px-5 py-4 flex-1 min-w-[140px]">
        <div class="w-9 h-9 bg-emerald-50 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
        </div>
        <div>
          <p class="text-xs text-slate-500 font-medium">Difficulty</p>
          <p class="text-sm font-semibold text-slate-800">{{ $course->difficulty }}</p>
        </div>
      </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 mb-8">
      <h2 class="text-base font-bold text-slate-900 mb-3">About this Course</h2>
      <div class="text-sm text-slate-600 leading-relaxed whitespace-pre-wrap">{{ $course->description }}</div>
    </div>

    <div>
      <h2 class="text-base font-bold text-slate-900 mb-5">Student Reviews ({{ $course->reviews->count() }})</h2>
      <div class="flex flex-col gap-4">

        @forelse ($course->reviews as $review)
            @php
                // Generate User Initials (e.g., "John Doe" -> "JD")
                $words = explode(' ', $review->user->name ?? 'Guest User');
                $initials = strtoupper(substr($words[0], 0, 1) . (isset($words[1]) ? substr($words[1], 0, 1) : ''));
            @endphp
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center font-bold text-indigo-700 text-sm shrink-0">
                    {{ $initials }}
                </div>
                <div class="flex-1">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-semibold text-slate-900">{{ $review->user->name ?? 'Unknown User' }}</span>
                    <span class="text-xs text-slate-400">{{ $review->created_at->diffForHumans() }}</span>
                  </div>
                  
                  <div class="flex items-center gap-0.5 mb-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-amber-400' : 'text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                  </div>
                  
                  <p class="text-sm text-slate-600 leading-relaxed">{{ $review->comment }}</p>
                </div>
              </div>
            </div>
        @empty
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-8 text-center">
                <p class="text-slate-500 text-sm">No reviews yet. Be the first to review this course!</p>
            </div>
        @endforelse

      </div>
    </div>
  </div>
</body>
@endsection