<?php
  include 'config.php';
  if(isset($_POST["btnEditar"])){
    $nombre = $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $id = $_GET['id'];
    $consulta->conectarBaseDatos();
    $consulta->asignarConsulta("update mascota set nombre='".$nombre."', descripcion='".$descripcion."' where id=$id");
    echo "<script>window.location='mascotas.php'</script>";
  }
?>
