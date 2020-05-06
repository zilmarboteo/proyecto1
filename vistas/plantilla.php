<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>EJEMPLO MVC</title>

  <!--   PLUGINS DE CSS -->

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

  <!--   PLUGINS DE JS -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!--   ULTIMA VERSION DE FONT AWESOME  -->

  <script src="https://kit.fontawesome.com/ef03250fac.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <h3 class="text-center py-3">Logo</h3>
  </div>

  <!-- Nav tabs -->
  <div class="container-fluid bg-light">
    <div class="container">
      <ul class="nav nav-justified" id="navId">
        <!-- registro -->
        <?php if (isset($_GET["pagina"])) : ?>

          <?php if ($_GET["pagina"] == "registro") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=registro">Registro</a>
            </li>
          <?php endif ?>
          <!-- registro  -->
          <?php if ($_GET["pagina"] == "registro") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=registro">Registro</a>
            </li>
          <?php endif ?>
          <!-- inicio -->
          <?php if ($_GET["pagina"] == "inicio") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=ingreso">Inicio</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
            </li>
          <?php endif ?>
          <!-- salir -->
          <?php if ($_GET["pagina"] == "salir") : ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
            </li>

          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=salir">Salir</a>
            </li>
          <?php endif ?>

        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso">Igreso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
          </li>


        <?php endif ?>

      </ul>
    </div>
  </div>


  <!-- Contenido  -->
  <div class="container-fluid">
    <div class="container py-5">

      <?php

      if (isset($_GET["pagina"])) {

        if (
          $_GET["pagina"] == "registro" ||
          $_GET["pagina"] == "ingreso" ||
          $_GET["pagina"] == "inicio" ||
          $_GET["pagina"] == "salir"
        ) {

          include "paginas/" . $_GET["pagina"] . ".php";
        } else {

          include "paginas/error404.php";
        }
      } else {

        include "paginas/registro.php";
      }
      ?>

    </div>
</body>

</html>