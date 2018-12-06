<?php
  include_once "templates/maestroHeader.php";
?>

<div class="content container-fluid">
  <h1>Bienvenido maestro(a)</h1>
  <h4>¿Qué desea hacer? </h4>

  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#evaluateModal" id="evaluate">Comenzar evaluaciones</button><br><br>

  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#chargeModal" id="cursoContent">Subir contenido para cursos</button><br><br>

  <div class="modal fade" id="evaluateModal" role="dialog">
    <div class="modal-dialog">

      <!-- Sign up modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h2>Evalúa</h2>
        </div>

        <div class="modal-body">

          <form action="" method="post" id="targetEvaluation">
            <div class="form-group">
              <label for="sel1">Selecciona el nivel de la evaluación que deseas realizar </label>
              <select class="form-control" id="usrLevel" name="tipoUsuario">
                <option value="bas">Básico</option>
                <option value="inter">Intermedio</option>
                <option value="avan">Avanzado</option>
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

  <div class="modal fade" id="chargeModal" role="dialog">
    <div class="modal-dialog">

      <!-- Sign up modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h2>Evalúa</h2>
        </div>

        <div class="modal-body">

          <form action="" method="post" id="targetCharge">
            <div class="form-group">
              <label for="sel1">Selecciona el nivel del contenido a subir </label>
              <select class="form-control" id="usrLevel" name="tipoUsuario">
                <option value="bas">Básico</option>
                <option value="inter">Intermedio</option>
                <option value="avan">Avanzado</option>
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

<?php
  include_once "templates/footer.php";
?>
