@php
    // Dynamically calculate the number of courses attached to this roadmap
    $courseCount = $roadmap->courses->count();
    
    // Sum the duration of all attached courses (in minutes), then convert to hours
    $totalMinutes = $roadmap->courses->sum('duration');
    $totalHours = floor($totalMinutes / 60);
@endphp

<div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col h-full">
    <div class="h-1.5 bg-indigo-600 w-full"></div>
    
    <div class="p-6 flex flex-col flex-grow">
        <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-4">
            @if($roadmap->icon_class)
                <i class="{{ $roadmap->icon_class }} text-indigo-600 text-xl"></i>
            @else
                <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            @endif
        </div>
        
        <h3 class="text-base font-bold text-slate-900 mb-1.5">
            {{ $roadmap->title }}
        </h3>
        
        <p class="text-sm text-slate-500 leading-relaxed mb-5 flex-grow">
            {{ Str::limit($roadmap->description, 120) }}
        </p>
        
        <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
                <svg class="w-3.5 h-3.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                {{ $courseCount }} {{ Str::plural('Course', $courseCount) }}
            </span>
            
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
                <svg class="w-3.5 h-3.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ $totalHours }} {{ Str::plural('Hour', $totalHours) }}
            </span>
        </div>
        
        <a href="/roadmaps/{{ $roadmap->slug }}" class="mt-auto flex items-center justify-center gap-2 w-full bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>