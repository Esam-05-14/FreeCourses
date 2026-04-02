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
      @foreach($roadmaps as $roadmap)
        <x-roadmp-card :roadmap="$roadmap" />
      @endforeach

      

    </div>
  </div>
</section>
</body>
@endsection