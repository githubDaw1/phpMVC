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
</head>

<body>

  <?php

    $array = $_GET["serie"];
    $argumento = $_GET["argumento"];

    $array = explode(", ", $array);
    $array[5] = $argumento;

  ?>

  <header class="container my-3">
    <h1>Mis series</h1>
  </header>

  <table class="container table table-responsive table-borderless mt-3">

    <tbody>

      <tr>

        <td rowspan="6" colspan="1">
          <img src="<?php echo $array[7] ?>" alt="Poster de una serie">
        </td>

      </tr>

      <tr colspan="1">
        
        <td>
          <h1><?php echo $array[1] ?></h1>
        </td>
        
      </tr>

      <tr rowspan="1" colspan="1">
        <td><?php echo "Fecha de estreno: \t". $array[2] ?></td>
      </tr>

      <tr rowspan="1" colspan="1">
        <td><?php echo "Temporadas: \t\t". $array[3] ?></td>
      </tr>

      <tr rowspan="1" colspan="1">
        <td><?php echo "Puntuación: \t\t". $array[4] ?></td>
      </tr>

      <tr rowspan="1" colspan="1">
        <td><?php echo $array[5] ?></td>
      </tr>

    </tbody>

  </table>

  <?php

    $argumento = $array[5];
    $array = array($array[0], $array[1], $array[2], $array[3], $array[4], "", $array[6], $array[7]);

    $array = implode(", ", $array);

  ?>

  <div class="container my-3">
    <a href="../series">Volver atrás</a>
    <a href="gestGenero.php">Gestionar géneros</a>
    <a href="editSerie.php?serie=<?php echo $array ?>&argumento=<?php echo $argumento ?>">Editar serie</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>