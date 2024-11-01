<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        @include('includes.landing.meta')
        <title>@yield('title')</title>
        @include('includes.landing.style')
    </head>
    <body class="antialiased">
        <div class="relative">
            @yield('content')
        </div>
        @stack('after-script')
    </body>
</html>