@extends("layouts.app")

@section("title", "Socials")

@section("content")
@include("components.nav")

<?php
/* if (isset($_COOKIE["beta-page-modal-dismissed"])) $betaModalCookie = $_COOKIE["beta-page-modal-dismissed"];
else $betaModalCookie = false; */
?>
{{-- @if ($betaModalCookie != true)
@include("components.modals.confirm", ["id" => "betaPageModal", "title" => "Page in construction", "text" => "This page is currently under construction", "btnConfirm" => "OK"])
@endif --}}
<div class="relative z-20 flex items-center overflow-hidden bg-gray-800"> 
	<div class="container relative px-6 py-16 mx-auto">
		<div class="pb-10">
			<h1 class="text-3xl font-black text-white uppercase md:text-8xl font-bebas-neue">I'm working on</h1>
		</div>
		<div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
			@include("components.projects.project-card", ["bg" => "/images/cppwebmaker_bg.jpg", "category" => "Project", "title" => "CPlusPatch WebMaker", "desc" => "One of my first big projects, rewritten many times as I gain more skills and now being remade in Laravel and TailwindCSS (ETA a few months).", "date" => "2019 - 2022"])
			@include("components.projects.project-card", ["bg" => "/images/cppweb-banner.jpg", "category" => "Project", "title" => "CPlusPatch.com", "desc" => "My own website (developed in Laravel and TailwindCSS). I use it to keep all of my projects and for my public facade. My latest project.", "date" => "2021 - 2022", "link" => "https://cpluspatch.com"])
			@include("components.projects.project-card", ["bg" => "/images/discord-bot-demo.png", "category" => "Project", "title" => "Discord bot", "desc" => "I made a bot. All it does is make bad jokes really. Also it sends meme and cringe pics when asked to. Peak coding.", "date" => "2022", "link" => "https://github.com/CPlusPatch/cpluspatch-bot", "linkText" => "GitHub repo"])
			@include("components.projects.project-card", ["bg" => "/images/discord-status-slideshow-banner.gif", "category" => "Project", "title" => "Discord status slideshow", "desc" => "A simple Node.js program that changes your currently playing status to cool things after a few seconds. It's a slideshow!", "date" => "2022", "link" => "https://github.com/CPlusPatch/discord-status-slideshow", "linkText" => "GitHub repo"])
		</div>
	</div>
</div>
@include("components.footer")

<script>
	$(() => {
		$("#betaPageModal").trigger("modal:toggle");
		$("#betaPageModal").on("modal:confirm", function () {
			Cookies.set("beta-page-modal-dismissed", true)
		});
	});
</script>
@endsection