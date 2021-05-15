<?php
  class cConsultas extends cConexion{
    private $sql;

    function __construct(){
        parent::__construct();
        $this->sql="";
    }

    public function asignarConsulta($query){
      $this->sql = mysqli_query($this->obtenerConexion(), $query);
    }

    public function obtenerConsulta(){
        return $this->sql;
    }

    public function obtenerTotalRegistros(){
        return mysqli_num_rows($this->sql);
    }

    public function liberarConsulta(){
        return mysqli_free_result($this->sql);
    }
  }
?>
