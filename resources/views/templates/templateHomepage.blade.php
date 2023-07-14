<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('styles.css')}}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2? display=swap » rel=" stylesheet>

    <title>RunIt - @yield('title')</title>
</head>

<body>
    @include('templates.include.header')
    @include('hero')
    @yield('content')
    @include('templates.include.footer')
</body>

</html>
