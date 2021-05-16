
<?php
  include "config.php";
  include 'masterPage.php';

  $masterPage = new masterPage();

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

    <?php echo $masterPage->obtenerScriptsCabecera(); ?>

  </head>
  <body>

    <?php echo $masterPage->obtenerNavegacion(); ?>

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

    <?php echo $masterPage->obtenerScriptsPie(); ?>
  </body>
</html>
