<?php
  // Eliminar
  include 'cConexion.php';
  include 'cConsultas.php';
  $consulta = new cConsultas();
  $consulta->asignarServidor("localhost");
  $consulta->asignarUsuario("root");
  $consulta->asignarContrasena("");
  $consulta->asignarBaseDatos("vet_crud");
?>
