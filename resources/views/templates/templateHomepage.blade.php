<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>RunIt - @yield('title')</title>
</head>

<body>
    @include('templates.header')
    @include('hero')
    @yield('content')

</body>

</html>
