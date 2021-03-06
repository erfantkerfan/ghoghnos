<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="/img/icon.gif" type="image/gif">
    <style type="text/css">
        @font-face {
            font-family:'Font';
            src: url( {{asset('fonts/'.config('app.font'))}} );
        }
        body, html {
            height: 100%;
            margin: 0;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 10px 10px;
            border-radius: 50%;
        }
        .fa:hover {
            opacity: 0.7;
        }
        .fa-telegram {
            background: white;
            color: #55ACEE;
        }
        .fa-twitter {
            background: white;
            color: #55ACEE;
        }
        .fa-yahoo {
            background: white;
            color: #430297;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: grey;
            color: white;
            text-align: center;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .links > a {
            font-weight: 900;
            color: #ffffff;
            text-decoration: none;
        }
        .title {
            font-size: 84px;
        }
        #map_container{
            position: relative;
        }
        #map{
            height: 0;
            overflow: hidden;
            padding-bottom: 80%;
            padding-top: 30px;
            position: relative;
        }
    </style>
</head>
<body>
    <div id="app" style="font-family:'Font'" >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/icon.gif" style="width: 5%">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: #0069d9;font-weight: bold">ورود</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                   style="color: #0069d9;font-weight: bold">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->admin==1)
                                    <a class="dropdown-item" href="{{route('home')}}">
                                        پنل بازیکنان
                                    </a>
                                    <a class="dropdown-item" href="{{route('map')}}">
                                        موقعیت بازیکنان
                                    </a>
                                    @else
                                        <a class="dropdown-item" href="{{route('start')}}">
                                            بزن بریم بازی
                                        </a>
                                        <a class="dropdown-item" href="{{route('stat')}}">
                                            اوضامون چجوریه
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color: red"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        <br>

        @yield('content')
</body>
</html>
<script>
    @if(Auth::check())
    setInterval(function(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(position);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        function position(position){
            $.ajax({
                type:"POST",
                cache:false,
                url:"/location",
                data: {'position':position , "_token": "{{ csrf_token() }}" },
                dataType: "text",
            });
        }

    }, 5000);
    @endif
</script>
