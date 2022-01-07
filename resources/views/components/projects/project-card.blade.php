<div class="overflow-hidden shadow-lg rounded-lg h-90 w-80 cursor-pointer m-auto hover:scale-105 hover:shadow-3xl hover:-translate-y-5 transition-all duration-1000">
	<a href="#" class="w-full block h-full">
		<img alt="blog photo" src="{{ $bg }}" class="max-h-40 w-full object-cover" />
		<div class="bg-gray-700 w-full p-4">
			<p class="text-indigo-500 text-md font-medium">
				{{ $category }}
			</p>
			<p class="text-white text-xl font-medium mb-2">
				{{ $title }}
			</p>
			<p class="text-gray-300 font-light text-md">
				{{ $desc }}
			</p>
			<div class="flex items-center mt-4">
				<div href="#" class="block relative">
					<img alt="Profile" src="/cdn/d5ac37a5-b776-437b-9034-e7e2772502c0.jpg"
						class="mx-auto object-cover rounded-full h-10 w-10"/>
				</div>
				<div class="flex flex-col justify-between ml-4 text-sm">
					<p class="text-white">
						CPlusPatch
					</p>
					<p class="text-gray-300">
						{{ $date }}
					</p>
				</div>
			</div>
		</div>
	</a>
</div>