
<?php
  include 'masterPage.php';
  $masterPage = new masterPage();
  $title = "Crear nueva mascota";
?>

<?php include 'template/cabecera.php'; ?>

    <div class="container">
        <h1>Crear</h1>

        <form class="" action="insertarMascota.php" method="post">
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

<?php include 'template/pie.php'; ?>
