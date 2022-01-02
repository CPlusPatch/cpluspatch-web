<header class="h-24 sm:h-32 flex items-center z-30 w-full">
	<div class="container mx-auto px-6 flex items-center justify-between">
		<div class="uppercase text-white font-black text-3xl">
			CPLUSPATCH
		</div>
		<div class="flex items-center">
			<nav class="font-thin text-white uppercase text-lg lg:flex items-center hidden">
				<a href="/" class="py-2 px-6 flex">
					Home
				</a>
				<a href="/socials" class="py-2 px-6 flex">
					Socials
				</a>
				<a href="/projects" class="py-2 px-6 flex">
					Projects
				</a>
				<a href="/socials?use-this-page-you-fool=1" class="py-2 px-6 flex">
					Contact
				</a>
			</nav>
			<button class="lg:hidden flex flex-col ml-4" data-mobile-navbar-toggle="#mobileNavbarContent" data-toggled="false">
				<span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
				</span>
				<span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
				</span>
				<span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
				</span>
			</button>
			<a href="#" class="block relative">
				<img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-lg h-16 w-16 "/>
			</a>
		</div>
	</div>
</header>
<nav id="mobileNavbarContent" class="px-6 font-thin text-white uppercase text-lg lg:flex items-center" style="display: none;">
	<a href="/" class="py-2 px-6 flex">
		Home
	</a>
	<a href="/socials" class="py-2 px-6 flex">
		Socials
	</a>
	<a href="/projects" class="py-2 px-6 flex">
		Projects
	</a>
	<a href="/socials?use-this-page-you-fool=1" class="py-2 px-6 flex">
		Contact
	</a>
</nav>

<script>
	$(() => {
		$("[data-mobile-navbar-toggle]").on("click", function() {
			if (this.dataset.toggled == "false") {
				this.dataset.toggled = "true";
				$(this.dataset.mobileNavbarToggle).slideDown()
			}
			else {
				this.dataset.toggled = "false";
				$(this.dataset.mobileNavbarToggle).slideUp();
			}
		});
	});
</script>