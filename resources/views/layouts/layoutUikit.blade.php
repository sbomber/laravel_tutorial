<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit-icons.min.js"></script>

    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title"> <!-- m-b-md"> -->
                    9K Tech, LLC.
                </div>

                <div class="links">
                  <a href="./">Home</a>
                  <a href="/projects">View Projects</a>
                  <a href="/projects/create">Create New</a>
                  <a href="/about">About</a>
                </div>

                @yield('content')

            </div>
        </div>
    </body>
</html>
