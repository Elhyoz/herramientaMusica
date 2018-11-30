<?php

require "../config/conexion.php";

Class Material{

	public function __construct(){

	}

	public function insertar($partitura, $video, $libro, $ejercicio){
		$sql =  "INSERT INTO material (partitura, video, libro, ejercicio) VALUES ($partitura, $video, $libro, $ejercicio)";
		return ejecutarConsulta($sql);
	}

	public function listar(){
		$sql = "SELECT * FROM material";
		return ejecutarConsulta($sql);
	}

}

?>
