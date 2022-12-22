<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased relative">
        <!-- Page Heading -->
        <header class="bg-white shadow z-50">
            <div class="w-full fixed drop-shadow">
                @include('layouts.navigation')
            </div>
        </header>

        <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
            <main class="z-10">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
