@extends('layouts.public')
@section('content')

<section id="roadmap-create">
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
          <h1 class="text-2xl font-bold text-slate-900">Create New Roadmap</h1>
          <p class="text-sm text-slate-500 mt-0.5">Design a new learning path and assign courses to it.</p>
        </div>
        <a href="{{ route('roadmaps.index') }}" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-lg">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
          Cancel
        </a>
      </div>

      <form method="POST" action="{{ route('roadmaps.store') }}" class="bg-white border border-slate-200 rounded-xl shadow-sm p-7">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="title" class="block text-xs font-semibold text-slate-700 mb-1.5">Roadmap Title <span class="text-rose-500">*</span></label>
            <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="e.g. Full-Stack Web Development" class="w-full px-3.5 py-2.5 text-sm border @error('title') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('title') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="slug" class="block text-xs font-semibold text-slate-700 mb-1.5">Slug <span class="text-rose-500">*</span></label>
            <input id="slug" name="slug" type="text" value="{{ old('slug') }}" placeholder="e.g. full-stack-web-development" class="w-full px-3.5 py-2.5 text-sm border @error('slug') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('slug') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="thumbnail" class="block text-xs font-semibold text-slate-700 mb-1.5">Cover Image URL</label>
            <input id="thumbnail" name="thumbnail" type="url" value="{{ old('thumbnail') }}" placeholder="https://example.com/image.jpg" class="w-full px-3.5 py-2.5 text-sm border @error('thumbnail') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('thumbnail') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="url" class="block text-xs font-semibold text-slate-700 mb-1.5">External Reference URL (Optional)</label>
            <input id="url" name="url" type="url" value="{{ old('url') }}" placeholder="e.g. https://roadmap.sh/frontend" class="w-full px-3.5 py-2.5 text-sm border @error('url') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
            @error('url') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="mb-7">
          <label for="description" class="block text-xs font-semibold text-slate-700 mb-1.5">Description</label>
          <textarea id="description" name="description" rows="3" placeholder="Briefly explain what students will achieve by following this path..." class="w-full px-3.5 py-2.5 text-sm border @error('description') border-rose-500 @else border-slate-200 @enderror rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none">{{ old('description') }}</textarea>
          @error('description') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div class="border-t border-slate-100 pt-5 mb-8">
          <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Settings</p>
          <label class="flex items-center gap-3 cursor-pointer select-none">
            <div class="relative">
              <input type="hidden" name="is_published" value="0">
              <input type="checkbox" name="is_published" value="1" id="is_published" class="sr-only peer" {{ old('is_published') ? 'checked' : '' }} />
              <div class="w-10 h-5 bg-slate-200 rounded-full peer peer-checked:bg-indigo-600 transition-colors"></div>
              <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-5"></div>
            </div>
            <div>
              <p class="text-sm font-semibold text-slate-800">Publish Roadmap</p>
              <p class="text-xs text-slate-400">Make this path visible to students immediately</p>
            </div>
          </label>
        </div>

        <div class="border-t border-slate-100 pt-6 mb-8">
            <h3 class="text-base font-bold text-slate-900 mb-1">Assign Courses & Timeline Order</h3>
            <p class="text-sm text-slate-500 mb-4">Select the courses that belong to this roadmap and define the order students should take them in.</p>
            
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-2 max-h-[400px] overflow-y-auto">
                <table class="w-full text-sm text-left">
                    <thead class="sticky top-0 bg-slate-50 shadow-sm z-10">
                        <tr class="text-slate-500">
                            <th class="px-4 py-3 font-semibold w-10 text-center">Include</th>
                            <th class="px-4 py-3 font-semibold">Course Title</th>
                            <th class="px-4 py-3 font-semibold w-32 text-center">Step Order</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach($courses as $course)
                            @php
                                // If validation fails, remember if the admin checked this box
                                $isAttached = is_array(old('courses')) && in_array($course->id, old('courses'));
                            @endphp
                            <tr class="hover:bg-white transition-colors {{ $isAttached ? 'bg-indigo-50/30' : '' }}">
                                <td class="px-4 py-3 text-center">
                                    <input type="checkbox" 
                                           name="courses[]" 
                                           value="{{ $course->id }}" 
                                           {{ $isAttached ? 'checked' : '' }}
                                           class="w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500 cursor-pointer">
                                </td>
                                <td class="px-4 py-3">
                                    <p class="font-medium text-slate-800">{{ $course->title }}</p>
                                    <p class="text-xs text-slate-500">{{ $course->provider }}</p>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <input type="number" 
                                           name="course_orders[{{ $course->id }}]" 
                                           value="{{ old('course_orders.' . $course->id, 0) }}"
                                           min="0"
                                           class="w-20 px-3 py-1.5 text-sm text-center border border-slate-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 shadow-sm">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($courses->isEmpty())
                    <p class="text-center text-slate-500 py-6 text-sm">No courses available. Please create a course first.</p>
                @endif
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-5">
          <button type="submit" name="action" value="draft" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-5 py-2.5 rounded-lg">
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
            Save as Draft
          </button>
          <button type="submit" name="action" value="create" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-6 py-2.5 rounded-lg">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Create Roadmap
          </button>
        </div>
      </form>
    </main>
  </div>
</section>

@endsection