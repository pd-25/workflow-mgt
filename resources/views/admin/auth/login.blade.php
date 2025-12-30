<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.partials.headdocs')
</head>
<body class="h-screen w-full font-sans antialiased text-gray-900 bg-white">
    <div class="flex min-h-screen">
        <!-- Left Side: Branding/Hero -->
        <div class="hidden lg:flex w-1/2 bg-gray-900 relative items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-20 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-indigo-500 via-purple-500 to-transparent"></div>
            <div class="z-10 text-center px-10">
                <h1 class="text-4xl font-bold text-white mb-4 tracking-tight">Workflow Management</h1>
                <p class="text-gray-400 text-lg">Streamline your operations and boost productivity.</p>
            </div>
            <!-- Decorative circle -->
            <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-indigo-600 opacity-20 blur-3xl"></div>
            <div class="absolute top-20 right-20 w-72 h-72 rounded-full bg-purple-600 opacity-10 blur-3xl"></div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="flex w-full lg:w-1/2 flex-col justify-center px-8 sm:px-12 md:px-24">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Welcome back! Please enter your details.
                </p>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
                @if(session('msg'))
                <div class="rounded-md bg-red-50 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">{{ session('msg') }}</h3>
                        </div>
                    </div>
                </div>
                @endif

                <form class="space-y-6" action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2 relative">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition ease-in-out duration-150 @error('email') ring-red-300 focus:ring-red-600 @enderror">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2 relative">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition ease-in-out duration-150 @error('password') ring-red-300 focus:ring-red-600 @enderror">
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">Forgot password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-200 ease-in-out transform active:scale-95">
                            Sign in
                        </button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Not a member?
                    <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">Contact Administrator</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
