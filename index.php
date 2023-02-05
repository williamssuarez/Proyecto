<?php include("includes/header.php") ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!--BOOTSTRAP 5.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!--Hay muchas formas de usar los iconos de Bootstrap. Por ejemplo, la que usamos aca, requiere copiar y pegar la cdn de
    la pagina oficial de bootstrap, luego de eso solo se copia el icono. Esta forma es conveniente tambien porque permite
    manipular el icono como si fuera texto con css. -->
    <style>
      i{
        font-size: 250px;
        /*color: rgb(110, 255, 0);*/
      }
    </style>
      
  </head>

  <body>
    <!--Aca usamos iconos y los usamos de diferentes maneras, principalmente convirtiendolos en botones-->
    <a href="" class="btn btn-outline-success">
      <i class="bi bi-android2"></i>
    </a>

    <button href="https://www.youtube.com/" type="button" class="btn btn-outline-danger">
      <i class="bi bi-youtube"></i>
    </button>

    <a href="empleados.php" class="btn btn-outline-primary">
      <i class="bi bi-person-fill-gear">
        <br>Empleados
      </i>
    </a>

    <a href="equipos.php" class="btn btn-outline-primary">
        <i class="bi bi-pc-display-horizontal">
            <br>Equipos
        </i>
    </a>

    <button href="http://localhost/PROYECTO%20GSI/empleados.php" type="button" class="btn btn-outline-primary">
        <i class="bi bi-person-fill-gear"></i>
    </button>

    <button type="button" class="btn btn-outline-success">
      <i class="bi bi-whatsapp"></i>
    </button>

    <button type="button" class="btn btn-outline-primary">
      <i class="bi bi-twitter"></i>
    </button>

    <button type="button" class="btn btn-outline-info">
      <i class="bi bi-facebook"></i>
    </button>

    <button type="button" class="btn btn-outline-dark">
      <i class="bi bi-github"></i>
    </button>

    <button type="button" class="btn btn-outline-primary">
      <i class="bi bi-discord"></i>
    </button>

    <button type="button" class="btn btn-outline-warning">
      <i class="bi bi-instagram"></i>
    </button>

    <a href="http://www.youtube.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger">
      <i class="bi bi-youtube"></i>
    </a>

    <a href="https://web.whatsapp.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success">
      <i class="bi bi-whatsapp"></i>
    </a>

    <a href="https://twitter.com/SofiHoli" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary">
      <i class="bi bi-twitter"></i>
    </a>

    <a href="https://github.com/williamssuarezh" class="btn btn-outline-dark" target="_blank" rel="noopener noreferrer">
      <i class="bi bi-github"></i>
    </a>
    
  </body>
</html>

<?php include("includes/footer.php") ?>