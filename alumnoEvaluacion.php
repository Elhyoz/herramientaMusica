<?php
  include_once "templates/header.php";
?>
<div class="content container-fluid">
  <h1>Selecciona el nivel de evaluación</h1>
  
  <div class="basic-ev">
    <div class="form-group">
      <label for="sel1">Eres ... </label>
      <select class="form-control" id="usrLevel" name="tipoUsuario">
        <option value="1">Alumno</option>
        <option value="2">Maestro</option>
        <option value="3">Ad</option>
      </select>
    </div>


  </div>
</div>
<?php
  include_once "templates/footer.php";
?>
