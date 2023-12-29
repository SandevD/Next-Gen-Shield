<!DOCTYPE html>
<html class="scroll-smooth">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no made_by_sandev">
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--css-->
    @include('layouts.css')

    <link rel="icon" href="/assets/img/logo.png">
</head>

<body class="antialiased font-sans bg-white">
    <!--preload-->
    @include('layouts.preload')

    <!--navbar-->
    @include('layouts.nav')

    <!--content-->
    @yield('content')

    <!--footer-->
    @include('layouts.footer')

    <!--js -->
    @include('layouts.js')

    <!--backtotop-->
    @include('layouts.backtotop')

    <!--Notifications-->
    @include('partials.notify')

</body>

</html>