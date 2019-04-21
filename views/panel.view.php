<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Panel de Administrador</title>
	<link rel="stylesheet" href="css/panel.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><!--Titulos-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--Parrafos-->
</head>
<body>
	<header class="search row"><!--Buscador-->
		<!--Buscador-->
		<article class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<img src="img/logoUO4.png" alt="">
		</article>
		<article class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
			<nav class="navbar navbar-light bg-faded justify-content-between">
			  <form class="form-inline">
			    <input type="text" placeholder="Buscar...">
			    <button type="submit">
			    	<i class="fa fa-search" aria-hidden="true"></i>
			    </button>
			  </form>
			</nav>
		</article>
		<article class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
			<a href="cerrar.php">Cerrar Sesion</a>
		</article>	
	</header>
	<!-- Menu Principal-->
	<section class="contenedor raw">
		<form action="sub_menu.php" method="GET" class="formulario" name="panel">
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" menu="1">			
					<a href="sub_menu.php?menu=1" id="1">
						<i class="fa fa-archive fa-2x"></i>
						<p class="texto-center">INVENTARIO</p>
					</a>
				</div>
			</article>
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="2">			
					<a href="sub_menu.php?menu=2" id="2">
						<i class="fa fa-user fa-2x"></i>
						<p class="texto-center">USUARIOS</p>
					</a>
				</div>
			</article>
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="3">				
					<a href="sub_menu.php?menu=3" id="3">
						<i class="fa fa-book fa-2x"></i>
						<p class="texto-center">PRESTAMOS</p>
					</a>
				</div>
			</article>
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="4">
					<a href="sub_menu.php?menu=4" id="4">
						<i class="fa fa-usd fa-2x"></i>
						<p class="texto-center">MULTAS</p>
					</a>
				</div>
			</article>
					<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="5">
					<a href="sub_menu.php?menu=5" id="5">
						<i class="fa fa-users fa-2x"></i>
						<p class="texto-center">VISITAS</p>
					</a>
				</div>
			</article>
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="6">				
					<a href="sub_menu.php?menu=6" id="6">
						<i class="fa fa-plus fa-2x"></i>
						<p class="texto-center">DONACIONES</p>
					</a>
				</div>
			</article>
			<article class="panelA col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="box-menu" id="7">
					<a href="sub_menu.php?menu=7" id="7">
						<i class="fa fa-bookmark fa-2x"></i>
						<p class="texto-center">REPORTE MENSUAL</p>
					</a>
				</div>
			</article>
		</form>
	</section>
	<script> src="js/bootstrap.min.js"</script>
	<script> src="js/jquery-3.2.1.js"</script>
</body>
</html>