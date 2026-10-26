<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-20 pb-16 md:pt-28 md:pb-24 overflow-hidden">
        <div class="absolute inset-0 -z-10 flex items-center justify-center">
            <div class="w-[60rem] h-[30rem] bg-gradient-to-tr from-indigo-500/15 via-violet-500/10 to-transparent blur-3xl rounded-full"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Release Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800/60 mb-6">
                <span class="inline-block w-1.5 h-1.5 rounded-full bg-indigo-500 animate-pulse"></span>
                Version 2.0 Live &bull; Built for Agile Teams
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-neutral-950 dark:text-white max-w-4xl mx-auto leading-[1.15]">
                Keep projects moving. <br class="hidden sm:inline" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-500">
                    Deliver work on time, every time.
                </span>
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-neutral-600 dark:text-neutral-400 max-w-2xl mx-auto leading-relaxed">
                A focused project management tool built for teams that ship code. Track tasks across sprints, spot blockers early, and maintain engineering velocity.
            </p>

            <!-- CTAs -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="w-full sm:w-auto px-7 py-3.5 text-base font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-xl shadow-lg shadow-indigo-600/30 transition-all flex items-center justify-center gap-2">
                    Start Tracking Free
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="#preview" class="w-full sm:w-auto px-7 py-3.5 text-base font-medium text-neutral-700 dark:text-neutral-300 bg-white dark:bg-neutral-900 border border-neutral-300 dark:border-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-800/80 rounded-xl transition-all flex items-center justify-center gap-2">
                    Explore Workspace
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-10 flex items-center justify-center gap-6 text-xs text-neutral-500 dark:text-neutral-400">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    No credit card required
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Instant sprint setup
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Full role-based control
                </span>
            </div>
        </div>

        <!-- Product Preview (Kanban UI Mockup) -->
        <div id="preview" class="max-w-6xl mx-auto mt-16 px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-neutral-900 rounded-2xl border border-neutral-200 dark:border-neutral-800 shadow-2xl p-4 sm:p-6 overflow-hidden">
                <!-- Top Controls & Status Bar -->
                <div class="flex items-center justify-between pb-4 mb-6 border-b border-neutral-100 dark:border-neutral-800 text-xs">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-400"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                        <span class="ml-2 font-mono text-neutral-400">Sprint 14: Core API & Mobile Sync</span>
                    </div>
                    <span class="px-2.5 py-1 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-400 font-semibold">
                        On Track (88%)
                    </span>
                </div>

                <!-- 3 Kanban Columns -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <!-- Column 1: Backlog -->
                    <div class="bg-neutral-50 dark:bg-neutral-950/60 p-4 rounded-xl border border-neutral-200/60 dark:border-neutral-800">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-semibold text-xs tracking-wider uppercase text-neutral-500">Backlog</span>
                            <span class="text-xs bg-neutral-200 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 font-bold px-2 py-0.5 rounded">3</span>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-white dark:bg-neutral-900 p-3.5 rounded-lg border border-neutral-200 dark:border-neutral-800 shadow-sm">
                                <span class="text-[10px] font-semibold tracking-wide uppercase px-2 py-0.5 rounded bg-blue-50 dark:bg-blue-950 text-blue-600 dark:text-blue-400">Database</span>
                                <p class="mt-2 text-sm font-semibold text-neutral-800 dark:text-neutral-100">Review indexing & query logs</p>
                                <div class="mt-3 flex items-center justify-between text-xs text-neutral-400">
                                    <span>2 subtasks</span>
                                    <span class="w-5 h-5 rounded-full bg-purple-500 text-white flex items-center justify-center text-[10px] font-bold">EM</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-neutral-900 p-3.5 rounded-lg border border-neutral-200 dark:border-neutral-800 shadow-sm">
                                <span class="text-[10px] font-semibold tracking-wide uppercase px-2 py-0.5 rounded bg-orange-50 dark:bg-orange-950 text-orange-600 dark:text-orange-400">Security</span>
                                <p class="mt-2 text-sm font-semibold text-neutral-800 dark:text-neutral-100">Setup system audit policies</p>
                                <div class="mt-3 flex items-center justify-between text-xs text-neutral-400">
                                    <span>Due tomorrow</span>
                                    <span class="w-5 h-5 rounded-full bg-amber-500 text-white flex items-center justify-center text-[10px] font-bold">AL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: In Progress -->
                    <div class="bg-neutral-50 dark:bg-neutral-950/60 p-4 rounded-xl border border-neutral-200/60 dark:border-neutral-800">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-semibold text-xs tracking-wider uppercase text-neutral-500">In Progress</span>
                            <span class="text-xs bg-indigo-100 dark:bg-indigo-950 text-indigo-700 dark:text-indigo-400 font-bold px-2 py-0.5 rounded">2</span>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-white dark:bg-neutral-900 p-3.5 rounded-lg border-l-4 border-l-indigo-500 border-neutral-200 dark:border-neutral-800 shadow-sm">
                                <span class="text-[10px] font-semibold tracking-wide uppercase px-2 py-0.5 rounded bg-indigo-50 dark:bg-indigo-950 text-indigo-600 dark:text-indigo-400">Mobile Client</span>
                                <p class="mt-2 text-sm font-semibold text-neutral-800 dark:text-neutral-100">Implement real-time push events</p>
                                <div class="mt-3 flex items-center justify-between text-xs text-neutral-400">
                                    <span class="text-indigo-600 dark:text-indigo-400 font-medium">Sprint Goal</span>
                                    <span class="w-5 h-5 rounded-full bg-indigo-600 text-white flex items-center justify-center text-[10px] font-bold">ME</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-neutral-900 p-3.5 rounded-lg border-l-4 border-l-indigo-500 border-neutral-200 dark:border-neutral-800 shadow-sm">
                                <span class="text-[10px] font-semibold tracking-wide uppercase px-2 py-0.5 rounded bg-violet-50 dark:bg-violet-950 text-violet-600 dark:text-violet-400">REST API</span>
                                <p class="mt-2 text-sm font-semibold text-neutral-800 dark:text-neutral-100">Bearer token rotation logic</p>
                                <div class="mt-3 flex items-center justify-between text-xs text-neutral-400">
                                    <span>In Review</span>
                                    <span class="w-5 h-5 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px] font-bold">SA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3: Done -->
                    <div class="bg-neutral-50 dark:bg-neutral-950/60 p-4 rounded-xl border border-neutral-200/60 dark:border-neutral-800">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-semibold text-xs tracking-wider uppercase text-neutral-500">Done</span>
                            <span class="text-xs bg-emerald-100 dark:bg-emerald-950 text-emerald-700 dark:text-emerald-400 font-bold px-2 py-0.5 rounded">6</span>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-white dark:bg-neutral-900 p-3.5 rounded-lg border border-neutral-200 dark:border-neutral-800 shadow-sm opacity-85">
                                <span class="text-[10px] font-semibold tracking-wide uppercase px-2 py-0.5 rounded bg-emerald-50 dark:bg-emerald-950 text-emerald-600 dark:text-emerald-400">Infrastructure</span>
                                <p class="mt-2 text-sm font-semibold line-through text-neutral-500">Staging cloud environment setup</p>
                                <div class="mt-3 flex items-center justify-between text-xs text-neutral-400">
                                    <span class="text-emerald-600 dark:text-emerald-400">Merged & Verified</span>
                                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 border-t border-neutral-200 dark:border-neutral-800/80 bg-white dark:bg-neutral-900/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Engineered for Momentum</h2>
                <p class="mt-3 text-3xl font-bold tracking-tight text-neutral-950 dark:text-white sm:text-4xl">Everything required to deliver cleanly</p>
                <p class="mt-4 text-neutral-600 dark:text-neutral-400">Cut out bloated clutter. Focus purely on what needs to get done next.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-2xl bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white">Smart Agile Boards</h3>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400 leading-relaxed">
                        Organize backlogs, active sprints, and deliverable milestones with intuitive visual status lanes.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-8 rounded-2xl bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white">Milestone & Time Tracking</h3>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400 leading-relaxed">
                        Set strict due dates, log estimated hours, and catch delays long before shipping day arrives.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="p-8 rounded-2xl bg-neutral-50 dark:bg-neutral-950 border border-neutral-200 dark:border-neutral-800">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white">Granular Team Roles</h3>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400 leading-relaxed">
                        Assign leads, developers, and reviewers to ensure clear ownership and clean sign-offs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics / Numbers Section -->
    <section id="stats" class="py-16 bg-neutral-950 text-white border-y border-neutral-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-extrabold text-indigo-400">99.4%</div>
                    <div class="mt-2 text-sm text-neutral-400">On-Time Deliveries</div>
                </div>
                <div>
                    <div class="text-4xl font-extrabold text-indigo-400">4.2x</div>
                    <div class="mt-2 text-sm text-neutral-400">Faster Sprint Reviews</div>
                </div>
                <div>
                    <div class="text-4xl font-extrabold text-indigo-400">100%</div>
                    <div class="mt-2 text-sm text-neutral-400">Clean HTML & Tailwind</div>
                </div>
                <div>
                    <div class="text-4xl font-extrabold text-indigo-400">&lt; 100ms</div>
                    <div class="mt-2 text-sm text-neutral-400">Page Render Speed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-r from-indigo-600 via-indigo-700 to-violet-800 p-8 sm:p-14 text-center text-white shadow-2xl relative overflow-hidden">
                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Ready to take control of your team's deliveries?</h2>
                    <p class="mt-4 text-indigo-100 text-base sm:text-lg">Set up your workspace in under two minutes and launch your first sprint today.</p>
                    
                    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="px-8 py-3.5 bg-white text-indigo-700 hover:bg-neutral-100 font-semibold rounded-xl shadow-lg transition-all">
                            Create Free Account
                        </a>
                        <a href="#" class="px-8 py-3.5 bg-indigo-900/50 hover:bg-indigo-900/70 text-white font-medium rounded-xl border border-indigo-400/30 transition-all">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>