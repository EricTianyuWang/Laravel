<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Laracast')</title>
    </head>

    <body>
        @yield('content')
        <ul>
            <li><a href="/contact">Contact</a>us to learn more.</li>
            <li><a href="/about">About</a>us to learn more.</li>
            <li><a href="/">Homepage</a>
        </ul>
    </body>
</html>
