<?php
	//Documento para iniciar sesio o crear a un nuevo usuario
	include_once 'conexion.php'

	$id_registro = $_POST['name']//Aqui se deberia recibir el name del form
	if ($_POST['name'] == 'nuevo') { /*name del form lo indique con name*/
		/*<input type="hidden" id="registro-usuario" name="registro-usuario" value="nuevo"> con este boton envia un valor en este caso value='nuevo'*/
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombre'];
		$apPat = $_POST['ApPat'];
		$apMat = $_POST['ApMat'];
		$boleta = $_POST['boleta'];
		$correo = $_POST['mail'];
		$contrasena = $_POST['contrasena'];
		/*$id_registro = $_POST['id_registro'];*/
		//Checar si esta enviadno los datosdie(json_encode($_POST));

		
		/*Encriptar password
		$opciones = array(
			'cost' => 12
		);

		$password_hashed = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);*/
		/*hasta aqui se encripta*/

		try {

			//include_once 'funciones/funciones.php';
			$stmt = $conn->prepare("INSERT INTO usuarios (usuario,nombre,ApPat,ApMat,boleta,correo,contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)");/*insercion de datos*/
			$stmt->bind_param("sssssss",$usuario,$nombre,$apPat,$apMat,$boleta,$correo,$contrasena);
			$stmt->execute();
			$id_registro = $stmt->insert_id;
			if ($id_registro > 0) { 
				//Deberia ir una animacion para decir si esta correcto
				//$stmt->affected_rows
				/*$respuesta = array(
					'respuesta' => 'exito',
					'id_usuario' => $id_registro
				);Manda una respuesta con AJAX*/
				
				
			}else{
				/*
				$respuesta = array(
					'respuesta' => 'Error'
				);Manda una respuesta con AJAX*/
			}
			$stmt->close();
			$stmt->close();
			/*Cierra el stmt*/
				
		} catch (Exception $e) {
			/*echo "Error".$e->getMessage();
			Manda un mensaje de error. COn AJAX se hace
			*/
		}

		/**die(json_encode($respuesta));
		Manda una respuesta con AJAX*/
	}elseif(isset($_POST['name'])){/*name del form lo indique con name*/
		//Cacha al usuario y contrasenia
		/*Si quieres restringir el acceso a los usuarios logeadosen cualquier
		documento php debes incluir esto:
		include_once 'sesiones.php';
		determina si esta abierta la sesion o si esta cerrada
		en caso de que no se hay iniciado secion esta lo regresa a login
		*/
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];

		try {

			$stmt = $conn->prepare("SELECT id_usuarios, usuario, nombre,contrasena FROM tabladeUsuariosentubase WHERE usuario = ?;");/*Trae todo los datos de usuario desde tu base
			acomoda los atributos tal y como estan en labase
			*/
			$stmt->bind_param("s",$usuario);/*Este es el usuario del cual se trae la informacion*/
			$stmt->execute();
			$stmt->bind_result($id_usuario, $usuario_usuario, $nombre_usuario, $password_usuario);
			if ($stmt->affected_rows) {
				$existe = $stmt->fetch();
				if ($existe) {
					if ($contrasena == $password_usuario) {
						session_start();
						$_SESSION['usuario'] = $usuario_usuario;
						$_SESSION['nombre'] = $nombre_usuario;
						$respuesta = array(
							'respuesta' => 'exitoso',
							'usuario' => $usuario_usuario
						);
					}else{
						$respuesta = array(
							'respuesta' => 'error'
						);
					}
				}else{
					$respuesta = array(
						'respuesta' => 'error'
					);
				}
			}
			$stmt->close();
			$stmt->close();





		}catch (Exception $e){
			//Manda un mensaje de error con AJAX
		}
		//Manda una respuesta en caso de que este bien
	}
?>