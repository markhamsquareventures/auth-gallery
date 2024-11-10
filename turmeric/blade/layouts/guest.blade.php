<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=instrument-sans:400,400i,500,500i,600,600i,700,700i|instrument-serif:400,400i"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-instrument-sans text-stone-900 antialiased">
    <div class="min-h-screen grid grid-cols-12 p-4 bg-turmeric dark:bg-turmeric-dark bg-amber-100 dark:bg-stone-900">
        {{ $slot }}
    </div>
</body>

</html>
