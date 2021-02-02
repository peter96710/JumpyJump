<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JumpyJump') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a style="padding-left:25px; padding-right: 25px;" href="{{ route('home') }}"> <img src='/images/jj.png' alt="Home Page" width="100px"></a>
                <a style="padding-left:10px;" href="{{ url('/') }}"> <img src='/images/fb.png' alt="Home Page" width="35px"></a>
                <a style="padding-left:10px;" href="{{ url('/') }}"> <img src='/images/insta.png' alt="Home Page" width="35px"></a>
                <a style="padding-left:10px;" href="{{ url('/') }}"> <img src='/images/yt.png' alt="Home Page" width="35px"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @role('Admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('updates') }}">{{ __('Add Update') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('list') }}">{{ __('List Problems') }}</a>
                            </li>
                        @endrole
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('admin') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer navbar-fixed-bottom font-small teal pt-4">
            <div class="footer-copyright text-center py-3">
                © 2020 All Rights Reserved
            </div>
        </footer>
    </div>
</body>
</html>
