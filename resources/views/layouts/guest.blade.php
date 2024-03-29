<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Shree') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/Nav/Nav.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Intro/Intro.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/hmeheader/hmeheader.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/3D/3D.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Studio/Studio.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Footer/Footer.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Card/Card.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Label/Label.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Contacts/Contacts.scss')}}">
    <link rel="stylesheet" href="{{ asset('/css/Beat/Beat.scss')}}">

    <!-- Scripts -->
    <script src="{{ asset('/js/main.js')}}"></script>
    <script src="{{ asset('/js/j3.js')}}"></script>
    <script src="{{ asset('/js/app.js')}}"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-300 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
