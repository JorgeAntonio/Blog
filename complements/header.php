<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo RUTA;?>/css/estilos.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
    <!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <title>Blog</title>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black;">
        <a class="navbar-brand" href="<?php echo RUTA; ?>">Mi Primer Blog</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" style="background-color: #4caf50"
                aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-facebook"></i> Facebook<span class="sr-only">(current)</span></a>
                </li><li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-twitter"></i> Twitter</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-envelope"></i> Contacto</a>
                </li>
            </ul>
            <form name="busqueda" class="form-inline my-2 my-lg-0" action="<?php echo RUTA; ?>/buscar.php" method="get">
                <input class="form-control mr-sm-2" type="text" name="busqueda" placeholder="Buscar">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>
</header>
