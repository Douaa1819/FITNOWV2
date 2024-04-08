<template>

    <div>
        @extends('layouts.app')

@section('content')
<div class="font-[sans-serif] text-[#333]">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
            <div class="md:max-w-md w-full sm:px-6 py-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-12">
                        <h3 class="text-3xl font-extrabold">Sign in</h3>
                        <p class="text-sm mt-4">Don't have an account <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register here</a></p>
                    </div>

                    <div>
                        <label class="text-xs block mb-2">Email</label>
                        <div class="relative flex items-center">
                            <input name="email" type="email" required class="w-full text-sm border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter email" value="{{ old('email') }}" autofocus />
                            @error('email')
                            <span class="text-red-500 text-xs absolute right-0">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8">
                        <label class="text-xs block mb-2">Password</label>
                        <div class="relative flex items-center">
                            <input name="password" type="password" required class="w-full text-sm border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter password" />
                            @error('password')
                            <span class="text-red-500 text-xs absolute right-0">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-2 mt-5">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-3 block text-sm">Remember me</label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-blue-600 font-semibold text-sm hover:underline">Forgot Password?</a>
                            @endif
                        </div>
                    </div>

                    <div class="mt-12">
                        <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">Sign in</button>
                    </div>

                </form>
                <!-- Additional login options could go here -->
            </div>
            <div class="md:h-full max-md:mt-10 bg-[#000842] rounded-xl lg:p-12 p-8">
                <img src="https://readymadeui.com/signin-image.webp" class="w-full h-full object-contain" alt="login-image" />
            </div>
        </div>
    </div>
</div>
@endsection
 
    </div>
</template>