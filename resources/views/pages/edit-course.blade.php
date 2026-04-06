


@extends('layouts.public')
@section('content')

<section id="view6">
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
        <a href="{{ route('admin.courses') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 text-white">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          Manage Courses
        </a>
        <a href="{{ route('admin.users') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          Manage Users
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          Categories
        </a>
        <div class="border-t border-slate-700/50 pt-3 mt-3">
          <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Site
          </a>
        </div>
      </nav>
    </aside>

    <main class="flex-1 bg-slate-50 p-8 overflow-auto">
      <div class="flex items-center justify-between mb-8">
        <div>
          <h1 class="text-2xl font-bold text-slate-900">Edit Course: {{ $course->title }}</h1>
          <p class="text-sm text-slate-500 mt-0.5">Update the details of this course.</p>
        </div>
        <a href="{{ route('admin.courses') }}" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-lg">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
          Cancel
        </a>
      </div>

      <form method="POST" action="{{ route('courses.update', $course->id) }}" class="bg-white border border-slate-200 rounded-xl shadow-sm p-7">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="title" class="block text-xs font-semibold text-slate-700 mb-1.5">Course Title <span class="text-rose-500">*</span></label>
            <input id="title" name="title" type="text" value="{{ old('title', $course->title) }}" placeholder="e.g. The Complete JavaScript Course 2024" class="w-full px-3.5 py-2.5 text-sm border @error('title') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('title') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="slug" class="block text-xs font-semibold text-slate-700 mb-1.5">Course Slug <span class="text-rose-500">*</span></label>
            <input id="slug" name="slug" type="text" value="{{ old('slug', $course->slug) }}" placeholder="e.g. complete-javascript-course-2024" class="w-full px-3.5 py-2.5 text-sm border @error('slug') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('slug') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="url" class="block text-xs font-semibold text-slate-700 mb-1.5">Course URL <span class="text-rose-500">*</span></label>
            <input id="url" name="url" type="url" value="{{ old('url', $course->url) }}" placeholder="https://youtube.com/watch?v=..." class="w-full px-3.5 py-2.5 text-sm border @error('url') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('url') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="provider" class="block text-xs font-semibold text-slate-700 mb-1.5">Provider <span class="text-rose-500">*</span></label>
            <select id="provider" name="provider" class="w-full px-3.5 py-2.5 text-sm border @error('provider') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled>Select a provider</option>
              <option value="YouTube" {{ old('provider', $course->provider) == 'YouTube' ? 'selected' : '' }}>YouTube</option>
              <option value="Coursera" {{ old('provider', $course->provider) == 'Coursera' ? 'selected' : '' }}>Coursera</option>
              <option value="Udemy" {{ old('provider', $course->provider) == 'Udemy' ? 'selected' : '' }}>Udemy</option>
              <option value="FreeCodeCamp" {{ old('provider', $course->provider) == 'FreeCodeCamp' ? 'selected' : '' }}>FreeCodeCamp</option>
            </select>
            @error('provider') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="language_id" class="block text-xs font-semibold text-slate-700 mb-1.5">Lecturing Language <span class="text-rose-500">*</span></label>
            <select id="language_id" name="language_id" class="w-full px-3.5 py-2.5 text-sm border @error('language_id') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled>Select language</option>
              @foreach($languages as $item)
                <option value="{{ $item->id }}" {{ old('language_id', $course->language_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
              @endforeach
            </select>
            @error('language_id') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="difficulty" class="block text-xs font-semibold text-slate-700 mb-1.5">Difficulty <span class="text-rose-500">*</span></label>
            <select id="difficulty" name="difficulty" class="w-full px-3.5 py-2.5 text-sm border @error('difficulty') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled>Select difficulty</option>
              <option value="Beginner" {{ old('difficulty', $course->difficulty) == 'Beginner' ? 'selected' : '' }}>Beginner</option>
              <option value="Intermediate" {{ old('difficulty', $course->difficulty) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
              <option value="Advanced" {{ old('difficulty', $course->difficulty) == 'Advanced' ? 'selected' : '' }}>Advanced</option>
            </select>
            @error('difficulty') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="duration" class="block text-xs font-semibold text-slate-700 mb-1.5">Duration (in minutes)</label>
            <input id="duration" name="duration" type="number" min="0" value="{{ old('duration', $course->duration) }}" placeholder="e.g. 4140" class="w-full px-3.5 py-2.5 text-sm border @error('duration') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('duration') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="thumbnail" class="block text-xs font-semibold text-slate-700 mb-1.5">Thumbnail Image URL</label>
            <input id="thumbnail" name="thumbnail" type="url" value="{{ old('thumbnail', $course->thumbnail) }}" placeholder="https://img.youtube.com/vi/.../maxresdefault.jpg" class="w-full px-3.5 py-2.5 text-sm border @error('thumbnail') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('thumbnail') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>
        <div class="mb-5 border-t border-slate-100 pt-5">
          <label class="block text-xs font-semibold text-slate-700 mb-3">Categories <span class="text-rose-500">*</span></label>
          
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            @foreach($categories as $category)
              <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                  class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500"
                  
                  {{-- 
                    This complex line checks if the box should be ticked. 
                    It looks at the old() session data first (if validation failed).
                    If no old data exists, it checks if the course already has this category saved in the database.
                  --}}
                  {{ in_array($category->id, old('categories', isset($course) ? $course->categories->pluck('id')->toArray() : [])) ? 'checked' : '' }}
                />
                <span class="text-sm text-slate-700">{{ $category->name }}</span>
              </label>
            @endforeach
          </div>
          @error('categories') <p class="mt-2 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-5">
          <label for="description" class="block text-xs font-semibold text-slate-700 mb-1.5">Description</label>
          <textarea id="description" name="description" rows="4" placeholder="Write a brief description of the course content, goals, and what students will learn…" class="w-full px-3.5 py-2.5 text-sm border @error('description') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none">{{ old('description', $course->description) }}</textarea>
          @error('description') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div class="border-t border-slate-100 pt-5 mb-7">
          <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Visibility Options</p>
          <div class="flex items-center gap-8">
            <label class="flex items-center gap-3 cursor-pointer select-none">
              <div class="relative">
                <input type="hidden" name="is_featured" value="0">
                <input type="checkbox" name="is_featured" value="1" id="is_featured" class="sr-only peer" {{ old('is_featured', $course->is_featured) ? 'checked' : '' }} />
                <div class="w-10 h-5 bg-slate-200 rounded-full peer peer-checked:bg-indigo-600 transition-colors"></div>
                <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-5"></div>
              </div>
              <div>
                <p class="text-sm font-semibold text-slate-800">Is Featured</p>
                <p class="text-xs text-slate-400">Show on the homepage</p>
              </div>
            </label>
            
            <label class="flex items-center gap-3 cursor-pointer select-none">
              <div class="relative">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" value="1" id="is_published" class="sr-only peer" {{ old('is_published', $course->is_published) ? 'checked' : '' }} />
                <div class="w-10 h-5 bg-slate-200 rounded-full peer peer-checked:bg-indigo-600 transition-colors"></div>
                <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-5"></div>
              </div>
              <div>
                <p class="text-sm font-semibold text-slate-800">Is Published</p>
                <p class="text-xs text-slate-400">Visible to all users</p>
              </div>
            </label>
          </div>
        </div>

        <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-5">
          <button type="submit" name="action" value="draft" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-5 py-2.5 rounded-lg">
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
            Save as Draft
          </button>
          <button type="submit" name="action" value="update" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-6 py-2.5 rounded-lg">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
            Update Course
          </button>
        </div>
      </form>
    </main>
  </div>
</section>
@endsection