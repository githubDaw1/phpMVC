<?php

  error_reporting(E_ERROR);
  ini_set("display-errors", 0);

  $array = $_GET["serie"];
  $argumento = $_GET["argumento"];

  $array = explode(", ", $array);
  $array[5] = $argumento;
  
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información extra</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header class="container my-4 h3">Mis series</header>

  <div class="container my-3">
    <a href="index.php" class="inicio">Mis series</a>
  </div>

  <div class="cartel">

    <img src="<?php echo htmlspecialchars($array[7]); ?>" alt="Poster de una serie" class="imagen">

    <aside>

      <h2 class="titulo"><?php echo htmlspecialchars($array[1]); ?></h2>
      
      <p>Fecha de estreno:<?php echo " \t" .htmlspecialchars($array[2]); ?></p>
      <p>Temporadas:<?php echo " \t\t" .htmlspecialchars($array[3]); ?></p>
      <p>Puntuación:<?php echo " \t\t" .htmlspecialchars($array[4]); ?></p>

      <p class="argumento"><?php echo htmlspecialchars($array[5]); ?></p>

    </aside>

    <div class="reset"></div>

  </div>

  <!--<table class="container table table-responsive table-borderless mt-3">

    <tbody>

      <tr>
        
      </tr>

      <tr>
        <td class="h1"></td>
      </tr>

      <tr rowspan="1">
        <td></td>
      </tr>

      <tr rowspan="1">
        <td></td>
      </tr>

      <tr rowspan="1">
        <td></td>
      </tr>

      <tr rowspan="1">
        <td>
      </tr>

      <tr rowspan="1">
        <td>
      </tr>

    </tbody>

  </table>-->

  <?php
    $argumento = $array[5];
    $array = array($array[0], $array[1], $array[2], $array[3], $array[4], "", $array[6], $array[7]);
    $array = implode(", ", $array);
  ?>

  <div class="container my-3">
    <a href="index.php">Volver atrás</a>
    <a href="gestGenero.php?serie='<?php echo htmlspecialchars($array); ?>'&argumento='<?php echo htmlspecialchars($argumento); ?>'">Gestionar géneros</a>
    <a href="editSerie.php?serie='<?php echo htmlspecialchars($array); ?>'&argumento='<?php echo htmlspecialchars($argumento); ?>'">Editar serie</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>

</body>

</html>