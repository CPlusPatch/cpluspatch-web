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
				{{-- <a href="/socials" class="py-2 px-6 flex">
					Socials
				</a> --}}
				<a href="/projects" class="py-2 px-6 flex">
					Projects
				</a>
				<a href="/socials?use-this-page-you-fool=1" class="py-2 px-6 flex">
					Contact
				</a>
				@if(!Auth::check())
				{{-- <a href="{{ route("login") }}" class="py-2 px-6 flex">Login</a> --}}
				@endif
			</nav>
			<button class="lg:hidden flex flex-col mx-4" data-mobile-navbar-toggle="#mobileNavbarContent"
				data-toggled="false">
				<span class="w-6 h-1 bg-white mb-1">
				</span>
				<span class="w-6 h-1 bg-white mb-1">
				</span>
				<span class="w-6 h-1 bg-white mb-1">
				</span>
			</button>
			@if (Auth::check())
			<div class="relative inline-block text-left">
				<button data-gw-toggle="dropdown" data-toggles="#profileOptionsDropdown" data-toggled="false">
					<img alt="Profile image" src="/cdn/{{ Auth::user()->profile_image }}.jpg"
						class="mx-auto object-cover rounded-full h-8 w-8" />
				</button>
				<div id="profileOptionsDropdown" class="origin-top-right flex justify-center items-center dropdown-menu z-40 absolute right-0 hidden w-40">
					<div class="w-full rounded-lg shadow-md mx-0" style="background-image: radial-gradient( circle 610px at 5.2% 51.6%,  rgba(5,8,114,1) 0%, rgba(7,3,53,1) 97.5% );">

						<div class="w-full rounded-lg flex flex-col justify-start items-center" style="background-image: radial-gradient( circle 610px at 5.2% 51.6%,  rgba(5,8,114,1) 0%, rgba(7,3,53,1) 97.5% );">
							<div
								class="container flex flex-col mx-auto w-full items-center justify-center my-auto">
								<ul class="flex flex-col w-11/12">
									<li
										class="flex flex-row mt-2 mb-2 md:shadow-sm md:hover:shadow-lg transition-all duration-800">
										<div
											class="shadow select-none cursor-pointer bg-gray-800 rounded-md flex flex-1 items-center px-4 py-2">
											<div class="flex flex-col w-6 h-6 justify-center items-center mr-4">
												<a href="#" class="block relative">
													<i class="bi bi-image mx-auto object-cover rounded-full h-10 w-10 text-white"></i>
												</a>
											</div>
											<div class="flex-1 pl-1">
												<div class="font-medium text-white">
													Settings
												</div>
											</div>
										</div>
									</li>
									<form method="POST" action="{{ route('logout') }}">
										@csrf

										<li
											class="flex flex-row mb-2 md:shadow-sm md:hover:shadow-lg transition-all">
											<div
												class="shadow select-none cursor-pointer bg-gray-800 hover:bg-red-600 rounded-md flex flex-1 items-center px-4 py-2 transition-all duration-1000"
												onclick="event.preventDefault(); this.closest('form').submit();">
												<div class="flex flex-col w-6 h-6 justify-center items-center mr-4">
													<a href="#" class="block relative">
														<i class="bi bi-box-arrow-right mx-auto object-cover rounded-full h-10 w-10 text-white"></i>
													</a>
												</div>
												<div class="flex-1 pl-1">
													<div class="font-medium text-white">
														Logout
													</div>
												</div>
											</div>
										</li>
									</form>

								</ul>
							</div>
						</div>
					</div>
				</div>
				@include("components.dropdowns.dropdown")
			</div>
			@endif
		</div>
	</div>
</header>
<nav id="mobileNavbarContent" class="px-6 font-thin text-white uppercase text-lg lg:flex items-center"
	style="display: none;">
	<a href="/" class="py-2 px-6 flex">
		Home
	</a>
	{{-- <a href="/socials" class="py-2 px-6 flex">
		Socials
	</a> --}}
	<a href="/projects" class="py-2 px-6 flex">
		Projects
	</a>
	<a href="/socials?use-this-page-you-fool=1" class="py-2 px-6 flex">
		Contact
	</a>
</nav>

<script>
	$(() => {
		$("[data-mobile-navbar-toggle]").on("click", function () {
			if (this.dataset.toggled == "false") {
				this.dataset.toggled = "true";
				$(this.dataset.mobileNavbarToggle).slideDown()
			} else {
				this.dataset.toggled = "false";
				$(this.dataset.mobileNavbarToggle).slideUp();
			}
		});
	});
</script>