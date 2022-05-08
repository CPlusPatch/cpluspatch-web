<div class="w-full p-4 bg-gray-800 rounded-lg shadow-lg md:mt-0 mt-2">
	<div class="flex items-center justify-between mb-6">
		<div class="flex items-center">
			<span class="relative overflow-hidden rounded-lg"><img class="w-16 h-16" src="{{ $icon }}"/></span>
			<div class="flex flex-col">
				<span class="ml-2 font-bold text-white">{{ $name }}</span>
				<span class="ml-2 text-sm text-white">{{ $desc }}</span>
			</div>
		</div>
	</div>
	{{ $slot }}
</div>