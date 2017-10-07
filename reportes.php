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
		<link href="css/estilosElementosv2.css?version=1.0.1" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.4">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->

</head>

<body>
<style>
#divResultadoDetalleCreditos>.row{padding-top: 10px; padding-bottom: 10px}
#divResultadoDetalleCreditos>.row:hover{background-color: #eee;}
</style>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				<div class="sidebar-brand ocultar-mostrar-menu" >
						<a href="#">
								Control Panel
						</a>
				</div>
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png" alt="">
				</div>
				<li>
						<a href="principal.php"><i class="icofont icofont-space-shuttle"></i> Inicio</a>
				</li>
				<li>
						<a href="productos.php"><i class="icofont icofont-washing-machine"></i> Productos</a>
				</li>
				<li>
						<a href="ventas.php"><i class="icofont icofont-cart"></i> Cuadrar caja</a>
				</li>
				<li>
						<a href="#!" id="aCreditoNuevo"><i class="icofont icofont-truck-alt"></i> Crédito nuevo</a>
				</li>
				<li>
						<a href="#!" id="aGastoExtra"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
				</li>
				<li >
						<a href="#!" id="aIngresoExtra"><i class="icofont icofont-ui-rate-add"></i> Ingreso extra</a>
				</li>
				<li>
						<a href="#"><i class="icofont icofont-users"></i> Usuarios</a>
				</li>
				<li class="active">
						<a href="#"><i class="icofont icofont-ui-copy"></i> Reportes</a>
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
									
				<li class="text-center"><a href="php/desconectar.php"><span class="visible-xs">Cerrar Sesión</span><i class="icofont icofont-sign-out"></i></a></li>
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
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Reportes</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabCreditosPendientes" data-toggle="tab">Créditos pendientes</a></li>
					<li><a href="#tabResumenVentas" data-toggle="tab">Ventas resumen</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabCreditosPendientes">
						<!--Inicio de pestaña 01-->
							<p>Tiene Ud. <strong><?php require 'php/returnCreditosCount.php' ?></strong> créditos pendientes por cobrar: </p>
							<p>Seleccione una fecha para ver los créditos: <div id="idFechasCreditos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosNumFecha.php' ?>
								</select>
							</div>
							</p>
							<div class="container">
								 <div class="row"><strong>
								 	<div class="col-xs-4">Detalle</div>
									<div class="col-xs-2"># Comprobante</div>
									<div class="col-xs-2">Fecha</div>
									<div class="col-xs-2">Monto</div>
									<div class="col-xs-2">Estado</div>
								 </strong>
								 </div>
								 <div id="divResultadoDetalleCreditos">
								 	<p>Aún no se solicitó ninguna fecha</p>
								 </div>
							</div>

						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para nueva compra-->
						<div class="tab-pane fade container-fluid" id="tabResumenVentas">
						<!--Inicio de pestaña 02-->
						<p>Seleccione una fecha para ver reporte de ventas: <div id="idFechasCreditos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosNumFecha.php' ?>
								</select>
							</div>
							</p>
						<!--Fin de pestaña 02-->
						</div>
						
					</div>
					<!-- Fin de meter contenido principal -->
					</div>
					
				</div>
		</div>
</div>
<!-- /#page-content-wrapper -->
</div><!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){
	
	$('.selectpicker').selectpicker('refresh');

		$('.mitooltip').tooltip();
		$('input').keypress(function (e) {
			if (e.keyCode == 13)
			{
				$(this).parent().next().children().focus();
				//$(this).parent().next().children().removeAttr('disabled'); //agregar atributo desabilitado
			} 
		});



});


$('#idFechasCreditos').on('click', '.optCreditoFecha', function () {
	var texto= moment($(this).attr('data-tokens'), 'YYYY/M')
	var año= texto.year();
	var mess=texto.month()+1

	//console.log($(this).attr('data-tokens'));
	//console.log(texto.month()+1)
	$.ajax({url: 'php/listarCreditoPorFechaMesAno.php', type: 'POST', data: { mes:mess , anio:año }}).done(function (resp) {
		$('#divResultadoDetalleCreditos').children().remove();
		$.jsonAdeuda=JSON.parse(resp);
		$.each(JSON.parse(resp), function (i, jsonResp) { console.log(jsonResp);
			var adeuda='';
			if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { aduda='<span class="light-green-text">Cancelado</span>'}
			$('#divResultadoDetalleCreditos').append(`<div class="row" id="${jsonResp.idcreditos}"><div class="col-xs-4 ">${$('#divResultadoDetalleCreditos .row').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} galones de ${jsonResp.prodNombre}</div>
					<div class="col-xs-2">${jsonResp.credcomprobante}</div>
					<div class="col-xs-2">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</div>
					<div class="col-xs-2">${parseFloat(jsonResp.credCosto).toFixed(2)}</div>
					<div class="col-xs-2">${adeuda} <button class="btn btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button></div></div>`);
		});
		
	})
});
$('#divResultadoDetalleCreditos').on('click', '.btnAdeudaDetalle', function () {
	console.log($(this).parent().parent().attr('id'));
});
</script>

</body>

</html>
