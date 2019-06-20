<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>HZ University of Applied Sciences</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/efd6e51a73.js"></script>
    <script src="{{ URL::asset('js/core.js') }}"></script>
    <script src="{{ URL::asset('js/charts.js') }}"></script>
    <script src="{{ URL::asset('js/animated.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/graph.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>


        h1 {
            margin: 0%;
            padding: 0%;
        }

        .body-sdg {
            font-family: Arial;
        }

        .header {
            background-color: white;
            margin: 10px 0 0 -8px;
            height: 13%;
            vertical-align: center;
        }

        .header-btn {
            padding: 20px;
            text-decoration: none;
            color: white;
            margin-right: -5px;
        }

        .top-right {
            float: right;
            margin: -70px -8px 0 0;
            padding-right: 5px;
        }

        .header-btn hz {
            background-color: pink;
        }

        a.header-btn.find {
            background-color: #08a3dc;
        }

        a.header-btn.login {
            background-color: #0078cc;
        }

        a.header-btn.language {
            background-color: #005095;
        }

        /* Buttons */
        .container-opleidingen {
            text-align: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .container-opleidingen ul {
            text-align: center;
            display: table;
            padding: 20px;
        }

        .container-opleidingen ul li {
            display: inline-block;
            padding: 30px 5px;
        }

        .btn-sdg {
            /*display:inline;*/
            margin: 1000px 5px 50px 5px;
            padding: 20px;
            font: 15px Arial, sans-serif;
            background-color: #def4fc;
            color: #1b1e21;
            text-decoration: none;
            font-weight: lighter;
        }

        @media only screen and (max-width: 500px) {
            .container-opleidingen {
                text-align: left;
                display: inline-block;
                margin: 10px 15px 500px 5px;
            }

            .btn-sdg {
                margin: 10px 0 0 0;
            }
        }



        header {
            grid-area: header;
            margin-left: 0%;
        }

        nav {
            grid-area: nav;
            margin-left: 0.5rem;
        }

        main {
            grid-area: content;
        }

        aside {
            grid-area: side;
            margin-right: 0.5rem;
        }

        footer {
            grid-area: footer;

        }

        @media (max-width: 768px) {
            .container {
                grid-template-areas: "header" "nav" "content" "side" "footer";

                grid-template-columns: 1fr;
                grid-template-rows: auto /* Header */ minmax(75px, auto) /* Nav */ 1fr /* Content */ minmax(75px, auto) /* Sidebar */ auto; /* Footer */
            }

            nav, aside {
                margin: 0;
            }
        }

        .hz-logo {
            max-width: 100%;
            height: auto;
        }

        .hz-logo-border {
            width: 20%;
        }

        .btn-space {
            margin-right: 5px
        }
    </style>
</head>


<body class=“body-sdg”>
<div class="grid-container">
    <header style="text-align: center">
        <!-- Header content -->
        <div class="header">
            <div class="hz-logo-border">
                <a href="{{url('/home')}}" class="header-btn hz">
                    <img class="hz-logo" src="https://i.imgur.com/nL1pgEZ.png">
                </a>
            </div>
            <div class="top-right">
                <a href="{{url('/home')}}" class="header-btn find">Home</a>
                <a href="{{url('/sdg')}}" class="header-btn find">SDGs</a>
                @if (!Auth::check())
                <a href="{{url('login')}}" class="header-btn login">Login</a>
                    @else
                    <a href="{{url('/adminpanel')}}" class="header-btn find">Admin Panel</a>
                    <a href="{{url('logout')}}" class="header-btn login">Logout</a>
                @endif
            </div>
        </div>
        @yield('header')
    </header>

    <main class="py-4">
        <!-- Main content -->
        <div class="container-fluid">
            @include('layouts.appmessage')
        </div>
        @yield('content')
    </main>

    <aside style="text-align: center">
        <!-- Sidebar / Ads -->
        @yield('sidebar')
    </aside>

    <footer style="text-align: center">
        <!-- Footer content -->
        @yield('footer')
    </footer>

</div>
</body>
</html>

