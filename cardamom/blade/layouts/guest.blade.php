<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-neutral-950 antialiased">
    <div class="min-h-screen grid grid-cols-10 bg-lime-100">
        <div class="col-span-10 lg:col-span-5 xl:col-span-4 p-4 2xl:px-12 flex flex-col items-center gap-6">
            <div class="w-full sm:max-w-md">
                <a href="/">
                    <x-cardamom.application-logo class="w-20 h-20" />
                </a>
            </div>

            <div class="w-full flex-1 flex flex-col justify-center items-center">
                <div
                    class="w-full sm:max-w-md p-8 bg-white shadow-[5px_5px_0_rgba(0,0,0,1)] overflow-hidden border-2 border-neutral-950 rounded-md">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <div class="hidden col-span-5 xl:col-span-6 bg-white p-6 2xl:p-8 lg:flex flex-col-reverse gap-6 xl:flex-row justify-start xl:justify-between xl:items-end h-screen">
            <div class="space-y-4 max-w-2xl">
                <h2 class="text-5xl text-neutral-950 font-black">
                Free, handcrafted auth screens for Laravel projects.
                </h2>
                <p class="text-neutral-600 text-lg">
                    – Auth.Gallery
                </p>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 rounded-full border-2 border-neutral-950 bg-white hover:bg-neutral-950 hover:text-white transition-all ease-in-out duration-150 inline-flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                      </svg>
                </button>
                <button class="p-2 rounded-full border-2 border-neutral-950 bg-white hover:bg-neutral-950 hover:text-white transition-all ease-in-out duration-150 inline-flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                      </svg>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
