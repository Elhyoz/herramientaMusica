<?php

$host     =  "localhost";
$usuario  =  "root";
$pass     =  "";
$bd       =  "proyectoBD";

$conexion = mysqli_connect($host, $usuario, $pass, $bd);
    
    if(!$conexion){
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    } else{
        return $conexion;
    }

?>