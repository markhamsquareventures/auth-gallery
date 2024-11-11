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

<body class="font-instrument-sans text-white antialiased">
    <div
        class="min-h-screen flex flex-col justify-between sm:justify-normal items-center pt-4 sm:p-4 bg-zinc-950">
        <div class="justify-self-start">
            <a href="/">
                <x-pepper.application-logo />
            </a>
        </div>

        <div class="sm:flex sm:flex-col sm:items-center sm:justify-center sm:flex-1 w-full">
            <div class="sm:max-w-md w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
