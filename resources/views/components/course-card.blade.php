@php
    // Dynamic styling for providers
    $providerColor = match(strtolower($course->provider)) {
        'youtube' => 'bg-red-500',
        'coursera' => 'bg-blue-600',
        'udemy' => 'bg-orange-500',
        default => 'bg-slate-800'
    };

    // Dynamic styling for difficulty badges
    $diffColor = match(strtolower($course->difficulty)) {
        'beginner' => 'bg-green-50 text-green-700',
        'intermediate' => 'bg-yellow-50 text-yellow-700',
        'advanced' => 'bg-red-50 text-red-700',
        default => 'bg-indigo-50 text-indigo-700'
    };

    // Calculate hours and minutes
    $hours = floor($course->duration / 60);
    $minutes = $course->duration % 60;
    
@endphp

<div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col h-full">
    
    <a href="{{route('courses.show', $course->id)}}" class="relative block aspect-video bg-slate-200 group">
        @if($course->thumbnail)
            <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
        @else
            <div class="w-full h-full flex items-center justify-center">
                <svg class="w-12 h-12 text-slate-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        @endif

        <span class="absolute top-2 left-2 {{ $providerColor }} text-white text-xs font-bold px-2 py-0.5 rounded-md">
            {{ $course->provider }}
        </span>

        <button class="absolute top-2 right-2 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-sm hover:bg-white transition-colors">
            <svg class="w-4 h-4 text-slate-400 hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </button>
    </a>

    <div class="p-4 flex flex-col flex-grow">
        <a href="{{route('courses.show', $course->id)}}" class="hover:text-indigo-600 transition-colors">
            <h3 class="font-semibold text-slate-900 text-sm line-clamp-2 mb-3" title="{{ $course->title }}">
                {{ $course->title }}
            </h3>
        </a>

        <div class="flex-grow"></div>

        <div class="flex items-center justify-between text-xs text-slate-500 mb-2">
            <span class="flex items-center gap-1" title="{{ $course->duration }} minutes total">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ $hours > 0 ? $hours . 'h ' : '' }}{{ $minutes > 0 ? $minutes . 'm' : '' }}
            </span>
            <span class="{{ $diffColor }} font-medium px-2 py-0.5 rounded-md">
                {{ $course->difficulty }}
            </span>
        </div>

        <div class="flex items-center justify-between text-xs text-slate-500">
            <span class="flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                {{ $course->language->name ?? 'Unknown' }}
            </span>
            <span class="flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                {{ $course->view_count}} views
            </span>
        </div>
    </div>
</div>