<header class="sticky top-0 z-40 flex w-full bg-white drop-shadow-sm border-b border-gray-200">
    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button class="z-50 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm lg:hidden">
                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                    <span class="du-block absolute right-0 h-full w-full">
                        <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out"></span>
                        <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out"></span>
                        <span class="relative top-0 left-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out"></span>
                    </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->
        </div>

        <div class="hidden sm:block">
            <form action="#" method="POST">
                <div class="relative">
                    <button class="absolute left-0 top-1/2 -translate-y-1/2">
                        <svg class="fill-gray-500 hover:fill-primary w-5 h-5" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <input type="text" placeholder="Search..." class="w-full bg-transparent pl-9 pr-4 text-gray-600 focus:outline-none xl:w-125" />
                </div>
            </form>
        </div>

        <div class="flex items-center gap-3 2xsm:gap-7">
            <!-- User Area -->
            <div class="relative flex items-center gap-4">
               <div class="flex flex-col text-right">
                    <span class="block text-sm font-medium text-black dark:text-gray-700">{{ Auth::guard('admin')->user()->name ?? 'Administrator' }}</span>
                    <span class="block text-xs text-gray-500">Super Admin</span>
               </div>
               <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold">
                    {{ substr(Auth::guard('admin')->user()->name ?? 'A', 0, 1) }}
               </div>
               
               <a href="{{ route('admin.logout') }}" class="ml-4 text-sm font-medium text-red-600 hover:text-red-800">Logout</a>
            </div>
            <!-- User Area -->
        </div>
    </div>
</header>
