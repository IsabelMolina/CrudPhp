<?php
  include 'config.php';
  $consulta->conectarBaseDatos();
  $consulta->asignarConsulta("select * from mascota");

  while($pelicula = mysqli_fetch_array($consulta->obtenerConsulta())){
      $arrayPeliculas[] = $pelicula;
  }
  $consulta->liberarConsulta();
  $consulta->cerrarConexion();
  echo json_encode($arrayPeliculas);

?>
