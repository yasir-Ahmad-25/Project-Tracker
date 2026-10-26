<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'TrackFlow') }} — Modern Project Tracker</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-neutral-50 dark:bg-neutral-950 text-neutral-800 dark:text-neutral-200 antialiased font-sans selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col justify-between">

        <!-- Header Navigation -->
        <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 dark:bg-neutral-950/80 border-b border-neutral-200/80 dark:border-neutral-800/80 transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <!-- Brand Logo -->
                <div class="flex items-center gap-3">
                    <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-600 to-violet-500 flex items-center justify-center text-white shadow-md shadow-indigo-500/20">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <span class="font-bold text-lg text-neutral-900 dark:text-white tracking-tight">
                        TrackFlow
                    </span>
                </div>

                <!-- Navigation Links -->
                
                <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-neutral-600 dark:text-neutral-400">
                    <a href="#features" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Features</a>
                    <a href="#preview" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Workspace</a>
                    <a href="#stats" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Impact</a>
                </nav>

                @auth
                <!-- Auth Buttons -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.dashboard')}}" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow-sm shadow-indigo-600/30 transition-all">
                        Dashboard
                    </a>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 hover:bg-red-500 rounded-lg shadow-sm shadow-red-600/30 transition-all">
                            Logout
                        </button>
                    </form>
                </div>
                @endauth

                @guest
                <!-- Auth Buttons -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('login') }}" class="px-3.5 py-2 text-sm font-medium text-neutral-700 dark:text-neutral-300 hover:text-neutral-900 dark:hover:text-white transition-colors">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow-sm shadow-indigo-600/30 transition-all">
                        Get Started Free
                    </a>
                </div>
                @endguest
            </div>
        </header>
        <main>
            {{ $slot }}
        </main>
        <!-- Footer -->
        <footer class="border-t border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-950 py-8 text-xs text-neutral-500 dark:text-neutral-400">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="font-semibold text-neutral-800 dark:text-neutral-200">TrackFlow</span>
                    <span>&copy; 2026 All rights reserved.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#features" class="hover:text-neutral-900 dark:hover:text-white transition-colors">Features</a>
                    <a href="#preview" class="hover:text-neutral-900 dark:hover:text-white transition-colors">Workspace</a>
                    <a href="#" class="hover:text-neutral-900 dark:hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-neutral-900 dark:hover:text-white transition-colors">Terms</a>
                </div>
            </div>
        </footer>
    </body>
</html>
