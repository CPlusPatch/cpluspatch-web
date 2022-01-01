@extends("layouts.app")

@section("title", "Socials")

@section("content")
@include("components.nav")


<div class="sm:flex flex-wrap justify-center items-center gap-8">
	<div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 mt-6  shadow-lg rounded-lg bg-gray-700 transition-transform duration-700 hover:-translate-y-4">
		<div>
			<img src="https://via.placeholder.com/1600x900.png" class="rounded-lg"/>
		</div>
		<h2 class="text-3xl sm:text-xl font-bold text-white py-4 uppercase" style="font-family: 'Nunito'">
			CPP WebMaker
		</h2>
		<p class="text-md text-white py-4">
			A retarded webmaker to make web pages. It isn't even stable yet so I won't be putting it here. Still, it exists
		</p>
	</div>
	<div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 mt-6  shadow-lg rounded-lg bg-gray-700 transition-transform duration-700 hover:-translate-y-4">
		<div>
			<img src="/cdn/cppweb-banner.jpg" class="rounded-lg"/>
		</div>
		<h3 class="text-3xl sm:text-xl font-bold text-white py-4 uppercase" style="font-family: 'Nunito'">
			CPlusPatch.com
		</h3>
		<p class="text-md text-white py-4">
			My own website.<br/>
			Made using Laravel, Tailwind CSS, MySQL and jQuery.
		</p>
		<div class="flex justify-center">
			<a href="https://cpluspatch.com" class="uppercase my-2 py-2 px-4 rounded-lg bg-indigo-500 border-2 border-transparent text-white text-md mr-4 hover:bg-indigo-400 transition-all duration-200">
				Visit
			</a>
		</div>
	</div>
</div>

@endsection