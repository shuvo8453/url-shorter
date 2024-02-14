@extends('layout.auth.main')
@section('content')

    <h1 class="text-3xl text-slate-800 font-bold mb-6">Welcome back! ✨</h1>
    <!-- Form -->
    <form>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1" for="email">Email Address</label>
                <input id="email" class="form-input w-full" type="email" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="password">Password</label>
                <input id="password" class="form-input w-full" type="password" autocomplete="on" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            <div class="mr-1">
                <a class="text-sm underline hover:no-underline" href="reset-password.html">Forgot Password?</a>
            </div>
            <a class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-3" href="index.html">Sign In</a>
        </div>
    </form>

    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            Don’t you have an account? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('registration') }}">Sign
                Up</a>
        </div>
        <!-- Warning -->
        <div class="mt-5">
            <div class="bg-amber-100 text-amber-600 px-3 py-2 rounded">
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

@endsection
