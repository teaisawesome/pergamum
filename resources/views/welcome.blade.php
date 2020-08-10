<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <a class="navbar-brand" href="#"><img class="nav-logo mb-2 ml-3" src="{{asset('/storage/siteimg/logo.png')}}" alt="logo" width="50" height="50"> Pergamum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 content-center" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                </ul>
                <ul class="navbar-nav nav-right">
                    @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    
                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif
                </ul>
            </div>
          </nav>
        <div class="container welcome-container">
            <div class="row justify-content-center">
                <div class="col-md-4">Hello</div>
                <div class="col-md-4">Hello</div>
                <div class="col-md-4">Hello</div>
            </div>
        </div>
    </body>
</html>
