<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Webrefiner | Avant School Management System">
    <meta name="author" content="Webrefiner">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>{{ config('app.name', 'Avant') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page.css') }}">
    <link rel="stylesheet" href="{{ mix('css/tippy.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/popper.js') }}" defer></script>
    <script src="{{ mix('js/tippy.js') }}" defer></script>

    @livewireStyles
</head>

<body class="antialiased font-sans text-gray-800 bg-gray-200">
    <div id="site">
        <main>
            @yield('styles')
            <div class="header w-full min-h-screen flex flex-col justify-between">
                @include('public.layouts.navigation')
                @yield('hero')
            </div>
            {{ $slot }}
        </main>
        @include('public.layouts.footer')
    </div>
    @yield('scripts')
</body>

</html>
