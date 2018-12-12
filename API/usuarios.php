<?php
  ob_start();
  session_start();
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
      if($status){
        $_SESSION["nombre"] = $username;
        $_SESSION["apPaterno"] = $apPaterno;
        $_SESSION["apMaterno"] = $apMaterno;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["tipoUsuario"] = $tipoUsuario;
      }
      echo $status ? json_encode(["status" => "insertado", "usrLevel" => $_POST['tipoUsuario']]) : "Error al registrar";
      break;
    case 'listar':
      $data = Array();
      $consulta = $usuario->listar();
      if($consulta != false)
        while($reg = $consulta->fetch_object()){
          $data[] = [
            "idUsuario" => $reg->idUsuario,
            "nombre" => $reg->nombre,
            "apPaterno" => $reg->apPaterno,
            "email" => $reg->email,
            "numBoleta" => $reg->numBoleta,
            "tipoUsuario" =>$reg->tipoUsuario
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
