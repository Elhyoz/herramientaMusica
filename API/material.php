<?php
  session_start();
  include_once "../modelos/Material.php";

  $material = new Material();

  $partitura = isset($_GET["partitura"]) ? "'" . limpiarCadena($_GET["partitura"]) . "'" : "null";
  $video = isset($_GET["video"]) ? "'" .  limpiarCadena($_GET["video"]) . "'" : "null";
  $libro = isset($_GET["libro"]) ? "'" .  limpiarCadena($_GET["libro"]) . "'" : "null";
  $ejercicio = isset($_GET["ejercicio"]) ? "'" .  limpiarCadena($_GET["ejercicio"]) . "'" : "null";

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
      $status = $material->insertar($partitura, $video, $libro, $ejercicio);
      echo $status ? "insertado" : "nel :v";
      break;
    case 'listar':
      $data = Array();
      $consulta = $material->listar();
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
      $rspta = $material->verificar($partitura, $video);
      if($rspta != false)
  			$objeto = $rspta->fetch_object();
  		if(isset($objeto))
        $_SESSION["loggeado"] = true;

      echo "concedido";
      break;
  }



?>
