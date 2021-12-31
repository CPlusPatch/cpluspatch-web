@extends("layouts.app")

@section("title", "Home")

@section("content")

@include("components.nav")
<div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
    <div class="container mx-auto px-6 flex relative py-16">
        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
            <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
            </span>
            <h1
                class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                CPlusPatch
                <span class="text-5xl sm:text-7xl">
                    Web dev and gaming
                </span>
            </h1>
            <p class="text-sm sm:text-base text-gray-700 dark:text-white mt-8 font-mono">
                Official page for my projects and stuff
            </p>
            <div class="flex mt-8">
                <a href="#"
                    class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                    Check out my stuff
                </a>
                <a href="/socials"
                    class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                    My socials
                </a>
            </div>
        </div>
        <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
            <img src="/cdn/hero.png" class="w-xl md:w-lg m-auto translate-x-56" />
        </div>
    </div>
</div>

@endsection