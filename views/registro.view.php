<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><!--Titulos-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--Parrafos-->
	<title>Registro de Usuarios</title>
</head>
<body>
<!--cabezera-->
<header class="container">
	<section class="main row">
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<!-- mostrar mensajes de error-->
		<?php if(!empty($errores)): ?>
			<div class="alert alert-danger">
				<ul>
					<?php echo $errores; ?>
				</ul>
			</div>
		<?php endif; ?>
		</article>
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<!-- mostrar mensajes de error-->
		<?php if(!empty($listo)): ?>
			<div class="alert alert-success">
				<ul>
					<?php echo $listo; ?>
				</ul>
			</div>
		<?php endif; ?>
		</article>
		<!--columna 1 Nombre Univerisdad-->
    	<article class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
			<a href="#"><img src="img/logoUO4.png" alt=""></a>
			<p>
				<a href="#">Inicio</a>
				/
				<a class="login-link" href="login.php"> Iniciar Sesion</a>
			</p>
		</article>
		<!--columna 2-->
		<article class="titulo col-xs-12 col-sm-4 col-md-8 col-lg-8">
			<h1>BIBLIOTECA UO</h1>
			<h5>-Registro de Usuarios-</h5>
		</article>		
	</section>	
</header>
<div class="contenedor">
<!--contenido-->
	<section class="seccion1 row">
		<!--contenido columna 1, formulario-->
		<aside class="formulario col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<h3>Registrarse</h3>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
				<div class="form-group">
					<i class="fa fa-asterisk" aria-hidden="true"></i>
					<input type="text" name="matricula" class="matricula" placeholder="Matricula">
				</div>
				<div class="form-group">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="usuario" class="usuario" placeholder="Usuario">
				</div>
				<div class="form-group">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="apellido1" class="apellido1" placeholder="Primer Apellido ">
				</div>
				<div class="form-group">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="apellido2" class="apellido2" placeholder="Segundo Apellido ">
				</div>
				<div class="form-group">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="email" name="correo" class="correo" placeholder="Correo">
				</div>
				<div class="form-group">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" name="password" class="password" placeholder="Contraseña">
				</div>
				<div class="form-group">
					<i class="icono izquierda fa fa-lock"></i>
					<input type="password" name="password2" class="password2" placeholder="Repetir Contraseña">
				</div>
				<div class="form-goup row justify-content-center">
					<button type="button" class="btn btn-primary btn-block" id="regist" href="#" onclick="login.submit()">Registrar</button>
				</div>
			</form>
		</aside>
	</section>
</div>
<script> src="js/bootstrap.min.js"</script>
<script> src="js/operaciones.js"</script>
<script> src="js/jquery.min.js"</script>	
</body>

</html>