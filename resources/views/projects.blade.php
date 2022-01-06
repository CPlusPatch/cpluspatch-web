@extends("layouts.app")

@section("title", "Socials")

@section("content")
@include("components.nav")

<?php
if (isset($_COOKIE["beta-page-modal-dismissed"])) {
    $betaModalCookie = $_COOKIE["beta-page-modal-dismissed"];
}
else {
    $betaModalCookie = false;
}
?>
@if ($betaModalCookie != true)
@include("components.modals.confirm", ["id" => "betaPageModal", "title" => "Page in construction", "text" => "This page is currently under construction", "btnConfirm" => "OK"])
@endif
<div class="bg-gray-800 flex relative z-20 items-center overflow-hidden">
	<div class="container mx-auto px-6 relative py-16">
		<div class="pb-10">
			<h1 class="font-black text-white uppercase  text-3xl sm:text-8xl font-bebas-neue">I'm working on</h1>
		</div>

		<div class="overflow-hidden shadow-lg rounded-lg h-90 w-80 cursor-pointer m-auto">
			<a href="#" class="w-full block h-full">
				<img alt="blog photo" src="/cdn/cppwebmaker_bg.jpg" class="max-h-40 w-full object-cover" />
				<div class="bg-gray-700 w-full p-4">
					<p class="text-indigo-500 text-md font-medium">
						Project
					</p>
					<p class="text-white text-xl font-medium mb-2">
						CPlusPatch WebMaker
					</p>
					<p class="text-gray-300 font-light text-md">
						One of my first big projects, rewritten many times as I gain more skills and now being remade in Laravel and TailwindCSS (ETA a few months)
					</p>
					<div class="flex items-center mt-4">
						<div href="#" class="block relative">
							<img alt="Profile" src="/cdn/d5ac37a5-b776-437b-9034-e7e2772502c0.jpg"
								class="mx-auto object-cover rounded-full h-10 w-10"/>
						</div>
						<div class="flex flex-col justify-between ml-4 text-sm">
							<p class="text-white">
								CPlusPatch
							</p>
							<p class="text-gray-300">
								2018 - 2022
							</p>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</div>

<script>
	$(() => {
		$("#betaPageModal").trigger("modal:toggle");
		$("#betaPageModal").on("modal:confirm", function () {
			Cookies.set("beta-page-modal-dismissed", true)
		});
	});
</script>
@endsection