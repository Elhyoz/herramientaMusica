<?php
  include_once "templates/indexHeader.php";
?>
<div class="content container-fluid">
  <h1>Bienvenido(a). Aprende guitarra fácil.</h1>

  <p>Aprende desde lo más básico.</p>

  <div class="example-container">
    ejemplo aquí


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

              <form action="#" method="post">
                <div class="form-group">
                  <label for="uname">Correo o usuario:</label>
                  <input type="text" class="form-control" id="usr" name="username">
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
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
              <form action="#" method="post">
                <div class="form-group">

                  <div class="form-group">
                    <label for="uname">Nombre(s):</label>
                    <input type="text" class="form-control" id="usr" name="username">
                  </div>

                  <div class="form-group">
                    <label for="uname">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="usr" name="username">
                  </div>

                  <div class="form-group">
                    <label for="uname">Apellido Materno:</label>
                    <input type="text" class="form-control" id="usr" name="username">
                  </div>

                  <div class="form-group">
                    <label for="uname">Número de boleta:</label>
                    <input type="number" class="form-control" id="usr" name="username">
                  </div>

                  <label for="uname">Correo:</label>
                  <input type="text" class="form-control" id="usr" name="username">
                </div>

                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                </div>

                <div class="form-group">
                  <label for="repeatPwd">Repite la contraseña:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                </div>

                <div class="form-group">
                  <label for="sel1">Eres ... </label>
                  <select class="form-control" id="sel1">
                    <option>Alumno</option>
                    <option>Maestro</option>
                    <option>Ad</option>
                  </select>
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
  </div>

  <p>A lo más avanzado.</p>
  <div class="example-container">
    ejemplo aquí

  </div>
</div>
<?php
  include_once "templates/footer.php";
?>

<script src="js/loginOrRegister.js"></script>
