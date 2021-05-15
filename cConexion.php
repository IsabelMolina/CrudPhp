<?php
  class cConexion{
    private $servidor;
    private $usuario;
    private $contrasena;
    private $basedatos;
    private $link;

    function __construct(){
        $this->servidor="";
        $this->usuario="";
        $this->contrasena="";
        $this->basedatos="";
        $this->link="";
    }

    public function asignarServidor($host){
        $this->servidor = $host;
    }

    public function asignarUsuario($user){
        $this->usuario  = $user;
    }

    public function asignarContrasena($pwd){
        $this->contrasena = $pwd;
    }

    public function asignarBaseDatos($bd){
        $this->basedatos=$bd;
    }

    public function obtenerServidor(){
        return $this->servidor;
    }

    public function obtenerUsuario(){
        return $this->usuario;
    }

    public function obtenerContrasena(){
        return $this->contrasena;
    }

    public function obtenerBaseDatos(){
        return $this->basedatos;
    }

    public function conectarBaseDatos(){
        if(!($this->link= mysqli_connect($this->servidor, $this->usuario, $this->contrasena))){
            echo "Error al acceder a la base de datos";
            exit();
        }

        if(!mysqli_select_db($this->link,$this->basedatos)){
            echo "Base de datos no valida";
            exit();
        }
    }

    public function obtenerConexion(){
        return $this->link;
    }

    public function cerrarConexion(){
        mysqli_close($this->link);
    }

  }
?>
