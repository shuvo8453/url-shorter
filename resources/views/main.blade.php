<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <div class="container">
        @if(auth()->user())
            <header class="row">
                @include('layouts.header')
            </header>
        @endif

        <div id="main" class="row">
                @yield('content')
        </div>

        <footer class="row">
            @if(auth()->user())
                @include('layouts.footer')
            @endif
        </footer>
    </div>
</body>
</html>
