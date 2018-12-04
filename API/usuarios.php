<?php
  //session_start();
  include_once "../modelos/Usuario.php";

  $usuario = new Usuario();

  $username = isset($_POST["username"]) ? "'" . limpiarCadena($_POST["username"]) . "'" : "null";
  $apPaterno = isset($_POST["apPaterno"]) ? "'" .  limpiarCadena($_POST["apPaterno"]) . "'" : "null";
  $apMaterno = isset($_POST["apMaterno"]) ? "'" .  limpiarCadena($_POST["apMaterno"]) . "'" : "null";
  $email = isset($_POST["email"]) ? "'" .  limpiarCadena($_POST["email"]) . "'" : "null";
  $numBoleta = isset($_POST["numBoleta"]) ? "'" .  limpiarCadena($_POST["numBoleta"]) . "'" : "null";
  $password = isset($_POST["password"]) ? "'" .  limpiarCadena($_POST["password"]) . "'" : "null";
  $tipoUsuario = isset($_POST["tipoUsuario"]) ? "'" .  limpiarCadena($_POST["tipoUsuario"]) . "'" : "null";


  /*$video = limpiarCadena($_GET["video"]);
  //$libro = limpiarCadena($_GET["libro"]);
  //$ejercicio = limpiarCadena($_GET["ejercicio"]);
  $arr = [
    "part" => $partitura,
    "vid" => $video
  ];
  echo json_encode($arr);
  */
  switch ($_GET['op']) {
    case 'insertar':
      $status = $usuario->insertar($username, $apPaterno, $apMaterno, $email, $password, $tipoUsuario);
      echo $status ? json_encode("insertado") : json_encode("nel :v");
      break;
    case 'listar':
      $data = Array();
      $consulta = $usuario->listar();
      if($consulta != false)
        while($reg = $consulta->fetch_object()){
          $data[] = [
            "partitura" => $reg->partitura,
            "video" => $reg->video,
            "id" => $reg->idMaterial
          ];
        }
      echo json_encode($data);
      break;
    case 'verificar':
      $rspta = $usuario->verificar($email, $password);
      if($rspta != false)
  			$objeto = $rspta->fetch_object();
  		if(isset($objeto))
        echo json_encode(["1" => "concedido"]);
        //$_SESSION["loggeado"] = true;
      else
        echo json_encode(["1" => $email, "2" => $password]);
      break;
  }

?>
