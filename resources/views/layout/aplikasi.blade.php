<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <title>Laravel</title>
        @yield('css-head')
        <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('resources/css/navbar.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased z-0">
        @if (Auth::check())
            @include('component/menu')
        @endif
        {{-- @include('component/message') --}}
        @yield('konten')
        <script src="{{ mix('resources/js/modal.js') }}"></script>
    </body>
</html>