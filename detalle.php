
<?php
  include 'config.php';
  $consulta->conectarBaseDatos();
  if(isset($_POST["btnEditar"])){
    $nombre = $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $id = $_GET['id'];
    $consulta->asignarConsulta("update mascota set nombre='".$nombre."', descripcion='".$descripcion."' where id=$id");
    echo "<script>window.location='mascotas.php'</script>";
  }
  else{
    $consulta->asignarConsulta("select * from mascota where id='".$_GET['id']."'");
    $mascota = mysqli_fetch_array($consulta->obtenerConsulta());
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php - Editar mascota</title>
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
        <h1>Detalle mascota</h1>

        <form class="" action="detalle.php?id='<?php echo $mascota['id']; ?>'" method="post">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $mascota['nombre'] ?>" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $mascota['descripcion']?>" required>
          </div>
          <input type="submit" name="btnEditar" class="btn btn-warning" value="Editar"></input>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" ></script>
  </body>
</html>
