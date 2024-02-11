<?php
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$query = $mysqli->prepare("SELECT id, nombre, autor FROM libros WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$resultado = $query->get_result();
$libro = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Editar</title>
</head>
    <body class = "container m-5 p-5">
        <div class="col-12">
          <form action="actualizar.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo $libro["id"] ?>">
             <label for="exampleFormControlInput1" class="form-label"
                >Nombre del libro</label
              >
              <input value="<?php echo $libro["nombre"] ?>" type="text" class="form-control" name="nombre" id="nombre" require />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Autor</label
              >
              <input value="<?php echo $libro["autor"] ?>" type="text" class="form-control" name="autor" id="autor" require/>
            </div>
            <div class ="p-3">
              <button type="submit" class="btn btn-primary">Editar</button>
              <a class="btn btn-warning mx-5" href="index.php">Volver a la lista</a>
            </div>
          </form>
        </div>
    </body>
</html>