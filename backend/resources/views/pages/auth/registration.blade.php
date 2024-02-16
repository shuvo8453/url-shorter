@extends('layout.auth.main')
@section('content')
    <h1 class="text-3xl text-slate-800 font-bold mb-6">Create your Account ✨</h1>
    <!-- Form -->
    <form method="post" action="{{ route('postRegistration') }}">
        @csrf

        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1" for="name">Full Name <span
                        class="text-rose-500">*</span></label>
                <input id="name" name="name" class="form-input w-full" type="text" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="email">Email Address <span
                        class="text-rose-500">*</span></label>
                <input id="email" name="email" class="form-input w-full" type="email" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="password">Password <span
                    class="text-rose-500">*</span></label>
                <input id="password" name="password" class="form-input w-full" type="password" autocomplete="on" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="conf_password">Confirm Password <span
                    class="text-rose-500">*</span></label>
                <input id="conf_password" name="conf_password" class="form-input w-full" type="password" autocomplete="on" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            {{-- <div class="mr-1">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" />
                    <span class="text-sm ml-2">Email me about product news.</span>
                </label>
            </div> --}}
            <a class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-3 whitespace-nowrap" href="index.html">Sign Up</a>
        </div>
    </form>
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            Have an account? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">Sign In</a>
        </div>
    </div>
@endsection
