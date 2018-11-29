<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Falló la conexión " . $conn->connect_error);
  }
  echo "Conexión exitosa";
?>
