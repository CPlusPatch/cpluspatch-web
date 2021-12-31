@extends("layouts.app")

@section("title", "Socials")

@section("content")
	@include("components.nav")

<div class="container mx-auto">
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/discord.webp", "name" => "Discord", "username" => "CPlusPatch<b>#9373</b>", "copy" => "CPlusPatch#9373"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/github.svg", "name" => "GitHub", "username" => "CPlusPatch", "copy" => "https://github.com/CPlusPatch"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/reddit.png", "name" => "Reddit", "username" => "Gascraft971", "copy" => "https://www.reddit.com/user/Gascraft971"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/spotify.jpg", "name" => "Spotify", "username" => "CPlusPatch", "copy" => "https://open.spotify.com/user/ulzj1q1muil9sjy87f4krzdoa"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/steam.png", "name" => "Steam", "username" => "CPlusPatch", "copy" => "https://steamcommunity.com/id/cpluspatch/"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/twitch.jpg", "name" => "Twitch", "username" => "CPlusPatch", "copy" => "https://www.twitch.tv/cpluspatch"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/twitter.png", "name" => "Twitter", "username" => "CPlusPatch", "copy" => "https://twitter.com/CPlusPatch"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/instagram.png", "name" => "Instagram", "username" => "gaspard_wski", "copy" => "https://www.instagram.com/gaspard_wski/"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/mail.png", "name" => "Mail (Personal)", "username" => "gascraft971@gmail.com", "copy" => "gascraft971@gmail.com"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/mail.png", "name" => "Mail (Work)", "username" => "gaspard.wierzbinski<br/>@gmail.com", "copy" => "contact@cpluspatch.com"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/youtube.png", "name" => "YouTube", "username" => "CPlusPatch 2544", "copy" => "https://www.youtube.com/channel/UC-EH3na_o6uyVD6tmTZoaOA"])
	@include("components.socials.profile", ["url" => "#", "logo" => "/cdn/dndbeyond.png", "name" => "D&D Beyond", "username" => "CPlusPatch4502", "copy" => "https://www.dndbeyond.com/members/CPlusPatch4502"])
</div>
</div>

<script>
	document.querySelectorAll("[data-copy]").forEach(element => {
		element.onclick = function() {
			navigator.clipboard.writeText(element.dataset.copy);
			element.textContent = "Copied!"
		}
	});
</script>
@endsection