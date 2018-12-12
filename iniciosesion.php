<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "dbguitar";
 $tbl_name = "usuario";
 $apellido=$_POST['Apellido'];
 $boleta=$_POST['Boleta'];
 $usuario=$_POST['Usuario'];
 $hash = sha1($_POST["pass"]);
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$buscarUsuario = "SELECT * FROM $tbl_name
WHERE Nombre = '$_POST[username]' ";
$result = $conexion->query($buscarUsuario);
 $count = mysqli_num_rows($result);
 if ($count == 1) {
 echo "<br />". "Usuario Registrado." . "<br />";
 echo "<a href='index.php'>Aceptar</a>";
 }
 else{
 $query = "INSERT INTO usuario (Nombre,Apellido,Boleta,Usuario, Contrasena) VALUES ('$_POST[username]','$apellido','$boleta','$usuario','$hash')";


 if ($conexion->query($query) == TRUE) {
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Usuario registrado: " . "<a href='index.php'>Login</a>" . "</h5>";
 }
 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
