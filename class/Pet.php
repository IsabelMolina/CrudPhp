<?php
  include 'Database.php';

  class Pet extends Database{

    public function create($pet){
      $sql = "INSERT INTO pet (name, description) VALUES('".$pet['name']."', '".$pet['description']."')";
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }

    public function getAll(){
      $sql = "SELECT * FROM pet";
      $result = $this->query($sql);
      return $result;
    }

    public function getOne($id){
      $sql = "SELECT * FROM pet WHERE id=".$id;
      $result = $this->query($sql);
      return $result;
    }

    public function update($id, $pet){
      $sql = "UPDATE pet SET name='".$pet['name']."', description='".$pet['description']."' WHERE id=".$id;
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }

    public function delete($id){
      $sql = "DELETE FROM pet WHERE id=".$id;
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }
  }
?>