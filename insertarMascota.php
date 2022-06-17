<?php
  include 'config.php';
  if(isset($_POST['btnAgregar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $consulta->conectarBaseDatos();
    $consulta->asignarConsulta("insert into mascota(id, nombre, descripcion) values(null,'".$nombre."','".$descripcion."' )");
    echo "<script>window.location='mascotas.php'</script>";
  }
?>
