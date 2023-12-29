<!DOCTYPE html>
<html class="scroll-smooth">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no made_by_sandev">
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--css-->
    @include('dashboard.layouts.css')

    <link rel="icon" href="/assets/img/logo.png">
</head>

<body class="antialiased font-sans bg-white">
    <!--preload-->
    @include('dashboard.layouts.preload')

    <!--content-->
    <div class="min-h-[640px] bg-white">
        <div x-data="{ open: false }" @keydown.window.escape="open = false">
            <!--SideNav-->
            @include('dashboard.layouts.sidenav')
            <div class="md:pl-64 flex flex-col">
                <!--TopNav-->
                @include('dashboard.layouts.nav')
                <!--content-->
                @yield('content')
            </div>
        </div>
    </div>

    <!--footer-->
    @include('dashboard.layouts.footer')

    <!--js -->
    @include('dashboard.layouts.js')

    <!--backtotop-->
    @include('dashboard.layouts.backtotop')

    <!--Notifications-->
    @include('partials.notify')

</body>

</html>