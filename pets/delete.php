<?php

  include '../class/Pet.php';

  $id = $_GET['id'];

  $pet = new Pet();
  $pet->connectDB(); 
  $result = $pet->getOne($id);
  $rows = $result->num_rows;

  if(!$rows > 0){
    header("Location: ../404.php");
    exit();
  }

  $pet->delete($id);

  header("Location: index.php");

?>
