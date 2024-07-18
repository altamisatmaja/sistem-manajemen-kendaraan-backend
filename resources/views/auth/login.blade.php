<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400">

    <main class="bg-white dark:bg-gray-900">

        <div class="relative flex">

            <!-- Content -->
            <div class="w-full md:w-1/2">

                <div class="min-h-[100dvh] h-full flex flex-col after:flex-1">

                    <!-- Header -->
                    <div class="flex-1">
                        <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                            <!-- Logo -->
                            <a class="block" href="{{ route('dashboard') }}">
                                <svg class="fill-violet-500" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32">
                                    <path
                                        d="M31.956 14.8C31.372 6.92 25.08.628 17.2.044V5.76a9.04 9.04 0 0 0 9.04 9.04h5.716ZM14.8 26.24v5.716C6.92 31.372.63 25.08.044 17.2H5.76a9.04 9.04 0 0 1 9.04 9.04Zm11.44-9.04h5.716c-.584 7.88-6.876 14.172-14.756 14.756V26.24a9.04 9.04 0 0 1 9.04-9.04ZM.044 14.8C.63 6.92 6.92.628 14.8.044V5.76a9.04 9.04 0 0 1-9.04 9.04H.044Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="max-w-sm mx-auto w-full px-4 py-8">
                        <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">{{ __('Welcome back!') }}
                        </h1>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <label for="email" value="{{ __('Email') }}" />
                                    <input id="email" type="email" name="email" :value="old('email')" required
                                        autofocus />
                                </div>
                                <div>
                                    <label for="password" value="{{ __('Password') }}" />
                                    <input id="password" type="password" name="password" required
                                        autocomplete="current-password" />
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                @if (Route::has('password.request'))
                                    <div class="mr-1">
                                        <a class="text-sm underline hover:no-underline"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    </div>
                                @endif
                                <button class="ml-3">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </form>
                        <!-- Footer -->
                        <div class="pt-5 mt-6 border-t border-gray-100 dark:border-gray-700/60">
                            <div class="text-sm">
                                {{ __('Don\'t you have an account?') }} <a
                                    class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400"
                                    href="{{ route('login') }}">{{ __('Sign Up') }}</a>
                            </div>
                            <!-- Warning -->
                            <div class="mt-5">
                                <div class="bg-yellow-500/20 text-yellow-700 px-3 py-2 rounded-lg">
                                    <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                                        <path
                                            d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                    </svg>
                                    <span class="text-sm">
                                        To support you during the pandemic super pro features are free until March 31st.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="hidden md:block absolute top-0 bottom-0 right-0 md:w-1/2" aria-hidden="true">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/auth-image.jpg') }}"
                    width="760" height="1024" alt="Authentication image" />
            </div>

        </div>

    </main>
</body>

</html>
