<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <div class="container">
        @auth
            <header class="row">
                @include('layouts.header')
            </header>
        @endauth

        <div id="main" class="row">
                @yield('content')
        </div>

        <footer class="row">
            @auth
                @include('layouts.footer')
            @endauth
        </footer>
    </div>
</body>
</html>
