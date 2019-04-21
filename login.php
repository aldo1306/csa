<?php 
	session_start(); // sesion iniciada

	if (isset($_SESSION['matricula'])) { // verificar si ya tiene una sesion iniciada
		header('Location: index.php'); // si la hay me direcciona al contenido y no a los formularios
	}

	$errores = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica que se envien los datos
		//guardamos los datos en variables
		$matricula = $_POST['matricula'];
		$password= $_POST['password'];
		$password = hash('sha512', $password); //encriptar contraseñas
	

	try { //establecer conexion para verificar usuario
		$conexion = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', 'avalon13');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage(); //mensaje error si no se hace la conexion
	}

	//consulta y hay usuario
	$statement = $conexion->prepare('SELECT * FROM encargados WHERE matricula = :matricula AND pass = :password');
	$statement->execute(array('matricula' => $matricula, 'password' => $password)); //comparar campos
	$resultado = $statement->fetch();

	if($resultado !== false) { //si los tados son correctos
		$_SESSION['matricula'] = $matricula; //inicia sesion
		header('Location: index.php'); //rediecciona al contenido
	} else { // de lo contrario
		$errores .= '<li> Datos Incorrectos</li>'; //mensage de error
	}



	}
	require 'views/login.view.php';
 ?>