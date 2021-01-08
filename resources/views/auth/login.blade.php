@extends('layouts.app')

@section('contents')
    <div class="flex min-h-screen justify-center items-center">
        <div class="w-96">
            <div class="bg-purple-600 rounded-t-md w-full">
                <p class="text-center text-3xl text-white uppercase text-white px-8 py-6">Login here</p>
            </div>
            <div class="bg-purple-100 shadow-xl rounded-lg px-8 py-8">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
    
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    <div>
                        <label for="email" value="{{ __('Email') }}" class="block font-medium text-sm text-gray-700" />
                        <input id="email" class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent rounded-md py-2 px-4 w-full shadow-md" type="email" name="email" value="{{ old('email') }}" required placeholder="Enter Email Address" />
                    </div>
    
                    <div class="mt-4">
                        <label for="password" value="{{ __('Password') }}" class="block font-medium text-sm text-gray-700"/>
                        <input id="email" class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent rounded-md py-2 px-4 w-full shadow-md" type="password" name="password" value="{{ old('password') }}" required placeholder="Enter Password" />
                    </div>
    
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
    
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-6" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
    
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 px-4 py-2 text-white rounded-md shadow-md uppercase tracking-wide">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
