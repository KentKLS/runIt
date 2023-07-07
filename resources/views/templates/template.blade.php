<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('styles.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2? display=swap »" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Run It @yield('title')</title>
</head>
<script>
    function incrementValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }

    function decrementValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value--;
        value = value <= 1 ? 1 : value;

        document.getElementById('number').value = value;
    }
</script>

<body>
    @include('templates.header')

    @yield('content')
    @include('templates.footer')
</body>

</html>
