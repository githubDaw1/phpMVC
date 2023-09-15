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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar serie</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header class="container my-4 h3">Mis series</header>

  <div class="container my-3">
    <a href="index.php" class="inicio">Mis series</a>
  </div>

  <form action="" class="container" method="POST">

    <fieldset class="mb-3">
      <label for="estreno">Fecha de estreno: </label>
      <input name="estreno" value="<?php echo htmlspecialchars($array[2]); ?>">
    </fieldset>

    <fieldset class="mb-3">
      <label for="temporada">Temporadas: </label>
      <input name="temporada" value="<?php echo htmlspecialchars($array[3]); ?>">
    </fieldset>
    
    <fieldset class="mb-3">
      <label for="puntua">Puntuación: </label>
      <input name="puntua" value="<?php echo htmlspecialchars($array[4]); ?>">
    </fieldset>
    
    <fieldset class="mb-3">
      
      <label for="genero">Géneros: </label>
      <input name="genero" value="<?php

        require_once("Models/Modelo.php");
        $genero = new Modelo();
        $generos = $genero->getGeneros();

        foreach ($generos as $genero) {
          echo $genero['genero']. " ";
        }

      ?>">
      
    </fieldset>
    
    <fieldset class="mb-3">
      <label for="argumento">Argumento: </label><br>
      <textarea name="argumento" rows="10" cols="50"><?php echo htmlspecialchars($array[5]); ?></textarea>
    </fieldset>
    
    <fieldset class="mb-3">
      <input type="submit" value="Actualizar información" class="updateInfo">
    </fieldset>

  </form>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>

</body>

</html>