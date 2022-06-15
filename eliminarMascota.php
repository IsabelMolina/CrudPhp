<?php
  include 'config.php';
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta->conectarBaseDatos();
    $consulta->asignarConsulta("delete from mascota where id =$id");
    $consulta->liberarConsulta();
    $consulta->cerrarConexion();
    echo "<script>window.location='mascotas.php'</script>";
  }
?>
