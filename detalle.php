<?php
  include 'config.php';
  include 'masterPage.php';
  $masterPage = new masterPage();
  $title = "Editar";
  $consulta->conectarBaseDatos();
  $consulta->asignarConsulta("select * from mascota where id='".$_GET['id']."'");
  $mascota = mysqli_fetch_assoc($consulta->obtenerConsulta());
  $consulta->liberarConsulta();
  $consulta->cerrarConexion();
?>

<?php include 'template/cabecera.php'; ?>

    <div class="container">
        <h1>Detalle mascota</h1>

        <form class="" action="actualizarMascota.php?id='<?php echo $mascota['id']; ?>'" method="post">
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
