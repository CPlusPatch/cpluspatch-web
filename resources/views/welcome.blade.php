@extends("layouts.app")

@section("title", "Home")

@section("content")

<?php
/* if (isset($_COOKIE["alpha-warning-dismissed"])) {
    $alert_cookie = $_COOKIE["alpha-warning-dismissed"];
}
else {
    $alert_cookie = false;
}*/
?>
{{-- @if ($alert_cookie != true)
    @include("components.warning-banner")
@endif --}}

@include("components.nav")
<div class="relative z-20 flex items-center overflow-hidden bg-gray-800">
    <div class="container relative flex px-6 py-16 mx-auto">
        <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-2/5">
            <span class="w-20 h-2 mb-12 bg-white">
            </span>
            <h1 id="main-title" class="inline text-5xl font-black leading-none text-white uppercase font-bebas-neue sm:text-8xl">
                {{ __("CPlusPatch") }}
                <span class="text-4xl sm:text-7xl">
                    {{ __("Web dev and gaming") }}
                </span>
            </h1>
            <p class="mt-8 font-mono text-sm text-white sm:text-base">
                {{ __("Official page for my projects and stuff") }}
            </p>
            <div class="flex flex-wrap gap-4 mt-8">
                <a href="/projects"
                    class="px-4 py-2 mr-4 text-white uppercase transition-all duration-200 bg-indigo-500 border-2 border-transparent rounded-lg text-md hover:bg-indigo-400 hover:scale-105">
                    {{ __("Check out my stuff") }}
                </a>
                <a href="#footer"
                    class="px-4 py-2 text-white uppercase transition-all duration-200 bg-transparent border-2 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:text-white text-md hover:scale-105">
                    {{ __("My socials") }}
                </a>
            </div>
        </div>
        <div class="relative hidden lg:block sm:w-1/3 lg:w-3/5">
            <img src="/images/macbook-hero.png" class="m-auto translate-x-56 h-[31rem]" />
        </div>
    </div>

</div>

