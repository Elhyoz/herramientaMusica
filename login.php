<?php
  ob_start();
  session_start();
  include_once "templates/header.php";

  /*Si la sesiòn età iniciada, imprime sesion iniciada*/
  if ($_SESSION["loggeado"] == true) {
    echo "<br> pasastesxd <br>";
  }
?>
      <form action="login.php" method="post">
        <label for="username">Nombre de usuario</label>
        <input type="text" name="usuario" placeholder="Juan Pérez"> <br>

        <label for="usrlevel">Eres un(a) ... </label> <br>
        <label for="teacher">Maestro</label>
        <input type="radio" name="maestro"><br>
        <label for="student">Alumno</label>
        <input type="radio" name="alumno"><br>

        <input type="button" name="send" value="Enviar" onclick="fechxd()">
        </form>
    </div>
  </div>

<script>
  function fechxd() {

    fetch('API/material.php?op=verificar&' + )
      .then(function(response) {
        return response.json();
      })
      .then(function(myJson) {
        console.log(myJson);
      });
  }
</script>
<?php
include_once "templates/footer.php";
?>
