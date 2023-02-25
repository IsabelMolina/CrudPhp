<?php

  include '../class/Pet.php';

  $body = $_POST;
  $id = $_GET['id'];
    
  if(empty($body['name']) || empty($body['description'] )){
    header("Location: edit.php");
    exit();
  }

  $pet = new Pet();
  $pet->connectDB(); 
  $result = $pet->getOne($id);
  $rows = $result->num_rows;
    
  if(!$rows > 0){
    header("Location: ../404.php");
    exit();
  }

  $pet->update($id, $body);

  header("Location: index.php");

?>
