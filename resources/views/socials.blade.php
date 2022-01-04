@extends("layouts.app")

@section("title", "Socials")

@section("content")
	@if (Request::get("use-this-page-you-fool") == 1)
	<div role="alert" style="width: 100vw;" class="container-fluid bg-blue-500 flex items-center text-white text-sm font-bold px-4 py-2 relative">
		<svg width="20" height="20" fill="currentColor" class="w-4 h-4 mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
			<path d="M1216 1344v128q0 26-19 45t-45 19h-512q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64v-384h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h384q26 0 45 19t19 45v576h64q26 0 45 19t19 45zm-128-1152v192q0 26-19 45t-45 19h-256q-26 0-45-19t-19-45v-192q0-26 19-45t45-19h256q26 0 45 19t19 45z">
			</path>
		</svg>
		<p>
			Use this page for contact you fool
		</p>
	</div>
	@endif

	@include("components.nav")


<div class="container mx-auto">
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/discord.webp", "name" => "Discord", "username" => "CPlusPatch<b>#9373</b>", "copy" => "CPlusPatch#9373"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/github.svg", "name" => "GitHub", "username" => "CPlusPatch", "copy" => "https://github.com/CPlusPatch"])
	{{-- @include("components.socials.profile", ["url" => "#", "logo" => "/cdn/reddit.png", "name" => "Reddit", "username" => "Gascraft971", "copy" => "https://www.reddit.com/user/Gascraft971"]) --}}
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/spotify.jpg", "name" => "Spotify", "username" => "CPlusPatch", "copy" => "https://open.spotify.com/user/ulzj1q1muil9sjy87f4krzdoa"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/steam.png", "name" => "Steam", "username" => "CPlusPatch", "copy" => "https://steamcommunity.com/id/cpluspatch/"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/twitch.jpg", "name" => "Twitch", "username" => "CPlusPatch", "copy" => "https://www.twitch.tv/cpluspatch"])
	{{-- @include("components.socials.profile", ["url" => "#", "logo" => "/cdn/twitter.png", "name" => "Twitter", "username" => "CPlusPatch", "copy" => "https://twitter.com/CPlusPatch"]) --}}
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/instagram.png", "name" => "Instagram", "username" => "gaspard_wski", "copy" => "https://www.instagram.com/gaspard_wski/"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/mail.png", "name" => "Mail (Personal)", "username" => "gascraft971@gmail.com", "copy" => "gascraft971@gmail.com"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/mail.png", "name" => "Mail (Work)", "username" => "contact@cpluspatch.com", "copy" => "contact@cpluspatch.com"])
	{{-- @include("components.socials.profile", ["url" => "#", "logo" => "/cdn/youtube.png", "name" => "YouTube", "username" => "CPlusPatch 2544", "copy" => "https://www.youtube.com/channel/UC-EH3na_o6uyVD6tmTZoaOA"]) --}}
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/dndbeyond.png", "name" => "D&D Beyond", "username" => "CPlusPatch4502", "copy" => "https://www.dndbeyond.com/members/CPlusPatch4502"])
</div>
</div>

<script>
	$(() => {
		$("[data-copy]").on("click", function() {
			navigator.clipboard.writeText(this.dataset.copy);
			$(this).text("Copied!");
		})
	});
</script>
@endsection