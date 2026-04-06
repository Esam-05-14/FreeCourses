<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FreeCourses</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">

<!-- ============================================================
     SHARED NAVBAR (reused across all views)
     ============================================================ -->
<nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <a href="#" class="flex items-center gap-2">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <span class="text-lg font-bold text-slate-900">FreeCourses</span>
      </a>
      <!-- Nav Links -->
      <div class="hidden md:flex items-center gap-8">
        <a href="/courses" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Courses</a>
        <a href="/roadmaps" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Roadmaps</a>
      </div>
      <!-- Auth Buttons -->
      <div class="flex items-center gap-3">
        <a href={{ route('login') }} class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors px-3 py-1.5">Login</a>
        <a href={{ route('register') }} class="text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 transition-colors px-4 py-2 rounded-lg">Sign Up</a>
      </div>
    </div>
  </div>
</nav>

@yield('content')
</html>