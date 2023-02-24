
<?php
  $title = "Crear nueva mascota";
?>

<?php include '../template/header.php'; ?>

    <div class="container">
        <h1>Crear</h1>

        <form class="" action="insert.php" method="post">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Ingresar nombre" required>
          </div>
          <div class="form-group">
            <label for="description">Descripion</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Ingresar descripcion" required>
          </div>
          <input type="submit" name="btnCreate" class="btn btn-primary" value="Agregar"></input>
        </form>

    </div>

<?php include '../template/footer.php'; ?>
