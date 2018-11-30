<?php
  include_once "../modelos/Material.php";
  $material = new Material();
  /*$partitura = limpiarCadena($_GET["partitura"]);
  $video = limpiarCadena($_GET["video"]);
  //$libro = limpiarCadena($_GET["libro"]);
  //$ejercicio = limpiarCadena($_GET["ejercicio"]);
  $arr = [
    "part" => $partitura,
    "vid" => $video
  ];
  echo json_encode($arr);
  */
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

?>
