<script>
$(() => {
	$("[data-gw-toggle=dropdown]").on("click", function() {
		if (this.dataset.toggled == "false") {
			$(this.dataset.toggles).slideDown();
			this.dataset.toggled = "true";
		}
		else {
			$(this.dataset.toggles).slideUp();
			this.dataset.toggled = "false";
		}
	});
});
</script>