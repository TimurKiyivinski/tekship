<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Speech Daemon</title>

        <!-- Style -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('extra_head')
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="navbar-logo"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a title="Log Out" href="{{ url('/logout') }}">Log Out</a></li>
                        @endif
                        <li><a href="{{ url('/page1') }}">Page 1</a></li>
                        <li><a href="{{ url('/page2') }}">Page 2</a></li>
                        <li><a href="{{ url('/page3') }}">Page 3</a></li>
                        <li><a href="{{ url('/page4') }}">Page 4</a></li>
                    </ul> <!-- end .navbar -->
                </div> <!-- end. collapse-->
            </div> <!-- end .container -->
        </nav>
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('extra_js')
    </body>
</html>
