<?php
session_start();
require_once "conexion.php";

$conexion = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

function validarDato($cadena){
    if(isset($cadena))
    return $datoValido = htmlentities($cadena);
}

function insertarDatos($conexion,$tabla, $valores){
    $sql = "INSERT INTO ".$tabla." VALUES "."(".$valores.")";
    $resultado = mysqli_query($conexion, $sql); 
    if($resultado){
        var_dump($resultado);
        echo "Insertado";
    } else {
        echo "Error al insertar";
    }
        
}

$username     = $_POST["username"];
$apPaterno    = $_POST["apPaterno"];
$apMaterno    = $_POST["apMaterno"];
$numBoleta    = $_POST["numBoleta"];
$email        = $_POST["email"];
$password     = $_POST["password"];
$tipoUsuario  = $_POST["tipoUsuario"];

$valores = $username.$apPaterno.$apMaterno.$numBoleta.$email.$password.$tipoUsuario;
echo $valores;


?>