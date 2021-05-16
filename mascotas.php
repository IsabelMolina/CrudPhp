<?php
  include 'config.php';
  include 'masterPage.php';

  $consulta->conectarBaseDatos();

  $masterPage = new masterPage();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta->asignarConsulta("delete from mascota where id =$id");
    echo "<script>window.location='mascotas.php'</script>";
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php - Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php echo $masterPage->obtenerScriptsCabecera(); ?>

  </head>

  <body>
    <?php echo $masterPage->obtenerNavegacion(); ?>

    <div class="container">
        <h1>Mascotas</h1>
        <a href="crear.php" class="btn btn-primary btn-block my-4" >Crear nueva mascota</a>
        <?php
          $consulta->asignarConsulta("select * from mascota");
          $total = $consulta->obtenerTotalRegistros();
        ?>
        <?php
          if($total==0){
            echo "No se encuentran mascotas";
          }
          else{ ?>
            <div class="table-responsive">
              <table id="tablaMascotas" class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Accion</th>
                  </tr>

                </thead>
              </table>
            </div>
        <?php } ?>

    </div>
    <?php echo $masterPage->obtenerScriptsPie(); ?>

    <script>
      $.get("obtenerMascotas.php", function(data){
        const mascotas = JSON.parse(data);

        $("#tablaMascotas").DataTable({
          "language": { "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json" },
          "data": mascotas,
          "columns": [
            {"data":"id"},
            {"data":"nombre"},
            {"data":"descripcion"},
            {"render": function ( data, type, full, meta) {
                return "<a class='btn btn-warning bt-sm' href='detalle.php?id="+full.id+"'>Editar</a> "+
                       "<a class='btn btn-danger bt-sm' href='mascotas.php?id="+full.id+"'>Eliminar</a>";
            }
          }]
        })

      })
    </script>
  </body>
</html>
