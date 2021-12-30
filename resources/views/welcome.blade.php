<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>

<body>

    <main class="dark:bg-gray-800 bg-white relative overflow-hidden h-screen">
        <header class="h-24 sm:h-32 flex items-center z-30 w-full">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                    CPLUSPATCH
                </div>
                <div class="flex items-center">
                    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                        <a href="#" class="py-2 px-6 flex">
                            Home
                        </a>
                        <a href="#" class="py-2 px-6 flex">
                            Socials
                        </a>
                        <a href="#" class="py-2 px-6 flex">
                            Projects
                        </a>
                        <a href="#" class="py-2 px-6 flex">
                            Contact
                        </a>
                    </nav>
                    <button class="lg:hidden flex flex-col ml-4">
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                    </button>
                </div>
            </div>
        </header>
        <div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex relative py-16">
                <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                    <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
                    </span>
                    <h1
                        class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                        Gaspard
                        <span class="text-5xl sm:text-7xl">
                            Wierzbinski
                        </span>
                    </h1>
                    <p class="text-sm sm:text-base text-gray-700 dark:text-white mt-8">
                        My projects and my stuff is here
                    </p>
                    <div class="flex mt-8">
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            Check out my stuff
                        </a>
                        <a href="#"
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
    </main>
</body>

</html>