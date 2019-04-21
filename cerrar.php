<?php session_start(); // sesion iniciada

	session_destroy(); //cerrar sesion
	$_SESSION = array(); //limpiar sesion

	header('Location: login.php');
?>