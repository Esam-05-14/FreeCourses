@extends('layouts.public')
@section('content')

<section id="manage-users">
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
        <a href="{{ route('admin.courses') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          Manage Courses
        </a>
        <a href="{{ route('admin.roadmaps') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
          Manage Roadmaps
        </a>
        <a href="{{ route('admin.users') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-indigo-600 text-white">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          Manage Users
        </a>
        <div class=" border-t border-slate-700/50 pt-3 mt-3">
          <a href="/" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-400 hover:bg-slate-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Site
          </a>
        </div>
      </nav>
    </aside>

    <main class="flex-1 bg-slate-50 p-8 overflow-auto">
      
      @if(session('success'))
        <div class="mb-4 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
      @endif

      <div class="flex items-center justify-between mb-8">
        <div>
          <h1 class="text-2xl font-bold text-slate-900">Manage Users</h1>
          <p class="text-sm text-slate-500 mt-0.5">{{ $users->total() }} registered users</p>
        </div>
        </div>

      <div class="flex items-center gap-3 mb-6">
        <div class="flex-1 relative">
          <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-slate-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <input type="text" placeholder="Search by name or email…" class="w-full pl-9 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
        </div>
        <select class="text-sm border border-slate-200 rounded-lg px-3 py-2.5 bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option>All Roles</option>
          <option>Admin</option>
          <option>Student</option>
        </select>
      </div>

      <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <table class="w-full text-sm">
          <thead>
            <tr class="border-b border-slate-200 bg-slate-50">
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-5 py-3.5 w-8">
                <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" />
              </th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">User</th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Role</th>
              <th class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider px-4 py-3.5">Joined Date</th>
              <th class="text-right text-xs font-semibold text-slate-500 uppercase tracking-wider px-5 py-3.5">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">

            @forelse ($users as $user)
                <tr class="hover:bg-slate-50 transition-colors">
                  <td class="px-5 py-4"><input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600" /></td>
                  <td class="px-4 py-4">
                    <div class="flex items-center gap-3">
                      <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center shrink-0 font-bold text-sm">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                      </div>

                      <div>
                        <p class="font-semibold text-slate-900 leading-snug">
                          {{ $user->name }}
                        </p>
                        <p class="text-xs text-slate-500 mt-0.5">
                          {{ $user->email }}
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-4">
                    @if(isset($user->is_admin) && $user->is_admin)
                        <span class="inline-flex items-center gap-1 text-xs font-semibold bg-rose-50 text-rose-700 px-2.5 py-1 rounded-md">
                          Admin
                        </span>
                    @else
                        <span class="inline-flex items-center gap-1 text-xs font-semibold bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md">
                          Student
                        </span>
                    @endif
                  </td>
                  <td class="px-4 py-4 text-slate-500">
                    {{ $user->created_at->format('M d, Y') }}
                  </td>
                  
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-5 py-8 text-center text-slate-500 text-sm">
                        No users found in the database.
                    </td>
                </tr>
            @endforelse

          </tbody>
        </table>

        <div class="px-5 py-4 border-t border-slate-200 bg-slate-50/50">
           {{ $users->links() }}
        </div>
      </div>
    </main>
  </div>
</section>

@endsection