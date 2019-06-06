<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Laracast')</title>
    </head>

    <body>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111111;
        }
    </style>
    @yield('content')
        <div class="a">
        <ul>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/">Homepage</a>
        </ul>
        </div>
    </body>
</html>
