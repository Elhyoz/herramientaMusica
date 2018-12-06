<?php
    /*
    $nombreImagen = $_FILES['imagen']['name'];
	$temporalImagen = $_FILES['imagen']['tmp_name'];
	$nombreAudio = $_FILES['audio']['name'];
	$temporalAudio = $_FILES['audio']['tmp_name'];
    */

    if(isset($_POST['submit'])){
        $nombreVideo       = $_FILES['video']['name'];
        $temporalVideo     = $_FILES['video']['tmp_name'];    
        if($nombreVideo){
            $path = 'videos/';
            if(empty($nombreVideo)){
                echo "Elija un archivo";
            } else {
                if($extensionArchivo == "mp4" || $extensionArchivo == "ogg" || $extensionArchivo == "m4v" ){
                    if(move_uploaded_file($temporalVideo, $path.$nombreVideo))
                        echo "Video subido";

                }
            } 
        }   
    }   
        
    /*Buscamos la primer incidencia del caracter .*/
    /*$posicion          = strpos($nombreVideo, ".");*/
    
    /*Obtenemos la extensión del archivo de video subido a través de la función substr, nos devuelve lo que hay después del punto*/
    /*$extensionArchivo  = substr($nombreVideo, $posicion+1);
    $extensionArchivo  = strtolower($extensiónArchivo);*/
	
	
    /*if(isset($nombreVideo)){
    }*/

	/*
    $usuario = "Juan";
    if(isset($nombreImagen)){
		if(!(is_dir('img/'.$usuario))){
			if(mkdir('img/'.$usuario, 0777, true))
				echo "Se creó";
			else 
				echo "No se creó";
		}
		
		if(!(empty($nombreImagen))){
			$rutaImagen = 'img/'.$usuario.'/';
		}
		
		echo $rutaImagen;
		
		if(move_uploaded_file($temporalImagen, $rutaImagen.$nombreImagen)){
			echo 'Se subió el archivo';
		} else{
			echo 'No se pudo subir';
		}
		
	} 
	
	if(isset($nombreAudio)){
		if(!(is_dir('audio/'.$usuario))){
			if(mkdir('audio/'.$usuario, 0777, true)){
				echo "carpeta de audio creada";
			} else{
				echo "No se pudo crear";
			}
		}
		
		if(!(empty($nombreAudio))){
			$rutaAudio = 'audio/'.$usuario.'/';
		}
		
		if($_FILES['audio']['type'] == 'audio/mpeg' || $_FILES['audio']['type'] == 'mpeg3' || $_FILES['audio']['type'] == 'audio/mp3' || $_FILES['audio']['type'] == 'audio/wav'){
			if(move_uploaded_file($temporalAudio, $rutaAudio.$nombreAudio)){
			echo 'Se subió el archivo';
			} else{
				echo 'No se pudo subir';
			}
		}
	}
	*/

            
?>