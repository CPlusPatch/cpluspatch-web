<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full h-full">

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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500;900&display=swap" rel="stylesheet"> 
</head>

<body class="w-full h-full">
	<main class="relative h-screen overflow-scroll bg-gray-900">
		@yield("content")
	</main>
	<script src="{{ asset("js/js.cookie.min.js") }}"></script>
</body>
</html>