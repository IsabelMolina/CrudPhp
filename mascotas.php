<?php
  include 'config.php';
  include 'masterPage.php';
  $masterPage = new masterPage();
  $title = "Mascotas";
?>

<?php include 'template/cabecera.php'; ?>

    <div class="container">
        <h1>Mascotas</h1>
        <a href="crear.php" class="btn btn-primary btn-block my-4" >Crear nueva mascota</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Accion</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $consulta->conectarBaseDatos();
                $consulta->asignarConsulta("select * from mascota");
              ?>
              <?php while($mascota = mysqli_fetch_assoc($consulta->obtenerConsulta())){ ?>
                <tr>
                  <th scope="row"><?php echo $mascota['id'] ?></th>
                  <td><?php echo $mascota['nombre'] ?></td>
                  <td><?php echo $mascota['descripcion'] ?></td>
                  <td>
                    <a type="button" class="btn btn-warning btn-sm" href="detalle.php?id=<?php echo $mascota['id']?>">Editar</a>
                    <a type="button" class="btn btn-danger btn-sm" href="eliminarMascota.php?id=<?php echo $mascota['id'] ?>" >Eliminar</button>
                  </td>
                </tr>
              <?php } ?>
              <?php
                $consulta->liberarConsulta();
                $consulta->cerrarConexion();
              ?>
            <tbody>
          </table>
        </div>
    </div>

<?php include 'template/pie.php'; ?>
