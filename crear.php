
<?php
  include "config.php";
  if(isset($_POST['btnAgregar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $consulta->conectarBaseDatos();
    $consulta->asignarConsulta("insert into mascota(id, nombre, descripcion) values(null,'".$nombre."','".$descripcion."' )");
    $consulta->liberarConsulta();
    $consulta->cerrarConexion();
    echo "<script>window.location='mascotas.php'</script>";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php - Crear nueva mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="public/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Php</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mascotas</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>

    <div class="container">
        <h1>Crear</h1>

        <form class="" action="crear.php" method="post">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripcion" required>
          </div>
          <input type="submit" name="btnAgregar"class="btn btn-primary" value="Agregar"></input>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" ></script>
  </body>
</html>
