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

<script>
	$(() => {
		$("#betaPageModal").trigger("modal:toggle");
		$("#betaPageModal").on("modal:confirm", function() {
			Cookies.set("beta-page-modal-dismissed", true)
		});
	});
</script>
@endsection