@extends('layouts.public')
@section('content')
<body class="bg-slate-50 text-slate-900 antialiased">
<section id="view4">
  <!-- Header -->
  <div class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">
      <h1 class="text-4xl font-extrabold text-slate-900 mb-3">Learning Roadmaps</h1>
      <p class="text-slate-500 text-base max-w-lg mx-auto">Follow a structured path to master your next tech stack. Each roadmap is curated from the best free courses available.</p>
    </div>
  </div>

  <!-- Roadmap Grid -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Roadmap Card: Frontend Developer -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-indigo-600 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">Frontend Developer</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Master HTML, CSS, JavaScript, and React to build modern, responsive user interfaces from scratch.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              14 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              120 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Roadmap Card: Backend Developer -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-emerald-500 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">Backend Developer</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Learn Node.js, databases, REST APIs, and authentication to build powerful server-side applications.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              12 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              95 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-emerald-600 hover:bg-emerald-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Roadmap Card: AI Engineer -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-violet-500 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-violet-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">AI Engineer</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Dive into machine learning, deep learning, and Python to build intelligent AI-powered applications.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              16 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              180 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-violet-600 hover:bg-violet-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Roadmap Card: DevOps Engineer -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-orange-500 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">DevOps Engineer</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Learn Docker, Kubernetes, CI/CD pipelines, and cloud infrastructure to ship software reliably at scale.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              10 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              75 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-orange-600 hover:bg-orange-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Roadmap Card: Data Scientist -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-sky-500 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-sky-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">Data Scientist</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Explore data analysis, visualization, and statistical modeling using Python, Pandas, and NumPy.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              11 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              88 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-sky-600 hover:bg-sky-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Roadmap Card: CS Fundamentals -->
      <div class="bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
        <div class="h-1.5 bg-rose-500 w-full"></div>
        <div class="p-6">
          <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
          </div>
          <h3 class="text-base font-bold text-slate-900 mb-1.5">CS Fundamentals</h3>
          <p class="text-sm text-slate-500 leading-relaxed mb-5">Build a solid computer science foundation: algorithms, data structures, operating systems, and networking.</p>
          <div class="flex items-center gap-4 text-xs text-slate-500 mb-5">
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              9 Courses
            </span>
            <span class="flex items-center gap-1.5 bg-slate-50 border border-slate-200 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              60 Hours
            </span>
          </div>
          <a href="#" class="flex items-center justify-center gap-2 w-full bg-rose-600 hover:bg-rose-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">
            View Path
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
</body>
@endsection