<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CPlusPatch &middot; @yield("title")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<main class="dark:bg-gray-800 bg-white relative overflow-hidden h-screen">
		@yield("content")
	</main>
</body>

</html>