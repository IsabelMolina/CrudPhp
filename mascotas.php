<?php
  include 'config.php';
  include 'masterPage.php';

  $masterPage = new masterPage();
  $title = "Mascotas";

  $consulta->conectarBaseDatos();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta->asignarConsulta("delete from mascota where id =$id");
    echo "<script>window.location='mascotas.php'</script>";
  }

?>
<?php include 'template/cabecera.php'; ?>

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

<?php include 'template/pie.php'; ?>

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
