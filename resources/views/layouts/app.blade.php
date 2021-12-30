<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full w-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CPlusPatch &middot; @yield("title")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
	<!-- TailwindCSS -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="h-full w-full">
	<main class="dark:bg-gray-800 bg-white relative overflow-scroll h-screen">
		@yield("content")
	</main>
</body>

</html>