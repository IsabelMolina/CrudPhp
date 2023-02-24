<?php

  include '../class/Pet.php';

  $body = $_POST;

  if(empty($body['name']) || empty($body['description'])){
    header("Location: ../422.php");
    exit();
  }

  $pet = new Pet();
  $pet->connectDB();

  $pet->create($body);

  header("Location: index.php");
  
?>
