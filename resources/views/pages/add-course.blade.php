@extends('layouts.public')
@section('content')


<section id="view6" >

  <div class="flex min-h-screen">

    <!-- Admin Sidebar (same as view 5) -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col shrink-0">
      <div class="flex items-center gap-2.5 px-5 py-5 border-b border-slate-700/50">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
        </div>
        <span class="text-sm font-bold text-white">FreeCourses Admin</span>
      </div>
      <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
          Dashboard
        </a>
        <a href="#view5" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 text-white">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          Manage Courses
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          Manage Users
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          Categories
        </a>
        <div class="border-t border-slate-700/50 pt-3 mt-3">
          <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Site
          </a>
        </div>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-slate-50 p-8 overflow-auto">
      <!-- Header -->
      <div class="flex items-center justify-between mb-8">
        <div>
          <h1 class="text-2xl font-bold text-slate-900">Add New Course</h1>
          <p class="text-sm text-slate-500 mt-0.5">Fill in the details below to add a course to the platform.</p>
        </div>
        <a href="#view5" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-4 py-2.5 rounded-lg">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
          Cancel
        </a>
      </div>

      <!-- Form Card -->
      <form class="bg-white border border-slate-200 rounded-xl shadow-sm p-7">

        <!-- Row 1: Title + Slug -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="title" class="block text-xs font-semibold text-slate-700 mb-1.5">Course Title <span class="text-rose-500">*</span></label>
            <input id="title" type="text" placeholder="e.g. The Complete JavaScript Course 2024" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
          </div>
          <div>
            <label for="slug" class="block text-xs font-semibold text-slate-700 mb-1.5">Course Slug <span class="text-rose-500">*</span></label>
            <input id="slug" type="text" placeholder="e.g. complete-javascript-course-2024" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
          </div>
        </div>

        <!-- Row 2: URL + Provider -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="url" class="block text-xs font-semibold text-slate-700 mb-1.5">Course URL <span class="text-rose-500">*</span></label>
            <input id="url" type="url" placeholder="https://youtube.com/watch?v=..." class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
          </div>
          <div>
            <label for="provider" class="block text-xs font-semibold text-slate-700 mb-1.5">Provider <span class="text-rose-500">*</span></label>
            <select id="provider" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled selected>Select a provider</option>
              <option>YouTube</option>
              <option>Coursera</option>
              <option>Udemy</option>
              <option>edX</option>
              <option>MIT OpenCourseWare</option>
            </select>
          </div>
        </div>

        <!-- Row 3: Language + Difficulty -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="language" class="block text-xs font-semibold text-slate-700 mb-1.5">Lecturing Language <span class="text-rose-500">*</span></label>
            <select id="language" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled selected>Select language</option>
              <option>English</option>
              <option>Arabic</option>
              <option>Spanish</option>
              <option>French</option>
              <option>German</option>
            </select>
          </div>
          <div>
            <label for="difficulty" class="block text-xs font-semibold text-slate-700 mb-1.5">Difficulty <span class="text-rose-500">*</span></label>
            <select id="difficulty" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
              <option value="" disabled selected>Select difficulty</option>
              <option>Beginner</option>
              <option>Intermediate</option>
              <option>Advanced</option>
            </select>
          </div>
        </div>

        <!-- Row 4: Duration + Thumbnail -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
          <div>
            <label for="duration" class="block text-xs font-semibold text-slate-700 mb-1.5">Duration (in minutes)</label>
            <input id="duration" type="number" min="0" placeholder="e.g. 4140" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" />
          </div>
          <div>
            <label for="thumbnail" class="block text-xs font-semibold text-slate-700 mb-1.5">Thumbnail Image</label>
            <label for="thumbnail" class="flex items-center gap-3 w-full px-3.5 py-2.5 text-sm border border-dashed border-slate-300 rounded-lg text-slate-500 bg-slate-50 cursor-pointer hover:border-indigo-400 hover:bg-indigo-50/50 transition">
              <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
              <span>Click to upload or drag and drop</span>
              <input id="thumbnail" type="file" accept="image/*" class="hidden" />
            </label>
          </div>
        </div>

        <!-- Row 5: Description -->
        <div class="mb-5">
          <label for="description" class="block text-xs font-semibold text-slate-700 mb-1.5">Description</label>
          <textarea id="description" rows="4" placeholder="Write a brief description of the course content, goals, and what students will learn…" class="w-full px-3.5 py-2.5 text-sm border border-slate-200 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none"></textarea>
        </div>

        <!-- Row 6: Toggles -->
        <div class="border-t border-slate-100 pt-5 mb-7">
          <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Visibility Options</p>
          <div class="flex items-center gap-8">
            <label class="flex items-center gap-3 cursor-pointer select-none">
              <div class="relative">
                <input type="checkbox" id="is_featured" class="sr-only peer" />
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
                <input type="checkbox" id="is_published" class="sr-only peer" checked />
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

        <!-- Footer Buttons -->
        <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-5">
          <button type="button" class="flex items-center gap-2 border border-slate-200 bg-white hover:border-slate-300 transition-colors text-slate-700 text-sm font-semibold px-5 py-2.5 rounded-lg">
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
            Save as Draft
          </button>
          <button type="submit" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-6 py-2.5 rounded-lg">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Save Course
          </button>
        </div>
      </form>
    </main>
  </div>
</section>
@endsection