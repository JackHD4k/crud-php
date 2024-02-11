<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <title>CRUD - PHP</title>
  </head>
  <body>
    <div class="container my-5">
      <div class="row">
        <!-- TABLA -->
        <div class="col-8">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                include_once "listar.php";
                foreach ($lista as $items) {
              ?>
              <tr>
                <td><?php echo $items["id"] ?></td>
                <td><?php echo $items["nombre"] ?></td>
                <td><?php echo $items["autor"] ?></td>
                <td><a href="editar.php?id=<?php echo $items["id"] ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $items["id"] ?>">Eliminar</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- REGISTRO -->
        <div class="col-4">
          <form action="registrar.php" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Registrar libro</label
              >
              <input type="text" class="form-control" name="nombre" id="nombre" />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Autor</label
              >
              <input type="text" class="form-control" name="autor" id="autor" />
            </div>
            <div>
              <button type="submit" class="btn btn-primary mb-3">Añadir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
