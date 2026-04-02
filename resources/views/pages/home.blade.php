@extends('layouts.public')
@section('content')
<body class="bg-slate-50 text-slate-900 antialiased">




<!-- ============================================================
     VIEW 1: HOME PAGE
     ============================================================ -->
<section id="view2" >
  

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

      <!-- Sidebar Filters -->
      <aside class="md:col-span-1">
        <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-5 sticky top-20">
          <h2 class="text-base font-bold text-slate-900 mb-5 flex items-center gap-2">
            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
            Filters
          </h2>

          <!-- Category -->
          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Category</h3>
            <div class="flex flex-col gap-2">
              @foreach ($categories as $item)
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                  <span class="text-sm text-slate-700">{{ $item->name }}</span>
                </label>
              @endforeach
              
              
            </div>
          </div>

          <div class="border-t border-slate-100 mb-6"></div>

          <!-- Language -->
          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Lecturing Language</h3>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="radio" name="language" checked class="w-4 h-4 border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Any Language</span>
              </label>
              @foreach ($languages as $item)
                <label class="flex items-center gap-2.5 cursor-pointer">
                  <input type="radio" name="language" class="w-4 h-4 border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                  <span class="text-sm text-slate-700">{{ $item->name }}</span>
                </label>
              @endforeach
            </div>
          </div>

          <div class="border-t border-slate-100 mb-6"></div>

          <!-- Difficulty -->
          <div>
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Difficulty</h3>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Beginner</span>
              </label>
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" checked class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Intermediate</span>
              </label>
              <label class="flex items-center gap-2.5 cursor-pointer">
                <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-sm text-slate-700">Advanced</span>
              </label>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-slate-100">
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 transition-colors text-white text-sm font-semibold py-2.5 rounded-lg">Apply Filters</button>
          </div>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="md:col-span-3">
        <div class="flex items-center justify-between mb-6">
          <div>
            <p class="text-sm text-slate-500">Showing results for</p>
            <h2 class="text-xl font-bold text-slate-900">"JavaScript"</h2>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sm text-slate-500">Sort by:</span>
            <select class="text-sm border border-slate-200 rounded-lg px-3 py-2 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
              <option>Most Popular</option>
              <option>Newest</option>
              <option>Duration</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
          <!-- Repeat 6 course cards (reuse same structure) -->
          @foreach ($courses as $item)
          <!-- Card A -->
            <x-course-card :course="$item" />
          @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10">
          {{ $courses->links() }}
        </div>
      </main>
    </div>
  </div>
</section>
</body>
@endsection