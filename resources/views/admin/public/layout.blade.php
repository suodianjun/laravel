<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/js/app.js">
    <style>
        .c{
            width: 500px;
            height: 100px;
            background-color: #9561e2;
        }
    </style>
</head>
<body>
<header>
    @yield('css')
</header>
@yield('content')
</body>
@yield('js')
</html>