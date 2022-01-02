<a href="{{ $url }}" class="shadow-xl rounded-xl w-80 p-4 bg-gray-700">
	<div class="flex flex-row items-start gap-4">
		<img src="{{ $logo }}" class="w-28 h-28 rounded-lg"/>
		<div class="h-28 w-full flex flex-col justify-between">
			<div>
				<p class="text-white text-xl font-medium">
					{{ $name }}
				</p>
				<p class="text-gray-400 text-xs">
					{!! $username !!}
				</p>
			</div>
			<button type="button" class="w-full px-4 py-2 text-base rounded-md text-white bg-indigo-500 hover:bg-indigo-700" data-copy="{{ $copy }}">
				<i class="bi-clipboard"></i> Copy
			</button>
		</div>
	</div>
</a>