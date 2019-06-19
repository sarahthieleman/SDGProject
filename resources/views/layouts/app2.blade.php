<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

        html, body, .grid-container { height: 100%; margin: 0; }

        .grid-container * {
            border: 1px solid red;
            position: relative;
        }

        .grid-container *:after {
            content:attr(class);
            position: absolute;
            top: 0;
            left: 0;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.4fr 1.6fr;
            grid-template-areas: "." ".";
        }

        h1{
            margin: 0%;
            padding: 0%;
        }

        .body-sdg {
            font-family: Arial;
        }

        .header {
            background-color: white;
            margin: 18px 0 0 -8px;
            height: 20%;
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
            margin: 2px -8px 0 0;
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
            padding-top: 20px;
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

        .container {
            background-color: #f6f6f6;

            grid-template-areas: "header header header" "content content content" "footer footer footer";

            grid-template-columns: 1px 1fr 1px;
            grid-template-rows: auto 1fr auto;
            grid-gap: 0px;

            height: 100vh;
            margin: 0%;
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
<div class="container">
    <header style="text-align: center">
        <!-- Header content -->
        <div class="header">
            <div class="hz-logo-border">
                <a href="#" class="header-btn hz">
                    <img class="hz-logo" src="https://i.imgur.com/nL1pgEZ.png">
                </a>
            </div>
            <div class="top-right">
                <a href="#" class="header-btn find">Zoek</a>
                <a href="#" class="header-btn login">Login</a>
                <a href="#" class="header-btn language">EN</a>
            </div>
        </div>
        @yield('header')
    </header>

    <main style="text-align: center">
        <!-- Main content -->
        @yield('content')
        <br>
        <h1>Opleidingen</h1>
        <div class="container-opleidingen">
            <ul>
                <li><a href="#" class="btn-sdg">Bedrijfskunde</a></li>
                <li><a href="#" class="btn-sdg">Bouwkunde</a></li>
                <li><a href="#" class="btn-sdg">Chemie</a></li>
                <li><a href="#" class="btn-sdg">Civiele Techniek</a></li>
                <li><a href="#" class="btn-sdg">Commerciele Economie</a></li>
                <li><a href="#" class="btn-sdg">Communicatie</a></li>
                <li><a href="#" class="btn-sdg">Engineering</a></li>
                <li><a href="#" class="btn-sdg">Finance & Control (Bedrijfseconomie)</a></li>
                <li><a href="#" class="btn-sdg">HBO-ICT</a></li>
                <li><a href="#" class="btn-sdg">Human Resource Management</a></li>
                <li><a href="#" class="btn-sdg">International Business</a></li>
                <li><a href="#" class="btn-sdg">Leraar Basisonderwijs</a></li>
                <li><a href="#" class="btn-sdg">Logistics Engineering</a></li>
                <li><a href="#" class="btn-sdg">Maritiem Officier</a></li>
                <li><a href="#" class="btn-sdg">Pedagogiek</a></li>
                <li><a href="#" class="btn-sdg">Social Work</a></li>
                <li><a href="#" class="btn-sdg">Sportkunde</a></li>
                <li><a href="#" class="btn-sdg">Technische Bedrijfskunde</a></li>
                <li><a href="#" class="btn-sdg">Tourism Management</a></li>
                <li><a href="#" class="btn-sdg">Verpleegkunde</a></li>
                <li><a href="#" class="btn-sdg">Verpleegkunde & Verloskunde</a></li>
                <li><a href="#" class="btn-sdg">Watermanagement/Aquatische Ecotechnologie</a></li>
                <li><a href="#" class="btn-sdg">Watermanagement/Delta Management</a></li>
            </ul>
        </div>
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