<div class="relative max-w-screen-xl p-4 px-4 mx-auto mt-6 bg-gray-800 sm:px-6 lg:px-8 py-26 lg:mt-20">
    <div class="relative">
        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="ml-auto lg:col-start-2 lg:max-w-2xl">
                <p class="text-xl font-semibold leading-6 text-indigo-500 uppercase">
                    {{ __("Skills") }}
                </p>
                <h4 class="mt-2 text-3xl font-extrabold leading-8 text-white sm:text-3xl sm:leading-9 font-bebas-neue">
                    {{ __("Multiple languages and many core design elements") }}
                </h4>
                <p class="mt-4 font-mono text-lg leading-6 text-gray-300">
                    {{ __("I can use many different frameworks and languages, as well as numerous design concepts such as oriented-object programming and proper UI/UX design") }}
                </p>
                <ul class="gap-6 mt-8 font-mono md:grid md:grid-cols-2">
                    <li class="mt-6 transition-all duration-200 lg:mt-0 hover:scale-105">
                        <div class="flex">
                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 text-green-500 bg-green-100 rounded-full drark:bg-transparent">
                                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base font-medium leading-6 text-gray-200">
                                {{ __("PHP, Python, C++, SwiftUI, MySQL") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 transition-all duration-200 lg:mt-0 hover:scale-105">
                        <div class="flex">
                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 text-green-500 bg-green-100 rounded-full drark:bg-transparent">
                                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base font-medium leading-6 text-gray-200">
                                {{ __("HTML, CSS, JavaScript") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 transition-all duration-200 lg:mt-0 hover:scale-105">
                        <div class="flex">
                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 text-green-500 bg-green-100 rounded-full drark:bg-transparent">
                                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base font-medium leading-6 text-gray-200">
                                {{ __("jQuery, Zepto.js, Bootstrap, Tailwind CSS, Laravel") }}
                            </span>
                        </div>
                    </li>
                    <li class="mt-6 transition-all duration-200 lg:mt-0 hover:scale-105">
                        <div class="flex">
                            <span class="flex items-center justify-center flex-shrink-0 w-6 h-6 text-green-500 bg-green-100 rounded-full drark:bg-transparent">
                                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-4 text-base font-medium leading-6 text-gray-200">
                                {{ __("Extensive knowledge of Linux and its innerworkings") }}
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative mt-10 lg:-mx-4 relative-20 lg:mt-0 lg:col-start-1">
                <div class="relative space-y-4">
                    <div class="flex items-end justify-center space-x-4 lg:justify-start">
                        <img class="w-32 transition-all duration-200 rounded-lg shadow-lg md:w-56 hover:scale-105" width="200" src="/images/laravel.jpg" alt="1"/>
                        <img class="w-40 transition-all duration-200 rounded-lg shadow-lg md:w-64 hover:scale-105" width="260" src="/images/swiftui.jpeg" alt="2"/>
                    </div>
                    <div class="flex items-start justify-center ml-12 space-x-4 lg:justify-start">
                        <img class="w-24 transition-all duration-200 rounded-lg shadow-lg md:w-40 hover:scale-105" width="170" src="/images/linux.jpg" alt="3"/>
                        <img class="w-32 transition-all duration-200 rounded-lg shadow-lg md:w-56 hover:scale-105" width="200" src="/images/javascript.png" alt="4"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative p-4 px-4 mt-10 bg-gray-800 sm:px-6 lg:px-8">
    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-36 lg:items-center">
        <div class="relative mt-10 -mx-4 overflow-hidden md:-mx-12 lg:mt-0 lg:col-start-2 max-h-[40rem]">
            <img src="/images/servers.png" alt="illustration" class="relative w-auto mx-auto rounded shadow-lg"/>
        </div>
        <div class="mt-8 lg:col-start-1 md:px-28 lg:mt-0">
            <h4 class="text-3xl font-extrabold leading-8 tracking-tight text-white sm:leading-9">
                {{ __("My experience with Linux and servers") }}
            </h4>
            <ul class="mt-10">
                <li class="transition-all duration-500 hover:translate-x-5">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-6 h-6 bi bi-wrench" viewBox="0 0 16 16">
                                    <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg font-bold leading-6 text-white">
                                {{ __("Installation") }}
                            </h5>
                            <p class="mt-2 font-mono text-base leading-6 text-gray-300">
                                {{ __("Setting up and installing Linux on your machine has become fairly simple nowadays, but using a command line can sometimes confuse people. I know how a computer works and how to install just about any OS to one.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 transition-all duration-500 hover:translate-x-5">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-6 h-6 bi bi-terminal" viewBox="0 0 16 16">
                                    <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg font-bold leading-6 text-white">
                                {{ __("Dev") }}
                            </h5>
                            <p class="mt-2 font-mono text-base leading-6 text-gray-300">
                                {{ __("I know how to use a CLI and comfortably use *nix-based systems, such as Linux and MacOS. I can also install just about anything on Debian-based distros, like server software or regular apps.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 transition-all duration-500 hover:translate-x-5">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                                <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg font-bold leading-6 text-white">
                                {{ __("PC experience") }}
                            </h5>
                            <p class="mt-2 font-mono text-base leading-6 text-gray-300">
                                {{ __("I have experience with Windows, Linux (Debian-based) and MacOS: I have used each of these platforms for at least a year each and am comfortable with using them as my \"daily drivers\".") }}
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
    </div>
</div>

<!-- TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
	var typewriter = new Typewriter("#main-title", {
		loop: false,
		delay: 75
	});

	typewriter
		.pauseFor(500)
		.typeString('CPlusPatch')
		.typeString('<span class="inline text-4xl sm:text-7xl"> {{ __("Web dev and gaming") }} </span>')
		.start();
</script>

@include("components.footer")
@endsection