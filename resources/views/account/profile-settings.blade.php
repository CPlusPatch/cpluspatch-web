@extends("layouts.app")

@section("title", "Account settings")

@section("content")
@include("components.nav")

<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
<style>
.filepond--root {
	width:100px;
	margin: 0 auto;
	font-size: 0.8rem;
}

.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	background-color: #edf0f4;
}
</style>

<div class="bg-gray-800 flex relative z-20 items-center overflow-hidden">
    <div class="container mx-auto px-6 md:px-24 lg:px-48 relative py-16">
		<div class="container flex items-center">
			<h3 class="text-3xl text-white uppercase font-black shrink-0">Profile image</h3>
			<div class="grow w-full mx-10 h-3 bg-white"></div>
		</div>
		<div class="container flex flex-row mt-5">
			<div class="w-1/4">
				<input type="file" name="file" class="filepond filepond-input text-sm" accept="image/png, image/jpeg, image/gif"/>
			</div>
			<div class="w-3/4 flex items-center">
				<button class="text-sm change-image-button uppercase py-2 px-3 rounded-lg bg-indigo-500 border-2 border-transparent text-white text-md mr-4 hover:bg-indigo-400 transition-all duration-200 hover:scale-105 disabled:bg-gray-400 disabled:hover:bg-gray-400 disabled:hover:scale-100" disabled="disabled">Change profile image</button>
			</div>
		</div>
	</div>
</div>

<!-- FilePond lib -->
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<!-- FilePond plugins -->
<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<script>
	$(() => {
		FilePond.registerPlugin(
			FilePondPluginFileEncode,
			FilePondPluginFileValidateType,
			FilePondPluginImageExifOrientation,
			FilePondPluginImagePreview,
			FilePondPluginImageCrop,
			FilePondPluginImageResize,
			FilePondPluginImageTransform
		);

		FilePond.setOptions({
			server: {
				url: '/cdn',
				process: '/upload',
				revert: '/delete',
				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				}
			}
		});
		// Select the file input and use 
		// create() to turn it into a pond
		FilePond.create(
			document.querySelector('.filepond-input'),
			{
				labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
				imagePreviewHeight: 100,
				imageCropAspectRatio: '1:1',
				imageResizeTargetWidth: 200,
				imageResizeTargetHeight: 200,
				stylePanelLayout: 'compact circle',
				styleLoadIndicatorPosition: 'center bottom',
				styleProgressIndicatorPosition: 'right bottom',
				styleButtonRemoveItemPosition: 'left bottom',
				styleButtonProcessItemPosition: 'center bottom',
			},
		);

		$(document).on("FilePond:processfiles", () => {
			$(".change-image-button").prop("disabled", false).text("Change profile image").on("click", () => {
				console.log($(".filepond--data input[name=file]").attr("value"));
				$.post({
					url: "/account/change-avatar",
					data: {
						file: $(".filepond--data input[name=file]").attr("value")
					},
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}'
					}
				}).done(() => {
					$(".change-image-button").text("Avatar changed!").prop("disabled", true);
				});
			});
		})
	});

</script>
@endsection