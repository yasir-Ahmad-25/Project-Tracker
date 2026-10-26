<x-layout>
    <div class="px-4 md:px-8 min-h-screen flex flex-col items-center justify-center">
        <div class="max-w-md w-full">
            <div
                class="p-6 rounded-lg bg-white border border-slate-300 shadow-xs md:p-6">
                <h1 class="text-slate-900 text-center text-2xl font-bold">Login</h1>

                <form class="space-y-6 mt-10" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div>
                    <label for="email"
                        class="mb-2 text-slate-900 font-medium text-sm inline-block">Email</label>
                    <input type="email" id="email" name="email" placeholder="john@readymadeui.com" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" 
                    value="{{ old('email') }}"/>
                    </div>
                    <div>
                    <label for="password" class="mb-2 text-slate-900 font-medium text-sm inline-block">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required
                        class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" />
                    </div>

                    <button type="submit" class="w-full py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                        Login
                    </button>
                </form>

                <div class="mt-6 text-slate-900 text-sm text-center">Don't have Account ? <a href="{{ route('register') }}"
                    class="text-blue-700 hover:underline ml-1 font-medium focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                    Signup Here</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>