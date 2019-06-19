<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            display: grid;

            grid-template-areas:
                    "header header header"
                    "nav content side"
                    "footer footer footer";

            grid-template-columns: 200px 1fr 200px;
            grid-template-rows: auto 1fr auto;
            grid-gap: 10px;

            height: 100vh;
        }
        header {
            grid-area: header;
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
                grid-template-areas:
                        "header"
                        "nav"
                        "content"
                        "side"
                        "footer";

                grid-template-columns: 1fr;
                grid-template-rows:
                        auto /* Header */
                        minmax(75px, auto) /* Nav */
                        1fr /* Content */
                        minmax(75px, auto) /* Sidebar */
                        auto; /* Footer */
            }

            nav, aside {
                margin: 0;
            }
        }
    </style>
</head>
<body>

<div class="container">


    <header style="text-align: center">
        <!-- Header content -->

        <div class="header">
            <a href="#" class="header-btn hz">
                <img src="https://i.imgur.com/nL1pgEZ.png">
            </a>

            <div class="top-right">
                <a href="#" class="header-btn find">Zoek</a>
                <a href="#" class="header-btn login">Login</a>
                <a href="#" class="header-btn language">EN</a>
            </div>
        </div>

        @yield('header')
    </header>

    <nav style="text-align: center ">
        <!-- Navigation -->
        @yield('navbar')
    </nav>

    <main style="text-align: center">
        <!-- Main content -->
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