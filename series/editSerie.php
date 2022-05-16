<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Información extra</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">

    <?php

      $array = $_GET["serie"];
      $argumento = $_GET["argumento"];

      $array = explode(", ", $array);
      $array[5] = $argumento;

    ?>

    <header class="container my-3">
      <h1>Mis series</h1>
    </header>

    <label for="estreno">Fecha de estreno: </label>
    <input name="estreno" value="<?php echo $array[2] ?>"><br><br>

    <label for="temporada">Temporadas: </label>
    <input name="temporada" value="<?php echo $array[3] ?>"><br><br>

    <label for="puntua">Puntuación: </label>
    <input name="puntua" value="<?php echo $array[4] ?>"><br><br>

    <!--<label for="genero">Géneros: </label>
    <input name="genero" value="<?php //echo $array[4] ?>"><br><br>-->

    <label for="argumento">Argumento: </label><br>
    <textarea name="argumento" rows="10" cols="50"><?php echo $array[5] ?></textarea>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>