<!DOCTYPE html>
<html class="scroll-smooth h-full">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no made_by_sandev">
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--css-->
    @include('layouts.css')

    <link rel="icon" href="/assets/img/logo.png">
</head>

<body class="antialiased font-sans bg-white h-full">

    <main class="flex-grow mx-auto max-w-7xl w-full flex flex-col px-4 sm:px-6 lg:px-8 justify-center items-center h-full">
        <div class="flex-shrink-0 my-auto py-16 sm:py-32">
            <p class="text-sm font-semibold text-sky-700 uppercase tracking-wide">404 error</p>
            <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Page not found</h1>
            <p class="mt-2 text-base text-gray-500">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="mt-6">
                <a href="{{ route('welcome.index') }}" class="text-base font-medium text-sky-700 hover:text-sky-800">Go back home<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </div>
    </main>

    <!--js -->
    @include('layouts.js')

</body>

</html>