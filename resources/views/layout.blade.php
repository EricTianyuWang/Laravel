<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Laracast')</title>
    </head>

    <body>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        ul {
            font-family: 'Montserrat';font-size: 22px;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
        }
        li {
            font-family: 'Montserrat';font-size: 22px;
            float: left;
        }
        li a {
            font-family: 'Montserrat';font-size: 22px;
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
        <div>
        <div>
        <ul>
            <li><a href="/">Homepage</a>
            <li><a href="/about">About</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/review">Review</a></li>
        </ul>
        </div>
    </div>
    @yield('content')

    </body>
</html>
