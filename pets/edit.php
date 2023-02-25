<?php

  include '../class/Pet.php';

  $id = $_GET['id'];
  $title = "Editar";

  $pet = new Pet();
  $pet->connectDB();
  $result = $pet->getOne($id);
  $data = $result->fetch_all(MYSQLI_ASSOC);
  
?>

<?php include '../template/head.php'; ?>
  
    <div class="container">
        <h1>Detalle mascota</h1>

        <form class="" action="update.php?id='<?php echo $data[0]['id']; ?>'" method="post">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $data[0]['name'] ?>">
          </div>
          <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" name="description" id="description" value="<?php echo $data[0]['description']?>">
          </div>
          <input type="submit" name="btnEdit" class="btn btn-warning" value="Editar"></input>
        </form>

    </div>

<?php include '../template/foot.php'; ?>
