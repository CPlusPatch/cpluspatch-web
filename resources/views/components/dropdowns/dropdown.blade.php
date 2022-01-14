<script>
$(() => {
	$("[data-gw-toggle=dropdown]").on("click", function() {
		if (this.dataset.toggled == "false") {
			$(this.dataset.toggles).addClass("flex").slideDown();
			this.dataset.toggled = "true";
		}
		else {
			$(this.dataset.toggles).slideUp().removeClass("flex");
			this.dataset.toggled = "false";
		}
	});
});
</script>