{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

 @extends('layouts.app')

 @section('content')
 
 <div class="h-screen bg-gray-100 flex flex-col space-y-10 justify-center items-center">
     <div class="bg-white md:shadow-lg shadow:none rounded p-6 w-96">
         <h1 class="text-3xl font-bold leading-normal">Sign in</h1>
         <p class="text-sm">Sign in to access the editor</p>
 
         @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
 
         <form class="space-y-2 mt-5" method="POST" action="{{ route('login') }}">
             @csrf
             <div class="mb-3 relative">
                 <label for="email" class="label mb-1 pl-3 text-gray-500 text-base cursor-text">Email</label>
                 <input id="email" class="w-full rounded px-3 border border-gray-500 pt-2 pb-2 focus:outline-none input active:outline-none @error('email') ring border-transparent ring-red-500 @enderror" type="text" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
             </div>
             
             <div class="mb-3 relative">
                 <label for="password" class="label mb-1 pl-3 text-gray-500 text-base cursor-text">Password</label>
                 <input id="password" class="w-full rounded px-3 border border-gray-500 pt-2 pb-2 focus:outline-none input active:outline-none @error('email') ring border-transparent ring-red-500 @enderror" name="password" type="password" required/>
                 @error('email')
                     <p class="text-sm px-1 text-red-500">{{ $message }}</p>
                 @enderror
             </div>
 
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
 
                 <label class="form-check-label" for="remember">
                     {{ __('Remember Me') }}
                 </label>
             </div>
 
             @if (Route::has('password.request'))
             <div class="-m-2">
                 <a class="font-bold text-blue-700 hover:bg-blue-200 p-2 rounded-md" href="{{ route('password.request') }}"">Forgot password?</a>
             </div>
             @endif
 
             <button type="submit" class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-xl text-white py-3 font-bold">Sign in</button>
         </form>
     </div>
 </div>
 @endsection
 