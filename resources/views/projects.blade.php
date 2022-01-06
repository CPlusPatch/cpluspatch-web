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
			<h1 class="font-black text-white uppercase  text-3xl md:text-8xl font-bebas-neue">I'm working on</h1>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
			@include("components.projects.project-card", ["bg" => "/cdn/cppwebmaker_bg.jpg", "category" => "Project", "title" => "CPlusPatch WebMaker", "desc" => "One of my first big projects, rewritten many times as I gain more skills and now being remade in Laravel and TailwindCSS (ETA a few months).", "date" => "2019 - 2022"])
			@include("components.projects.project-card", ["bg" => "/cdn/cppweb-banner.jpg", "category" => "Project", "title" => "CPlusPatch.com", "desc" => "My own website (developed in Laravel and TailwindCSS). I use it to keep all of my projects and for my public facade.", "date" => "2021 - 2022"])
			@include("components.projects.project-card", ["bg" => "/cdn/mc-server-banner.png", "category" => "Project", "title" => "Minecraft server", "desc" => "Yes, I do run my own Minecraft server. If you are interested in it, please feel free to mail me or PM me on Discord. The server is Bedrock compatible.", "date" => "2021 - 2022"])
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