<?php include("database.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="authors" value="Williams Suarez, Jose Anziani, Cesar Leon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo-->
    <title>SISTEMA GSI</title>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="img/icono.jpg">
    <!-- BOOTSTRAP 5.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--BOOTSTRAP 5 ICONS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">    
    <!-- CSS -->    
        <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!--Barra de navegacion-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-toggler">
      <a class="navbar-brand" href="index.php">
        <img src="img/icono.jpg" width="50" alt="Logo de la pagina web">
      </a>
      <ul class="navbar-nav d-flex justify-content-center align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="empleados.php">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="equipos.php">Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Casos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>