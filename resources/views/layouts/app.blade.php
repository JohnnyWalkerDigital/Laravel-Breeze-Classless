<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>

            @include('layouts.navigation')

            <!-- Page Heading -->
            <header>
                {{ $header }}
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

    </body>
</html>
