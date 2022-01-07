@extends("layouts.app")

@section("title", "Home")

@section("content")

<?php
if (isset($_COOKIE["alpha-warning-dismissed"])) {
    $alert_cookie = $_COOKIE["alpha-warning-dismissed"];
}
else {
    $alert_cookie = false;
}
?>
@if ($alert_cookie != true)
    @include("components.warning-banner")
@endif

@include("components.nav")
<div class="bg-gray-800 flex relative z-20 items-center overflow-hidden">
    <div class="container mx-auto px-6 flex relative py-16">
        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
            <span class="w-20 h-2 bg-white mb-12">
            </span>
            <h1
                class="font-bebas-neue uppercase text-5xl sm:text-8xl font-black flex flex-col leading-none text-white">
                {{ __("CPlusPatch") }}
                <span class="text-4xl sm:text-7xl">
                    {{ __("Web dev and gaming") }}
                </span>
            </h1>
            <p class="text-sm sm:text-base text-white mt-8 font-mono">
                {{ __("Official page for my projects and stuff") }}
            </p>
            <div class="flex flex-wrap mt-8 gap-4">
                <a href="/projects"
                    class="uppercase py-2 px-4 rounded-lg bg-indigo-500 border-2 border-transparent text-white text-md mr-4 hover:bg-indigo-400 transition-all duration-200 hover:scale-105">
                    {{ __("Check out my stuff") }}
                </a>
                <a href="#footer"
                    class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-indigo-500 text-white hover:bg-indigo-500 hover:text-white text-md transition-all duration-200 hover:scale-105">
                    {{ __("My socials") }}
                </a>
            </div>
        </div>
        <div class="hidden lg:block sm:w-1/3 lg:w-3/5 relative">
            <img src="/cdn/hero2.png" class="w-xl md:w-lg m-auto translate-x-56" />
        </div>
    </div>

</div>

<div class="max-w-screen-xl p-4 bg-gray-800 mx-auto px-4 sm:px-6 lg:px-8 relative py-26 lg:mt-20 mt-6">
    <div class="relative">
        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="lg:col-start-2 lg:max-w-2xl ml-auto">
                <p class="text-xl leading-6 text-indigo-500 font-semibold uppercase">
                    {{ __("Skills") }}
                </p>
                <h4 class="mt-2 text-3xl leading-8 font-extrabold text-white sm:text-3xl sm:leading-9 font-bebas-neue">
                    {{ __("Multiple languages and many core design elements") }}
                </h4>
                <p class="mt-4 text-lg leading-6 text-gray-300 font-mono">
                    {{ __("I can use many different frameworks and languages, as well as numerous design concepts such as oriented-object programming and proper UI/UX design") }}
                </p>
                <ul class="mt-8 md:grid md:grid-cols-2 gap-6 font-mono">
                    <li class="mt-6 lg:mt-0 hover:scale-105 transition-all duration-500">
                        <div class="flex">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-500 drark:bg-transparent">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base leading-6 font-medium text-gray-200">
                                {{ __("PHP, Python, C++, SwiftUI, MySQL") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 lg:mt-0 hover:scale-105 transition-all duration-500">
                        <div class="flex">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-500 drark:bg-transparent">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base leading-6 font-medium text-gray-200">
                                {{ __("HTML, CSS, JavaScript") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 lg:mt-0 hover:scale-105 transition-all duration-500">
                        <div class="flex">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-500 drark:bg-transparent">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base leading-6 font-medium text-gray-200">
                                {{ __("jQuery, Zepto.js, Bootstrap, Tailwind CSS, Laravel") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 lg:mt-0 hover:scale-105 transition-all duration-500">
                        <div class="flex">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-500 drark:bg-transparent">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base leading-6 font-medium text-gray-200">
                                {{ __("Extensive knowledge of Linux and its innerworkings") }}
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-10 lg:-mx-4 relative relative-20 lg:mt-0 lg:col-start-1">
                <div class="relative space-y-4">
                    <div class="flex items-end justify-center lg:justify-start space-x-4">
                        <img class="rounded-lg shadow-lg w-32 md:w-56 hover:scale-105 transition-all duration-500" width="200" src="/cdn/laravel.jpg" alt="1"/>
                        <img class="rounded-lg shadow-lg w-40 md:w-64 hover:scale-105 transition-all duration-500" width="260" src="/cdn/swiftui.jpeg" alt="2"/>
                    </div>
                    <div class="flex items-start justify-center lg:justify-start space-x-4 ml-12">
                        <img class="rounded-lg shadow-lg w-24 md:w-40 hover:scale-105 transition-all duration-500" width="170" src="/cdn/linux.jpg" alt="3"/>
                        <img class="rounded-lg shadow-lg w-32 md:w-56 hover:scale-105 transition-all duration-500" width="200" src="/cdn/javascript.png" alt="4"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative bg-gray-800 p-4 px-4 sm:px-6 lg:px-8 mt-6">
    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
        <div class="mt-10 -mx-4 md:-mx-12 relative lg:mt-0 lg:col-start-2">
            <img src="/cdn/shaders.jpg" alt="illustration" class="relative mx-auto shadow-lg rounded w-auto"/>
        </div>
        <div class="lg:col-start-1 md:px-20 mt-8 lg:mt-0">
            <h4 class="text-3xl leading-8 font-extrabold text-white tracking-tight sm:leading-9">
                {{ __("My experience with Minecraft servers") }}
            </h4>
            <ul class="mt-10">
                <li class="hover:translate-x-5 transition-all duration-500">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wrench h-6 w-6" viewBox="0 0 16 16">
                                    <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 text-white font-bold">
                                {{ __("Modding") }}
                            </h5>
                            <p class="mt-2 text-base leading-6 text-gray-300 font-mono">
                                {{ __("I can install and deploy mods on server or multiplayer. I understand how mixins work and how to properly configure mods to work well with the game.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 hover:translate-x-5 transition-all duration-500">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-terminal h-6 w-6" viewBox="0 0 16 16">
                                    <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 text-white font-bold">
                                {{ __("Plugins") }}
                            </h5>
                            <p class="mt-2 text-base leading-6 text-gray-300 font-mono">
                                {{ __("I have good knowledge of plugins and general administration of Minecraft servers. I have experience with managing a community (see my current running server)") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 hover:translate-x-5 transition-all duration-500">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg width="20" height="20" fill="currentColor" class="h-6 w-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 text-white font-bold">
                                {{ __("Troubleshooting & fixing issues") }}
                            </h5>
                            <p class="mt-2 text-base leading-6 text-gray-300 font-mono">
                                {{ __("I am able to quickly diagnose issues and to take steps towards resolving them, as well as preventing them from happening in the first place") }}
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
    </div>
</div>

@include("components.footer")
@endsection