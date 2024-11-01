<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
nnnn
        <link rel="shortcut icon" href="{{ asset('Admin/images/favicon_1.ico') }}">
        <!-- Base Css Files -->
        <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('Admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('Admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('Admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('Admin/css/waves-effect.css') }}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('Admin/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('Admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('Admin/js/modernizr.min.js') }}"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    </div>

    
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('Admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/js/waves.js') }}"></script>
    <script src="{{ asset('Admin/js/wow.min.js') }}"></script>
    <script src="{{ asset('Admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/chat/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-detectmobile/detect.js') }}"></script>
    <script src="{{ asset('Admin/assets/fastclick/fastclick.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

    <!-- sweet alerts -->
    <script src="{{ asset('Admin/') }}assets/sweet-alert/sweet-alert.min.js"></script>
    <script src="{{ asset('Admin/') }}assets/sweet-alert/sweet-alert.init.js"></script>

    <!-- flot Chart -->
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

    <!-- Counter-up -->
    <script src="{{ asset('Admin/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Admin/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    
    <!-- CUSTOM JS -->
    <script src="{{ asset('Admin/js/jquery.app.js') }}"></script>

    <!-- Dashboard -->
    <script src="{{ asset('Admin/js/jquery.dashboard.js') }}"></script>

    <!-- Chat -->
    <script src="{{ asset('Admin/js/jquery.chat.js') }}"></script>

    <!-- Todo -->
    <script src="{{ asset('Admin/js/jquery.todo.js') }}"></script>

    <script type="text/javascript">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

</body>
</html>
