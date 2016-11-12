<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                            <a title="Log Out" href="{{ url('/logout') }}">Log Out</a>
                        @endif
                    </ul> <!-- end .navbar -->
                </div> <!-- end. collapse-->
            </div> <!-- end .container -->
        </nav>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="container">

                {{-- Heading --}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Headings
                    </div>
                    <div class="panel-body">
                        <h1>h1 heading</h1>
                        <h2>h2 heading</h2>
                        <h3>h3 heading</h3>
                        <h4>h4 heading</h4>
                        <h5>h5 heading</h5>
                        <h6>h6 heading</h6>
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Buttons
                    </div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-default">Default</button>
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        Table
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>...</td>
                                </tr>
                                <tr class="active">
                                    <td class="active">...</td>
                                </tr>
                                <tr class="success">
                                    <td class="success">...</td>
                                </tr>
                                <tr class="warning">
                                    <td class="warning">...</td>
                                </tr>
                                <tr class="danger">
                                    <td class="danger">...</td>
                                </tr>
                                <tr class="info">
                                    <td class="info">...</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- List Groups --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                List Groups
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <a href="#" class="list-group-item active">
                                        Cras justo odio
                                    </a>
                                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                                    <a href="#" class="list-group-item">Morbi leo risus</a>
                                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                                    <a href="#" class="list-group-item"><span class="badge">14</span>Vestibulum at eros</a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- ALerts --}}
                    <div class="col-md-9">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Alerts
                            </div>
                            <div class="panel-body">
                                <div class="alert alert-success" role="alert">...</div>
                                <div class="alert alert-info" role="alert">...</div>
                                <div class="alert alert-warning" role="alert">...</div>
                                <div class="alert alert-danger" role="alert">...</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        Lables
                    </div>
                    <div class="panel-body">
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
