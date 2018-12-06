<?php 

session_start();
require_once "conexion.php";

function validarDato($cadena){
    if(isset($cadena))
    return $datoValido = htmlentities($cadena);
}

function insertarDatos($conexion, $tabla, $campos, $valores){
    $sql = "INSERT INTO ".$tabla.$campos." VALUES (".$valores.")";
    $resultado = mysqli_query($conexion, $sql); 
    var_dump($resultado);
    if($resultado){
        echo "Insertado";
    } else {
        echo mysqli_connect_errno();
    
    }
        
}

function seleccionarTodosDatos($conexion, $tabla){
    $sql = "SELECT * FROM ".$tabla;
    $resultado = mysqli_query($conexion, $sql);
    
    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_assoc($resultado))
            echo $row['boleta']."<br>";
    }
}

function iniciarSesion($conexion, $correo, $pass){
    $sql = "SELECT correo, contrasena FROM alumno where correo='".$correo."' AND contrasena ='".$pass."'";
    $resultado = mysqli_query($conexion, $sql);
    
    if(mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $_SESSION['usuario'] = $correo;
        echo $row['correo']." ".$row['contrasena'];
        var_dump($_SESSION['usuario']);
    }else {
        echo "No existe el usuario";
    }
}



$nombre          = "Juan";//validarDato($_POST["nombre"]);
$apellidoPaterno = "Perez"; //validarDato($_POST["apellidoPaterno"]);
$apellidoMaterno = "Perez"; //validarDato($_POST["apellidoMaterno"]);
$boleta          = 55; //validarDato($_POST["boleta"]);
$carrera         = "ISC"; //validarDato($_POST["carrera"]);
$correo          = "lalala@gmail.com"; //validarDato($_POST["correo"]);
$contrasena      = "123"; //sha1(validarDato($_POST["contrasena"]));

//$valores = "'".$boleta."', '".$nombre."', '".$apellidoPaterno."', '".$apellidoMaterno."', '".$carrera."', '".$correo."', '".$contrasena."'";
//$campos = "(boleta, nombre, apellidoPaterno, apellidoMaterno, carrera, correo, contrasena)";
//insertarDatos($conexion, "alumno", $campos, $valores);

//seleccionarTodosDatos($conexion, "alumno");

//iniciarSesion($conexion, $correo, $contrasena);

?>