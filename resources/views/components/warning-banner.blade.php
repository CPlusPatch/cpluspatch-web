
<div class="bg-gray-800" id="warning-alpha-banner">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="h-6 w-6 text-white" viewBox="0 0 1792 1792">
                        <path d="M1024 1375v-190q0-14-9.5-23.5t-22.5-9.5h-192q-13 0-22.5 9.5t-9.5 23.5v190q0 14 9.5 23.5t22.5 9.5h192q13 0 22.5-9.5t9.5-23.5zm-2-374l18-459q0-12-10-19-13-11-24-11h-220q-11 0-24 11-10 7-10 21l17 457q0 10 10 16.5t24 6.5h185q14 0 23.5-6.5t10.5-16.5zm-14-934l768 1408q35 63-2 126-17 29-46.5 46t-63.5 17h-1536q-34 0-63.5-17t-46.5-46q-37-63-2-126l768-1408q17-31 47-49t65-18 65 18 47 49z">
                        </path>
                    </svg>
                </span>
                <p class="ml-3 font-medium text-white truncate">
                    <span class="md:hidden">
                        This site is in alpha stage!
                    </span>
                    <span class="hidden md:inline">
                        This site is currently in alpha stage of development. Everything will be broken and look bad
                    </span>
                </p>
            </div>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                <button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-black focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2" data-dismiss="#warning-alpha-banner">
                    <span class="sr-only">
                        Dismiss
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-6 w-6 text-white" viewBox="0 0 1792 1792">
                        <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
	$(() => {
		$("[data-dismiss]").on("click", function() {
			$(this.dataset.dismiss).fadeOut();
			Cookies.set("alpha-warning-dismissed", true)
		});
	});
</script>
