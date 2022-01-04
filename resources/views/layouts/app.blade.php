<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full w-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">

    <title>CPlusPatch &middot; @yield("title")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;700&display=swap" rel="stylesheet">
	<!-- TailwindCSS -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
</head>

<body class="h-full w-full">
	<main class="bg-gray-800 relative overflow-scroll h-screen">
		@yield("content")
	</main>
	<script src="{{ asset("js/js.cookie.min.js") }}"></script>
</body>
</html>