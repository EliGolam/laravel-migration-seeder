<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.metadata')

    <!--Stylesheets and Scripts -->
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />

    <!-- My Scripts -->
    <script src="./scripts/script.js" type="text/javascript" defer></script>
    <!--#endregion Stylesheets and Scripts -->


    <title>Laravel Migrations&Seeders Practice</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        @yield('header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>
</html>
