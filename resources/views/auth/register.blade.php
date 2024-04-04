@extends('layouts.app')
@section('content')
<div class="font-[sans-serif] bg-white text-[#333] md:h-screen">
    <div class="grid md:grid-cols-2 items-center gap-8 h-full">
        <div class="max-md:order-1 p-4 bg-gray-50 h-full">
            <img src="https://readymadeui.com/signin-image.webp" class="lg:max-w-[90%] w-full h-full object-contain block mx-auto" alt="login-image" />
        </div>
        <div class="flex items-center p-6 h-full w-full">
            <form class="max-w-lg w-full mx-auto" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-12">
                    <h3 class="text-blue-500 md:text-3xl text-2xl font-extrabold max-md:text-center">Create an account</h3>
                </div>
                <div>
                    <label class="text-xs block mb-2">Full Name</label>
                    <div class="relative flex items-center">
                        <input name="name" type="text" required class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="Enter name" value="{{ old('name') }}" autofocus />
                        @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <label class="text-xs block mb-2">Email</label>
                    <div class="relative flex items-center">
                        <input name="email" type="email" required class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="Enter email" value="{{ old('email') }}" />
                        @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <label class="text-xs block mb-2">Password</label>
                    <div class="relative flex items-center">
                        <input name="password" type="password" required class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="Enter password" />
                        @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <label class="text-xs block mb-2">Confirm Password</label>
                    <div class="relative flex items-center">
                        <input name="password_confirmation" type="password" required class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="Confirm password" />
                    </div>
                </div>
                <div class="flex items-center mt-8">
                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 shrink-0 rounded" />
                    <label for="terms" class="ml-3 block text-sm">
                        I accept the <a href="#" class="text-blue-500 font-semibold hover:underline ml-1">Terms and Conditions</a>
                    </label>
                </div>
                <div class="mt-12">
                    <button type="submit" class="w-full py-2.5 px-8 text-sm font-semibold rounded bg-blue-500 hover:bg-blue-600 text-white border focus:outline-none">
                        Create an account
                    </button>
                    <p class="text-sm mt-8">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 font-semibold hover:underline ml-1">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
