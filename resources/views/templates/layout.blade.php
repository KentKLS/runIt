<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Run-It</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/backoffice/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backoffice/product">Ajouter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/backoffice/home-category">Catégorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backoffice/category">Ajouter Catégorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/backoffice/home-customer">Client</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backoffice/customer">Ajouter Client</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')


</body>
</html>

