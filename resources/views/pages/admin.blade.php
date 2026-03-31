@extends('layouts.public')
@section('content')

<section id="view5" >


  <div class="flex min-h-screen">

    <!-- Admin Sidebar -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col shrink-0">
      <!-- Logo -->
      <div class="flex items-center gap-2.5 px-5 py-5 border-b border-slate-700/50">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center shrink-0">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
        </div>
        <span class="text-sm font-bold text-white">FreeCourses Admin</span>
      </div>
      <!-- Nav -->
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
        <div class=" border-t border-slate-700/50 pt-3 mt-3">
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
          <h1 class="text-2xl font-bold text-slate-900">Manage Courses</h1>
          <p class="text-sm text-slate-500 mt-0.5">128 courses total</p>
        </div>
        <a href="#view6" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold px-4 py-2.5 rounded-lg">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
          Add New Course
        </a>
      </div>

      <!-- Search & Filter Bar -->
      <div class="flex items-center gap-3 mb-6">
        <div class="flex-1 relative">
          <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-slate-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <input type="text" placeholder="Search courses…" class="w-full pl-9 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
        </div>
        <select class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option>All Providers</option>
          <option>YouTube</option>
          <option>Coursera</option>
          <option>Udemy</option>
        </select>
        <select class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option>All Status</option>
          <option>Published</option>
          <option>Draft</option>
        </select>
      </div>

      <!-- Table -->
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

            <!-- Row 1 -->
            <tr class="hover:bg-slate-50 transition-colors">
              <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0 overflow-hidden">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate">The Complete JavaScript Course 2024</p>
                    <p class="text-xs text-slate-400 mt-0.5">69 hours · 1.2M views</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-red-50 text-red-600 px-2 py-1 rounded-md">YouTube</span>
                <p class="text-xs text-slate-400 mt-1">English</p>
              </td>
              <td class="px-4 py-4"><span class="text-xs font-medium text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-full">Beginner</span></td>
              <td class="px-4 py-4"><span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Published</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-end gap-1">
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors" title="Edit">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                  </button>
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors" title="Delete">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                  </button>
                </div>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr class="hover:bg-slate-50 transition-colors">
              <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate">Machine Learning Specialization – Andrew Ng</p>
                    <p class="text-xs text-slate-400 mt-0.5">96 hours · 4.5M views</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-blue-50 text-blue-600 px-2 py-1 rounded-md">Coursera</span>
                <p class="text-xs text-slate-400 mt-1">English</p>
              </td>
              <td class="px-4 py-4"><span class="text-xs font-medium text-amber-700 bg-amber-50 px-2.5 py-1 rounded-full">Intermediate</span></td>
              <td class="px-4 py-4"><span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Published</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-end gap-1">
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                </div>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr class="hover:bg-slate-50 transition-colors">
              <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate">Advanced CSS and Sass: Flexbox, Grid, Animations</p>
                    <p class="text-xs text-slate-400 mt-0.5">28 hours · 650K views</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-orange-50 text-orange-600 px-2 py-1 rounded-md">Udemy</span>
                <p class="text-xs text-slate-400 mt-1">English</p>
              </td>
              <td class="px-4 py-4"><span class="text-xs font-medium text-rose-700 bg-rose-50 px-2.5 py-1 rounded-full">Advanced</span></td>
              <td class="px-4 py-4"><span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-slate-100 text-slate-500 px-2.5 py-1 rounded-full"><span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>Draft</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-end gap-1">
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                </div>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr class="hover:bg-slate-50 transition-colors">
              <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate">CS50: Introduction to Computer Science</p>
                    <p class="text-xs text-slate-400 mt-0.5">24 hours · 3.8M views</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-red-50 text-red-600 px-2 py-1 rounded-md">YouTube</span>
                <p class="text-xs text-slate-400 mt-1">English</p>
              </td>
              <td class="px-4 py-4"><span class="text-xs font-medium text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-full">Beginner</span></td>
              <td class="px-4 py-4"><span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Published</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-end gap-1">
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                </div>
              </td>
            </tr>

            <!-- Row 5 -->
            <tr class="hover:bg-slate-50 transition-colors">
              <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
              <td class="px-4 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-14 h-10 bg-slate-200 rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <p class="font-semibold text-slate-900 leading-snug max-w-xs truncate">Node.js, Express & MongoDB Bootcamp</p>
                    <p class="text-xs text-slate-400 mt-0.5">42 hours · 892K views</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-blue-50 text-blue-600 px-2 py-1 rounded-md">Coursera</span>
                <p class="text-xs text-slate-400 mt-1">Arabic</p>
              </td>
              <td class="px-4 py-4"><span class="text-xs font-medium text-amber-700 bg-amber-50 px-2.5 py-1 rounded-full">Intermediate</span></td>
              <td class="px-4 py-4"><span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-slate-100 text-slate-500 px-2.5 py-1 rounded-full"><span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>Draft</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-end gap-1">
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                  <button class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-400 hover:bg-rose-50 hover:text-rose-600 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                </div>
              </td>
            </tr>

          </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex items-center justify-between px-5 py-4 border-t border-slate-200 bg-slate-50/50">
          <p class="text-xs text-slate-500">Showing <span class="font-semibold text-slate-700">1–5</span> of <span class="font-semibold text-slate-700">128</span> courses</p>
          <div class="flex items-center gap-1">
            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-400 hover:border-indigo-300 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-600 text-white text-xs font-semibold">1</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 text-xs font-medium hover:border-indigo-300 transition-colors">2</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 text-xs font-medium hover:border-indigo-300 transition-colors">3</button>
            <span class="w-8 h-8 flex items-center justify-center text-slate-400 text-xs">…</span>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 text-xs font-medium hover:border-indigo-300 transition-colors">26</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-400 hover:border-indigo-300 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
</section>


@endsection