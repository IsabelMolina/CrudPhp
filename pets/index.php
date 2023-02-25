<?php

  include '../class/Pet.php';

  $title = "Mascotas";

  $pet = new Pet();
  $pet->connectDB();
  $result = $pet->getAll();
  $data = $result->fetch_all(MYSQLI_ASSOC);

?>

<?php include '../template/head.php'; ?>

    <div class="container">
        <h1>Mascotas</h1>
        <a href="create.php" class="btn btn-primary btn-block my-4" >Crear nueva mascota</a>
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
              <?php foreach($data as $row){ ?>
                <tr>
                  <th scope="row"><?php echo $row['id'] ?></th>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td>
                    <a type="button" class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $row['id']?>">Editar</a>
                    <a type="button" class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id'] ?>" >Eliminar</button>
                  </td>
                </tr>
              <?php } ?>
            <tbody>
          </table>
        </div>
    </div>

<?php include '../template/foot.php'; ?>
