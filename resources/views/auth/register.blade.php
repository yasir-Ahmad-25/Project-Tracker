<x-layout>
    <div class="px-4 md:px-8 min-h-screen flex flex-col items-center justify-center">
        <div class="max-w-md w-full">
            <div
                class="p-6 rounded-lg bg-white border border-slate-300 shadow-xs md:p-6">
                <h1 class="text-slate-900 text-center text-2xl font-bold">Create an account</h1>
                @if($errors->any())
                    @foreach($errors->all()  as $error)
                    <div
                        class="bg-red-50 text-sm p-3 rounded-md flex items-start gap-3 border border-red-100 dark:bg-red-900/20 dark:border-red-800/40"
                        role="alert">
                        <div class="flex items-start gap-2.5 text-red-900 dark:text-red-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-[18px] fill-current overflow-visible" viewBox="0 0 512 512"
                                aria-hidden="true">
                                <path
                                d="M256 0C114.508 0 0 114.497 0 256c0 141.493 114.497 256 256 256 141.492 0 256-114.497 256-256C512 114.507 397.503 0 256 0m0 472c-119.384 0-216-96.607-216-216 0-119.385 96.607-216 216-216 119.384 0 216 96.607 216 216 0 119.385-96.607 216-216 216"
                                data-original="#000000" />
                                <path
                                d="M343.586 315.302 284.284 256l59.302-59.302c7.81-7.81 7.811-20.473.001-28.284-7.812-7.811-20.475-7.81-28.284 0L256 227.716l-59.303-59.302c-7.809-7.811-20.474-7.811-28.284 0s-7.81 20.474.001 28.284L227.716 256l-59.302 59.302c-7.811 7.811-7.812 20.474-.001 28.284 7.813 7.812 20.476 7.809 28.284 0L256 284.284l59.303 59.302c7.808 7.81 20.473 7.811 28.284 0s7.81-20.474-.001-28.284"
                                data-original="#000000" />
                            </svg>
                            <div>
                                <p class="font-medium leading-tight">Error!</p>
                                <p class="text-red-900 dark:text-red-400 mt-2">{{ $error }}.</p>
                                
                            </div>
                        </div>
                        <button type="button" aria-label="Dismiss error alert"
                            class="dismiss-btn ml-auto flex items-center opacity-70 hover:opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 cursor-pointer fill-red-800 dark:fill-red-300"
                                aria-hidden="true" viewBox="0 0 329.269 329">
                                <path
                                d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" />
                            </svg>
                        </button>
                    </div>
                    @endforeach
                @endif

                <form class="space-y-6 mt-10" action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <div>
                    <label for="name"
                        class="mb-2 text-slate-900 font-medium text-sm inline-block">Name</label>
                    <input type="text" id="name" name="name" placeholder="john" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" 
                        value="{{ old('name') }}"/>
                    </div>
                    <div>
                    <label for="email"
                        class="mb-2 text-slate-900 font-medium text-sm inline-block">Email</label>
                    <input type="email" id="email" name="email" placeholder="john@readymadeui.com" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" 
                        value="{{ old('email') }}"/>
                    </div>
                    <div>
                    <label for="password"
                        class="mb-2 text-slate-900 font-medium text-sm inline-block">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
                    </div>
                    <div>
                    <label for="password_confirmation"
                        class="mb-2 text-slate-900 font-medium text-sm inline-block">Confirm
                        password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
                    </div>

                    <div class="flex items-start flex-wrap gap-2">
                    <label class="flex items-center group has-[input:checked]:text-slate-900">
                        <input id="tmc" name="tmc" type="checkbox" required class="sr-only" />
                        <!-- Custom box -->
                        <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded outline-1 outline-slate-300 bg-white group-has-[input:checked]:bg-blue-600 group-has-[input:checked]:outline-blue-600 group-focus-within:outline-2 group-focus-within:outline-blue-600" aria-hidden="true">
                            <!-- Checkmark -->
                            <svg class="size-3 text-white opacity-0 group-has-[input:checked]:opacity-100" viewBox="0 0 12 10"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 5l3 3 7-7" />
                            </svg>
                        </span>
                        <span class="ml-3 text-sm text-slate-700">
                            I accept the
                        </span>
                    </label>

                    <a href="#"
                        class="ml-1 text-sm font-medium text-blue-700 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                        Terms and Conditions
                    </a>
                    </div>

                    <button type="submit"
                    class="w-full py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                    Create an account</button>
                </form>

                <div class="mt-6 text-slate-900 text-sm text-center">Already have an account? <a href="{{ route('login') }}"
                    class="text-blue-700 hover:underline ml-1 font-medium focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                    Login here</a>
                </div>
            </div>
        </div>


    </div>
</x-layout>