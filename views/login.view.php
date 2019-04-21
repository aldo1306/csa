<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><!--Titulos-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--Parrafos-->
	<title>Biblioteca UO</title>
</head>
<body>
<!--cabezera-->
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
		<!--columna 1 Nombre Univerisdad-->
    	<article class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
			<a href="#"><img src="img/logoUO2.png" alt=""></a>
			<p>
				<a href="#">Inicio</a>
			</p>
		</article>
		<!--columna 2-->
		<article class="titulo col-xs-12 col-sm-4 col-md-8 col-lg-8">
			<h1>BIBLIOTECA UO</h1>
		</article>		
	</section>	
</header>
<div class="contenedor">
<!--contenido-->
	<section class="seccion1 row">
		<!--contenido columna 1, descripcion-->
		<article class="descripcion col-xs-12 col-sm-4 col-md-6 col-lg-6">
			<p>Bienvenido al Sistema de Administracion para Biblioteca.
			<br>Inicia Sesion para acceder al Panel de administrador 
			<br>y todas sus funciones</p>
			<i class="fa fa-address-card fa-5x"></i>
		</article>
		<!--contenido columna 2, formulario-->
		<aside class="formulario col-xs-12 col-sm-4 col-md-6 col-lg-6">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
				<div class="app-title">
					<img src="img/user2.png" alt="">
				</div>
				<div class="form-group">
					<i class="fa fa-asterisk" aria-hidden="true"></i>
					<input type="text" name="matricula" class="matricula" placeholder="Matricula">
				</div>
				<div class="form-group">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" name="password" class="password" placeholder="Contraseña">
				</div>
					<a class="btn btn-primary btn-large btn-block" id="login" href="#" onclick="login.submit()">Iniciar Sesion</a>
					<a class="login-link" href="#">¿Has olvidado tu contraseña?</a>
					<a class="login-link" href="registro.php">Registrate</a>
			</form>
		</aside>
	</section>
</div>



<script> src="js/bootstrap.min.js"</script>
<script> src="js/jquery.min.js"</script>	
</body>

</html>