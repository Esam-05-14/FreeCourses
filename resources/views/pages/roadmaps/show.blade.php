@extends('layouts.public')

@section('content')
<div class="bg-slate-50 min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4">{{ $roadmap->title }}</h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">{{ $roadmap->description }}</p>
        </div>

        <div class="relative border-l-2 border-indigo-200 ml-4 md:ml-0 md:pl-0">
            
            @forelse($roadmap->courses as $index => $course)
                <div class="mb-10 relative pl-8 md:pl-0 md:flex md:items-center md:justify-between group">
                    
                    <div class="absolute left-[-9px] md:left-1/2 md:-ml-4 top-0 w-8 h-8 rounded-full bg-indigo-600 border-4 border-slate-50 text-white flex items-center justify-center text-xs font-bold shadow-sm z-10">
                        {{ $index + 1 }}
                    </div>

                    <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow md:w-[calc(50%-2.5rem)] {{ $index % 2 == 0 ? 'md:mr-auto' : 'md:ml-auto' }}">
                        <div class="flex items-start gap-4">
                            <div class="w-24 h-16 shrink-0 bg-slate-200 rounded-lg overflow-hidden">
                                @if($course->thumbnail)
                                    <img src="{{ $course->thumbnail }}" class="w-full h-full object-cover" alt="thumbnail">
                                @endif
                            </div>
                            
                            <div>
                                <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider mb-1 block">Step {{ $index + 1 }}</span>
                                <h3 class="font-bold text-slate-900 leading-tight mb-2">
                                    <a href="{{ route('courses.show', $course) }}" class="hover:text-indigo-600 transition-colors">
                                        {{ $course->title }}
                                    </a>
                                </h3>
                                <div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                                    <span class="bg-slate-100 px-2 py-1 rounded">{{ $course->difficulty }}</span>
                                    <span>{{ $course->provider }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <div class="text-center p-8 text-slate-500">
                    No courses have been added to this roadmap yet.
                </div>
            @endforelse

        </div>
    </div>
</div>
@endsection