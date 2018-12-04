<?php
require "../config/conexion.php";

Class Usuario{

  public function __construct(){

  }

  public function insertar($nombre, $apPaterno, $apMaterno, $email, $password, $tipoUsuario){
    $sql =  "INSERT INTO usuario (nombre, apPaterno, apMaterno, email, password, tipoUsuario) VALUES ($nombre, $apPaterno, $apMaterno, $email, $password, $tipoUsuario)";
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
