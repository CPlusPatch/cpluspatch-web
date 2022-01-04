@extends('layouts.app')

@section('content')


<div class="h-screen bg-gray-100 flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow:none rounded p-6 w-96">
        <h1 class="text-3xl font-bold leading-normal">{{ __("Forgot password?") }}</h1>
        <p class="mb-4 mt-2 text-sm text-gray-600">{{ __("No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.") }}</p>

        @if (session("status"))
            <div class="font-medium text-sm text-green-600">
                {{session("status") }}
            </div>
        @endif

        @if($errors->any())
        <div class="invalid-feedback" role="alert">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm invalid-feedback">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form class="space-y-2 mt-5" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3 relative">
                <input id="email"
                    class="w-full rounded px-3 border border-gray-500 pt-2 pb-2 focus:outline-none input active:outline-none @error('email') ring border-transparent ring-red-500 @enderror"
                    type="text" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
            </div>

            <div class="">
                <button type=" submit" class="w-full text-center bg-indigo-700 hover:bg-indigo-900 rounded-xl text-white py-3 font-bold">Email reset link</button>
            </div>
        </form>
    </div>
</div>
@endsection{{-- <x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form>
</x-auth-card>
 --}}