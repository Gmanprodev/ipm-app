<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IPM') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
        
    <body>
        {{-- <x-global.header /> --}}

        <main>
            {{ $slot }}
        </main>

        {{-- <x-global.footer /> --}}
    </body>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</html>