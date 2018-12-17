<?php
require "../config/conexion.php";

Class Usuario{

  public function __construct(){

  }

  public function insertar($nombre, $apPaterno, $apMaterno, $email, $password, $tipoUsuario, $numBoleta){
    $sql =  "INSERT INTO usuario (nombre, apPaterno, apMaterno, email, password, tipoUsuario, numBoleta) VALUES ($nombre, $apPaterno, $apMaterno, $email, $password, $tipoUsuario, $numBoleta)";
    return ejecutarConsulta($sql);
  }

  public function listar(){
    $sql = "SELECT * FROM usuario";
    return ejecutarConsulta($sql);
  }

  public function verificar($email, $password){
    $sql = "SELECT * FROM usuario WHERE email=$email AND password=$password";
    return ejecutarConsulta($sql);
  }

}

?>
