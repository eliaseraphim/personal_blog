<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Style -->
        <link href='{{ asset('css/style.css') }}' rel='stylesheet'>

        <style>

        </style>
    </head>

    <!-- Body -->
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm mt-0 pt-0" id="nav_bar">
            <h1 class="navbar-brand">elia deppe | blog</h1>
            <ul class="navbar-nav">
                <!-- Link to Home -->
                <li class="nav-item ml-3 mr-1">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <!-- Link to Archive -->
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#">Archive</a>
                </li>
                <!-- Link to Projects -->
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <!-- Link to About -->
                <li class="nav-item mx-1">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <!-- Create Post -->
                <li class="nav-item mx-1">
                    <a class="nav-link" href="/create">Create</a>
                </li>
            </ul>
        </nav>

        <!-- Main Viewport -->
        <div class="container-fluid">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="container-fluid m-1">
            @include('includes.footer')
        </footer>
    </body>
</html>
