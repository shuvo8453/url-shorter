<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.header')
    </head>
    <body class="antialiased">
        <div class="container">

            @yield('content')

        </div>
    </body>
</html>
