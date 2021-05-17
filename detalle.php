
<?php
  include 'config.php';
  include 'masterPage.php';

  $masterPage = new masterPage();
  $title = "Editar";

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

<?php include 'template/cabecera.php'; ?>

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

<?php include 'template/pie.php'; ?>
