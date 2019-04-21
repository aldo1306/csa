<?php 
	session_start(); // sesion iniciada

	if (isset($_SESSION['matricula'])) { // verificar si ya tiene una sesion iniciada
		header('Location: index.php'); // si la hay me direcciona al contenido y no a los formularios
	}

	//RESIVIR DATOS DEL FORMULARIO REGISTRO
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica que se envien los datos
		   //guardamos los datos en variables
		   //atributo - strtolower (convierte texto a minusculas)
		   //atributo - Filter saniitiza string (elimina carecteres invalidos)
		$matricula = $_POST['matricula'];
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$apellido1 = filter_var(strtolower($_POST['apellido1']), FILTER_SANITIZE_STRING);
		$apellido2 = filter_var(strtolower($_POST['apellido2']), FILTER_SANITIZE_STRING);
		$correo = $_POST['correo'];
		$password= $_POST['password'];
		$password2 = $_POST['password2'];

		$errores = ''; //variable para errores
		$listo = ''; 
		//comprobar los campos de errores
		if (empty($matricula) or empty($usuario) or empty($apellido1) or empty($apellido2) or empty($correo) or empty($password) or empty($password2)) {
			$errores .= '<li>Por favor llena todos los campos correctamente</li>'; //si hay error muestra mensaje
		} else {
			try { //establecer conexion para verificar usuario
				$conexion = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', 'avalon13');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage(); //mensaje error si no se hace la conexion
			}

			//consulta y hay usuario
			$statement = $conexion->prepare('SELECT * FROM encargados WHERE matricula = :matricula LIMIT 1');
			$statement->execute(array(':matricula' => $matricula)); //comparar campos
			$resultado = $statement->fetch();

			if ($resultado !=false) {
			$errores .= '<li>El Usuario ya existe</li>'; //mensaje de error si el usuario ya existe
			}

			$password = hash('sha512', $password); //encriptar contraseñas
			$password2 = hash('sha512', $password2);

			if ($password != $password2 ){
				$errores .= '<li> Las contraseñas no son iguales</li>';
			}
		}

			if ($errores == '') { //si no hay error
			//establecer coneccion con la base de datos para guardar la informacion
			$listo .= '<li>Registro Exitoso</li>'; //si hay error muestra mensaje
			$statement = $conexion->prepare('INSERT INTO encargados (matricula, usuario, apellido_p, apellido_m, correo, pass) VALUES (:matricula, :usuario, :apellido_p, :apellido_m, :correo, :pass)');
			$statement->execute(array(
				':matricula' => $matricula, 
				':usuario' => $usuario, 
				':apellido_p' => $apellido1,
				':apellido_m' => $apellido2,
				':correo' => $correo, 
				':pass' => $password
			));

			
		}

	}

		require 'views/registro.view.php'; //manda a llamar la vista del formulario de registro

?>