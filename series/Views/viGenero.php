<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página géneros</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
  
</head>

<body>

  <header class="container my-3">
    <h1>Mis series</h1>
  </header>

  <table class="container table table-striped table-responsive table-bordered border-dark mt-3 w-25">

    <thead class="table-dark">

      <tr>
        <th>Género</th>
        <th></th>
      </tr>

    </thead>

    <tbody>

      <?php
        foreach ($generos as $genero) {
      ?>
      
      <tr>

        <td><?php echo $genero["genero"] ?></td>

        <td>
          <a href="delGenero.php?gen=<?php echo $genero["genero"] ?>">Borrar</a>
        </td>

      </tr>

      <?php
        }
      ?>

      <tr>

        <td>

          <select>

            <option>Elige un género</option>

            <?php
              foreach ($generos as $genero) {
            ?>

            <option><?php echo $genero['genero'] ?></option>;

            <?php
              }
            ?>

          </select>

        </td>

        <td>
          <a href="addGenero.php">Añadir</a>
        </td>

      </tr>

    </tbody>

  </table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>