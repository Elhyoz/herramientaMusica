<?php
  session_start();
  /*para cuando se cierra sesion
  $cerrar_sesion = $_GET['cerrar_sesion'];


    if ($cerrar_sesion) {
      session_destroy();
    }*/
  include_once "templates/indexHeader.php";
?>
<div class="content container-fluid">
  <h1>Bienvenido(a). Aprende guitarra fácil.</h1>

  <h4>Aprende desde lo más básico</h4>

  <div class="example-container">
    <img src="img/partitura.png" alt="">
  </div>


  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="signupModal" role="dialog">
      <div class="modal-dialog">

        <!-- Sign up modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h2>Inicia sesión</h2>
          </div>

          <div class="modal-body">

            <form action="" method="post" id="targetSignUp">
              <div class="form-group">
                <label for="uname">Correo o usuario:</label>
                <input type="text" class="form-control" id="usr" name="email" required>
              </div>
              <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="registerModal" role="dialog">
      <div class="modal-dialog">

        <!-- Register modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h2>Regístrate</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <form action="" method="post" id="targetRegister">
              <div class="form-group">

                <div class="form-group">
                  <label for="uname">Nombre(s):</label>
                  <input type="text" class="form-control" id="nameUser" name="username" required>
                </div>

                <div class="form-group">
                  <label for="uname">Apellido Paterno:</label>
                  <input type="text" class="form-control" id="apP" name="apPaterno" required>
                </div>

                <div class="form-group">
                  <label for="uname">Apellido Materno:</label>
                  <input type="text" class="form-control" id="apM" name="apMaterno" required>
                </div>

                <div class="form-group">
                  <label for="uname">Número de boleta:</label>
                  <input type="number" class="form-control" id="numBoleta" name="numBoleta" required>
                </div>

                <label for="uname">Correo:</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>

              <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="pass" name="password" required>
              </div>

              <div class="form-group">
                <label for="repeatPwd">Repite la contraseña:</label>
                <input type="password" class="form-control" id="repeatPwd" name="repeatPwd" required>
              </div>

              <div class="form-group">
                <label for="sel1">Eres ... </label>
                <select class="form-control" id="usrLevel" name="tipoUsuario">
                  <option value="1">Alumno</option>
                  <option value="2">Maestro</option>
                  <option value="3">Ad</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary" id="compRegister">Enviar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>

  </div>

  <h4>A lo más avanzado</h4>
  <div class="example-container">
    <img src="img/partitura2.png" alt="">

  </div>
</div>
<?php
  include_once "templates/footer.php";
?>

<script src="js/loginOrRegister.js"></script>
