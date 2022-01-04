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
						class="mx-auto object-cover rounded-sm h-8 w-8" />
				</button>
				<div id="profileOptionsDropdown"
					class="origin-top-right flex justify-center items-center dropdown-menu z-40 absolute right-0 hidden rounded-tr-none">
					<div class="h-48 w-full absolute flex justify-center items-center">
						<img class="object-cover h-20 w-20 rounded-full"
							src="/cdn/{{ Auth::user()->profile_image }}.jpg" alt="Profile image" />
					</div>

					<div class="h-96 mx-4 w-full bg-gray-400 rounded-lg shadow-md sm:w-80 mx-0">
						<div class="h-1/4 w-full flex justify-between items-baseline px-4 py-2">
							<h1 class="text-white">Profile</h1>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
								stroke="white">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
									d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
							</svg>
						</div>

						<div class="bg-white h-3/4 w-full rounded-lg flex flex-col justify-start items-center">
							{{-- <div class="w-full h-1/2 flex justify-between items-center px-3 pt-2">
								<div class="flex flex-col justify-center items-center">
									<h1 class="text-gray-500 text-xs">——</h1>
									<h1 class="text-gray-600 text-sm">——</h1>
								</div>
								<div class="flex flex-col justify-center items-center">
									<h1 class="text-gray-500 text-xs">——</h1>
									<h1 class="text-gray-600 text-sm">——</h1>
								</div>
							</div> --}}
							<div class="w-full h-1/6 flex flex-col justify-center items-center mt-10">
								<h1 class="text-gray-700 font-bold">{{ Auth::user()->name }}</h1>
								<h1 class="text-gray-500 text-sm">{{  Auth::user()->email }}</h1>
							</div>
							<div
								class="container flex flex-col mx-auto w-full items-center justify-center w-80 my-auto">
								<ul class="flex flex-col w-5/6">
									<li
										class="border-gray-400 flex flex-row mb-2 md:shadow-sm md:hover:shadow-lg transition-all duration-800">
										<div
											class="shadow border select-none cursor-pointer bg-gray-600 rounded-md flex flex-1 items-center p-4">
											<div class="flex flex-col w-6 h-6 justify-center items-center mr-4">
												<a href="#" class="block relative">
													<i
														class="bi bi-image mx-auto object-cover rounded-full h-10 w-10 text-white"></i>
												</a>
											</div>
											<div class="flex-1 pl-1 md:mr-16">
												<div class="font-medium text-white">
													Profile
												</div>
											</div>
										</div>
									</li>
									<form method="POST" action="{{ route('logout') }}">
										@csrf

										<li
											class="border-gray-400 flex flex-row mb-2 md:shadow-sm md:hover:shadow-lg hover:border-red-600 transition-all duration-800">
											<div
												class="shadow border select-none cursor-pointer bg-gray-600 hover:bg-red-600 rounded-md flex flex-1 items-center p-4 transition-all transition-800"
												onclick="event.preventDefault(); this.closest('form').submit();">
												<div class="flex flex-col w-6 h-6 justify-center items-center mr-4">
													<a href="#" class="block relative">
														<i
															class="bi bi-box-arrow-right mx-auto object-cover rounded-full h-10 w-10 text-white"></i>
													</a>
												</div>
												<div class="flex-1 pl-1 md:mr-16">
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