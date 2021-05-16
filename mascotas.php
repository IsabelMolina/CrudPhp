<?php
  include 'config.php';
  $consulta->conectarBaseDatos();
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
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Php</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mascotas</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
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
        <?php } ?>

    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script src="public/js/bootstrap.min.js" ></script>

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
