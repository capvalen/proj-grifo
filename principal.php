<?php
session_start();
if (@!$_SESSION['Atiende']){//sino existe enviar a index
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Inicio: Infocat-Grifo</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.5" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.5" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.2">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/pacifico.css">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->

</head>

<body>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			
			<div class="logoEmpresa ocultar-mostrar-menu">
				<img class="img-responsive" src="images/empresa.png?version=1.1" alt="">
			</div>
			<li class="active">
					<a href="principal.php"><i class="icofont icofont-home"></i> Inicio</a>
			</li>
			<li>
					<a href="productos.php"><i class="icofont icofont-washing-machine"></i> Productos</a>
			</li>
			<li>
					<a href="ventas.php"><i class="icofont icofont-shopping-cart"></i> Cuadrar caja</a>
			</li>
			<li>
					<a href="#!" id="aCreditoNuevo"><i class="icofont icofont-ui-love-add"></i> Crédito nuevo</a>
			</li>
			<li>
					<a href="#!" id="aGastoExtra"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
			</li>
			<li>
					<a href="#!" id="aIngresoExtra"><i class="icofont icofont-ui-rate-add"></i> Ingreso extra</a>
			</li>
			<li>
					<a href="#!" id="aIngresoTanque"><i class="icofont icofont-truck-loaded"></i> Tanquear</a>
			</li>
			<li>
					<a href="reportes.php"><i class="icofont icofont-ui-copy"></i> Reportes</a>
			</li>
			<li>
					<a href="usuarios.php"><i class="icofont icofont-users"></i> Usuarios</a>
			</li>
			<li>
					<a href="#!" class="ocultar-mostrar-menu"><i class="icofont icofont-swoosh-left"></i> Ocultar menú</a>
			</li>
		</ul>
	</div>
			<!-- /#sidebar-wrapper -->
<div class="navbar-wrapper">
	<div class="container-fluid">
		<nav class="navbar navbar-fixed-top encoger">
			<div class="container">
				<div class="navbar-header ">
				<a class="navbar-brand ocultar-mostrar-menu" href="#"><img id="imgLogoInfocat" class="img-responsive" src="images/logo.png" alt=""></a>
					<button type="button" class="navbar-toggle collapsed" id="btnColapsador" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse ">
					<ul class="nav navbar-nav">
						<li class="hidden down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HR <span class="caret"></span></a>
								<ul class="dropdown-menu">
										<li><a href="#">Change Time Entry</a></li>
										<li><a href="#">Report</a></li>
								</ul>
							</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						 <li>
							<div class="btn-group has-clear hidden"><label for="txtBuscarNivelGod" class="text-muted visible-xs">Buscar algo:</label>
								<input type="text" class="form-control" id="txtBuscarNivelGod" placeholder="&#xeded;">
								<span class="form-control-clear glyphicon glyphicon-remove-circle form-control-feedback hidden"></span>
							</div>
						 </li>
						 <li id="liDatosPersonales"><a href="#!"><p><strong>Usuario: </strong> <span class="mayuscula" id="menuNombreUsuario"><?php echo $_SESSION["Atiende"]; ?></span></p><small class="text-muted text-center" id="menuFecha"><span id="fechaServer"></span> <span id="horaServer"><?php require('php/gethora.php') ?></span> </small></a></li>
							
		<li class="text-center"><a href="php/desconectar.php"><span class="visible-xs">Cerrar Sesión</span><i class="icofont icofont-ui-power"></i></a></li>
					</ul>
						
				</div>
		</div>
		</nav>
	</div>
</div>
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">				 
			<div class="row">
				<div class="col-lg-12 contenedorDeslizable fondoGeo">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-animal-cat-alt-4"></i> Bienvenido: <small style="font-size: 60%;">Software Info-Combustion <span class="yellow-text text-darken-2"><?php include 'php/version.php' ?></span></small></h2>
	
	
				<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
					 <!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="ventas.php" class="btn btn-warning btn-outline btn-circle-grande" role="button"><i class="icofont icofont-cart-alt"></i></a> </p>
							<h4 class="text-center">Realizar una nueva venta</h4 >
							
							
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
					 <!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="productos.php#tabCrearProducto" class="btn btn-success btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-herbal"></i></a> </p>
							<h4 class="text-center">Crear un producto nuevo</h4 >
							
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">	
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="ventas.php" class="btn btn-negro btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-money-bag"></i></a> </p>
							<h4 class="text-center">Cerrar caja</h4 class="text-center">
							
							
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="compras.php" class="btn btn-info btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-meeting-add"></i></a> </p>
							<h4 class="text-center">Ingresar nueva compra</h4 >
							
							
						</div>
					</div>
				</div>
					<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="#" class="btn btn-morado btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-businessman"></i></a> </p>
							<h4 class="text-center">Ingresar un proveedor</h4>
							
							
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="#" class="btn btn-morita btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-industries-alt-5"></i></a> </p>
							<h4 class="text-center">Ingresar un Laboratorio</h4>
							
							
						</div>
					</div>
				</div>
					<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="#" class="btn btn-primary btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-growth"></i></a> </p>
							<h4 class="text-center">Ver todas las compras</h4>        
							
						</div>
					</div>
				</div>
					<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="inventario.php#nuevoInventario" class="btn btn-indigo btn-outline btn-circle-grande" role="button"><i class="icofont icofont-list"></i></a> </p>
							<h4 class="text-center">Ingresar inventario</h4>
											
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="reportes.php" class="btn btn-success btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-files"></i></a> </p>
							<h4 class="text-center">Solicitar reportes</h4>
											
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<!-- <img src="images/cara.jpg" alt="...">-->
						<div class="caption">
							<p class="text-center"><a href="#" class="btn btn-danger btn-outline btn-circle-grande	" role="button"><i class="icofont icofont-paw"></i></a> </p>
							<h4 class="text-center">Otras configuraciones</h4>
											
						</div>
					</div>
				</div>
					<!-- Fin de meter contenido principal -->
					</div>
					
				</div>
		</div>
</div>
<!-- /#page-content-wrapper -->
</div><!-- /#wrapper -->
<?php include ('php/llamandoModals.php'); ?>
	
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.0.1"></script>
<script src="js/accionesGlobales.js?version=1.0.9"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>

<!-- Menu Toggle Script -->
<script>
datosUsuario();
$(document).ready(function(){

$('.caption').click(function () {
	//$(this).find('a').click();
})
});
</script>

</body>

</html>
