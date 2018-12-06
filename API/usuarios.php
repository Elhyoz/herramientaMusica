<?php
  ob_start();
  session_start();
  include_once "../modelos/Usuario.php";

  $usuario = new Usuario();

  $username = isset($_GET["username"]) ? "'" . limpiarCadena($_GET["username"]) . "'" : "null";
  $apPaterno = isset($_GET["apPaterno"]) ? "'" .  limpiarCadena($_GET["apPaterno"]) . "'" : "null";
  $apMaterno = isset($_GET["apMaterno"]) ? "'" .  limpiarCadena($_GET["apMaterno"]) . "'" : "null";
  $email = isset($_GET["email"]) ? "'" .  limpiarCadena($_GET["email"]) . "'" : "null";
  $numBoleta = isset($_GET["numBoleta"]) ? "'" .  limpiarCadena($_GET["numBoleta"]) . "'" : "null";
  $password = isset($_GET["password"]) ? "'" .  limpiarCadena($_GET["password"]) . "'" : "null";
  $tipoUsuario = isset($_GET["tipoUsuario"]) ? "'" .  limpiarCadena($_GET["tipoUsuario"]) . "'" : "null";


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
      if($rspta != false){
        $objeto = $rspta->fetch_object();

        $_SESSION["idUsuario"] = $objeto->idUsuario;
        $_SESSION["nombre"] = $objeto->nombre;
        $_SESSION["apPaterno"] = $objeto->apPaterno;
        $_SESSION["apMaterno"] = $objeto->apMaterno;
        $_SESSION["email"] = $objeto->email;
        $_SESSION["numBoleta"] = $objeto->numBoleta;
        $_SESSION["password"] = $objeto->password;
        $_SESSION["tipoUsuario"] = $objeto->tipoUsuario;

        echo json_encode(['status' => 'bar']);
      }
      else
        echo json_encode(['status' => 'nope']);
      break;
    case 'destruir':
      session_unset();
      echo session_destroy();
      break;
  }

?>
