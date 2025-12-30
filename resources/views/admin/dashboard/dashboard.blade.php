@extends('admin.layout.main')

@section('content')
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li><a class="font-medium text-indigo-600 hover:underline" href="#">Home</a></li>
            <li class="font-medium text-gray-600">/ Dashboard</li>
        </ol>
    </nav>
</div>

<!-- Stats Row -->
<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 mb-8">
    <!-- Card Item -->
    <div class="rounded-sm border border-gray-200 bg-white px-7.5 py-6 shadow-sm">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-indigo-50 text-indigo-600">
             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>
        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-2xl font-bold text-black">12</h4>
                <span class="text-sm font-medium text-gray-500">Total Employees</span>
            </div>
            <span class="flex items-center gap-1 text-sm font-medium text-green-500">
                +2.5%
            </span>
        </div>
    </div>
    <!-- Card Item -->

    <!-- Card Item -->
    <div class="rounded-sm border border-gray-200 bg-white px-7.5 py-6 shadow-sm">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-blue-50 text-blue-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
        </div>
        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-2xl font-bold text-black">45</h4>
                <span class="text-sm font-medium text-gray-500">Active Projects</span>
            </div>
            <span class="flex items-center gap-1 text-sm font-medium text-green-500">
                +5.2%
            </span>
        </div>
    </div>
    <!-- Card Item -->

    <!-- Card Item -->
    <div class="rounded-sm border border-gray-200 bg-white px-7.5 py-6 shadow-sm">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-orange-50 text-orange-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        </div>
        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-2xl font-bold text-black">28</h4>
                <span class="text-sm font-medium text-gray-500">Pending Tasks</span>
            </div>
             <span class="flex items-center gap-1 text-sm font-medium text-red-500">
                -1.2%
            </span>
        </div>
    </div>
    <!-- Card Item -->

        <!-- Card Item -->
    <div class="rounded-sm border border-gray-200 bg-white px-7.5 py-6 shadow-sm">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-2xl font-bold text-black">$12k</h4>
                <span class="text-sm font-medium text-gray-500">Total Revenue</span>
            </div>
            <span class="flex items-center gap-1 text-sm font-medium text-green-500">
                +11%
            </span>
        </div>
    </div>
    <!-- Card Item -->
</div>

<div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
    <!-- Chart / Activity Area (Placeholder) -->
    <div class="col-span-12 xl:col-span-8 rounded-sm border border-gray-200 bg-white px-5 pt-7.5 pb-5 shadow-sm sm:px-7.5">
        <h3 class="text-xl font-bold text-black mb-4">Recent Activity</h3>
        <div class="h-64 rounded bg-gray-50 flex items-center justify-center border-2 border-dashed border-gray-300">
            <p class="text-gray-400">Activity Chart Placeholder</p>
        </div>
    </div>

    <!-- Right Column (Notifications/Tasks) -->
    <div class="col-span-12 xl:col-span-4 rounded-sm border border-gray-200 bg-white px-5 pt-7.5 pb-5 shadow-sm sm:px-7.5">
         <h3 class="text-xl font-bold text-black mb-4">Upcoming Deadlines</h3>
         <div class="flex flex-col gap-4">
             <div class="flex items-center gap-4 p-3 rounded hover:bg-gray-50 transition border-l-4 border-indigo-500 bg-gray-50">
                 <div class="flex-1">
                     <h5 class="font-medium text-black">Website Redesign</h5>
                     <span class="text-sm text-gray-500">Due Tomorrow</span>
                 </div>
                 <span class="inline-flex rounded bg-indigo-100 px-2 py-1 text-xs font-medium text-indigo-700">Sprint 1</span>
             </div>

             <div class="flex items-center gap-4 p-3 rounded hover:bg-gray-50 transition border-l-4 border-orange-500">
                 <div class="flex-1">
                     <h5 class="font-medium text-black">Client Meeting</h5>
                     <span class="text-sm text-gray-500">Due 14:00 PM</span>
                 </div>
                 <span class="inline-flex rounded bg-orange-100 px-2 py-1 text-xs font-medium text-orange-700">Sales</span>
             </div>
             
             <div class="flex items-center gap-4 p-3 rounded hover:bg-gray-50 transition border-l-4 border-emerald-500">
                 <div class="flex-1">
                     <h5 class="font-medium text-black">Database Backup</h5>
                     <span class="text-sm text-gray-500">Sunday</span>
                 </div>
                 <span class="inline-flex rounded bg-emerald-100 px-2 py-1 text-xs font-medium text-emerald-700">SysAdmin</span>
             </div>
         </div>
    </div>
</div>
@endsection