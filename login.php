<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="content-box grid-container">
      <!-- <div id="guitar-img">

      </div>
      <div class="login-box">
        <p>ola k ase</p>
      </div> -->
      <form action="login.php" method="post">
        <label for="username">Nombre de usuario</label>
        <input type="text" name="usuario" placeholder="Juan Pérez"> <br>

        <label for="usrlevel">Eres un(a) ... </label> <br>
        <label for="teacher">Maestro</label>
        <input type="radio" name="maestro"><br>
        <label for="student">Alumno</label>
        <input type="radio" name="alumno"><br>

        <input type="button" name="send" value="Enviar">
        </form>
    </div>
  </div>


  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $msg = "Conexión exitosa";
    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Falló la conexión " . $conn->connect_error);
    }
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  ?>

  <?php



  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
