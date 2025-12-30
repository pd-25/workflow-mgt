<aside class="absolute left-0 top-0 z-50 flex h-screen w-72 flex-col overflow-y-hidden duration-300 ease-linear lg:static lg:translate-x-0 -translate-x-full bg-slate-900 text-white">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5 mt-2">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
            <div class="h-10 w-10 rounded bg-indigo-600 flex items-center justify-center font-bold text-2xl">W</div>
            <span class="text-xl font-bold tracking-tight">WorkFlow</span>
        </a>
    </div>
    <!-- Sidebar Header -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-semibold text-slate-400 uppercase tracking-wider">MENU</h3>
                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Dashboard -->
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                           class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-slate-200 duration-300 ease-in-out hover:bg-slate-800 {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : '' }}">
                            <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 2a1 1 0 00-.707.293l-8 8a1 1 0 001.414 1.414L10 4.414l7.293 7.293a1 1 0 001.414-1.414l-8-8A1 1 0 0010 2z"/>
                                <path d="M3 10.414V17a2 2 0 002 2h4v-5a1 1 0 112 0v5h4a2 2 0 002-2v-6.586l-7-7-7 7z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>

                    <!-- Leads -->
                    <li>
                        <a href="#"
                           class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-slate-200 duration-300 ease-in-out hover:bg-slate-800">
                            <svg class="h-5 w-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Leads (CRM)
                        </a>
                    </li>

                    <!-- Projects -->
                    <li>
                        <a href="#"
                           class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-slate-200 duration-300 ease-in-out hover:bg-slate-800">
                             <svg class="h-5 w-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>
                    </li>

                    <!-- Tasks -->
                    <li>
                        <a href="#"
                           class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-slate-200 duration-300 ease-in-out hover:bg-slate-800">
                            <svg class="h-5 w-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            Tasks / Sprints
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
