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

		<title>Ventas: Infocat-Grifo</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.7" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.4" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.3">
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
@media print {
		.tab-pane, h3{padding: 0px; margin: 0px;}
}
.panel-morado .col-xs-1 {
	padding-left: 0px; padding-right: 0px;
	width: 10%;
}
.panel-morado .col-xs-3 {
	padding-left: 15px; padding-right: 0px;
	width: 30%;
}
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
				<li class="active">
						<a href="ventas.php"><i class="icofont icofont-shopping-cart"></i> Cuadrar caja</a>
				</li>
				<li>
						<a href="#!" id="aCreditoNuevo"><i class="icofont icofont-ui-love-add"></i> Crédito nuevo</a>
				</li>
				<li>
						<a href="#!" id="aGastoExtra"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
				</li>
				<li >
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
								 <li id="liDatosPersonales"><a href="#!"><p><strong>Usuario: </strong> <span class="mayuscula" id="menuNombreUsuario"><?php echo $_SESSION["Atiende"]; ?></span></p><small class="text-muted text-center" id="menuFecha"><span id="fechaServer"></span> <span id="horaServer"> <?php require('php/gethora.php') ?></span> </small></a></li>
									
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
			<div class="row ">
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <h2 class="purple-text text-lighten-1 hidden-print"><i class="icofont icofont-shopping-cart"></i> Ventas - Cuadre de caja</h2>

					<ul class="nav nav-tabs hidden-print">
					<li class="active"><a href="#tabListaPreciosActual" data-toggle="tab">Lista de precios de productos</a></li>
					<li><a href="#tabCuadrarCajaEmpleado" data-toggle="tab">Cuadrar caja ventas</a></li>
					<li><a href="#tabCuadrarCajaEgreso" data-toggle="tab">Cuadrar Ingresos y Egresos</a></li>
					<li><a href="#tabExtra" data-toggle="tab">Pestaña extra</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabListaPreciosActual">
						<!--Inicio de pestaña 01-->
							<h3>Listado de precios de los productos para hoy</h3>
							<div class="panel panel-verde " id="pnlTablaModificacionPrecio">
							<div class="panel-heading">
								<h3 class="panel-title">Precios programados para: <strong><?php require('php/getFecha.php'); ?>, <?php require('php/gethora.php') ?></strong></h3>
							</div>
							<div class="container-fluid">
							<table class="table table-hover">
							<thead>
								<tr >
									<!-- <th>Grupo</th>
									<th>Lado</th> -->
									<th>Producto</th>
									<th>Precio S/.</th>
									<th>Stock gls.</th>
									<th>Última actualización</th>
								</tr>
							</thead>
							<tbody  id="tbodyProductosListado">
								<!-- <tr>
									<td>Gasolina 84</td>
									<td>11.70</td>
									<td>Lunes, 11 Mayo 2017</td>
								</tr> -->
								<?php require 'php/listarProductosContenedorTR.php'; ?>
							</tbody>
							</table>
							</div>
							</div>

						<!--Fin de pestaña 01-->
						</div>

						<!--Panel para cuadrar caja-->
						<div class="tab-pane fade container-fluid" id="tabCuadrarCajaEmpleado">
						<!--Inicio de pestaña 02-->
						<h3>Cuadre de caja del usuario: <small><?php echo $_SESSION['Atiende']; ?></small></h3>
						<p class="visible-print"><?php require 'php/getFecha.php'; ?> <?php require 'php/getHora.php'; ?></p>
						<div class="hidden">
							
						<span class="pull-left">Seleccione los filtros del producto:</span>
							<div class="col-sm-2">
							<div  id="divSelectGrupoListado">
								<select class="selectpicker mayuscula" title="Grupo..."  data-width="100%" data-live-search="true">
									<?php require 'php/listarGruposOption.php' ?>
								</select>
							</div>
							</div>
							<div class="col-sm-2">
							<div  id="divSelectLadoListado">
								<select class="selectpicker mayuscula" title="Lado..."  data-width="100%" data-live-search="true">
									<?php require 'php/listarLadosOption.php' ?>
								</select>
							</div>
							</div>
							<div class="col-sm-3">
							<div  id="divSelectProductoListado">
								<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true">
								</select>
							</div>
							</div>
						<button class="btn btn-rosaKit btn-outline" id="btnAgregarProductoCuadrar"><i class="icofont icofont-cube"></i> Agregar producto</button>
						</div>
						
						<div class="col-xs-12 container">
							<!-- <div class="row">
								<strong>
									<div class="col-xs-5 col-sm-3">Producto</div>
									<div class="col-xs-2 col-sm-1">Precio</div>
									<div class="col-xs-1 col-sm-2"><span class="hidden-print">Cuenta anterior</span> <span class="visible-print">Cta. Ant.</span> </div>
									<div class="col-xs-2 col-sm-2 hidden-print">Cuenta actual</div>
									<div class="col-xs-1 col-sm-1">Consumo</div>
									<div class="col-xs-2 col-sm-2">Venta</div>
								</strong>
							</div> -->
						<div class="panel panel-morado">
							<div class="panel-heading">
								<h3 class="panel-title"> <i class="icofont icofont-stock-mobile"></i><strong>Premier B</strong></h3>
							</div>
							<div class="container" style="padding-bottom: 10px;">
								<div class="row" style="padding-top: 5px;">
								<strong>
									<div class="col-xs-3 col-sm-2">Producto</div>
									<div class="col-xs-1 col-sm-1">Precio</div>
									<div class="col-xs-2 col-sm-2"><span class="hidden-print">Cuenta anterior</span> <span class="visible-print">Cta. Ant.</span> </div>
									<div class="col-xs-2 col-sm-2 hidden-print">Cuenta actual</div>
									<div class="col-xs-1 col-sm-1">Consumo</div>
									<div class="col-xs-2 col-sm-2">Venta</div>
								</strong>
								</div>
							<span class="spanSurtidores" id="spanPremierB" style="font-size: 15px;">
								
							</span>
							</div>

						</div>
						<div class="panel panel-morado">
							<div class="panel-heading">
								<h3 class="panel-title"> <i class="icofont icofont-stock-mobile"></i><strong>Premier C</strong></h3>
							</div>
							<div class="container" style="padding-bottom: 10px;">
							<div class="row" style="padding-top: 5px;">
								<strong>
									<div class="col-xs-3 col-sm-2">Producto</div>
									<div class="col-xs-1 col-sm-1">Precio</div>
									<div class="col-xs-2 col-sm-2"><span class="hidden-print">Cuenta anterior</span> <span class="visible-print">Cta. Ant.</span> </div>
									<div class="col-xs-2 col-sm-2 hidden-print">Cuenta actual</div>
									<div class="col-xs-1 col-sm-1">Consumo</div>
									<div class="col-xs-2 col-sm-2">Venta</div>
								</strong>
							</div>
							<span class="spanSurtidores" id="spanPremierC" style="font-size: 15px;">
								
							</span>
							</div>
						</div>
						<div class="panel panel-morado">
							<div class="panel-heading">
								<h3 class="panel-title"> <i class="icofont icofont-stock-mobile"></i><strong>Surtidor de Gas</strong></h3>
							</div>
							<div class="container" style="padding-bottom: 10px;">
								<div class="row" style="padding-top: 5px;">
								<strong>
									<div class="col-xs-3 col-sm-2">Producto</div>
									<div class="col-xs-1 col-sm-1">Precio</div>
									<div class="col-xs-2 col-sm-2"><span class="hidden-print">Cuenta anterior</span> <span class="visible-print">Cta. Ant.</span> </div>
									<div class="col-xs-2 col-sm-2 hidden-print">Cuenta actual</div>
									<div class="col-xs-1 col-sm-1">Consumo</div>
									<div class="col-xs-2 col-sm-2">Venta</div>
								</strong>
								</div>
							<span class="spanSurtidores" id="spanSurtidorGas" style="font-size: 15px;">
								
							</span>
							</div>

						</div>
						<span id="spanListadoNuevosCuadres" style="font-size: 15px;">
							<!-- <div class="row">
								<div class="col-sm-2"><strong>1.</strong> Grupo 1</div>
								<div class="col-sm-3 mayuscula">Producto</div>
								<div class="col-sm-2 mayuscula">S/. 14.50</div>
								<div class="col-sm-2">1456930</div>
								<div class="col-sm-3"><input type="numeric" class="form-control"></div>
							</div> -->
						</span>
						
						<div class="panel panel-morado">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="icofont icofont-growth"></i> <strong>Ingresos vs Egresos</strong> <button class="btn btn-default btn-outline hidden-print pull-right" id="btnRefreshIngVsEgr" style="margin-top: -7px;"><i class="icofont icofont-refresh"></i> Generar resumen</button></h3> 
							</div>
							<div class="container"  style="padding-bottom: 10px;">
								<div style="padding-top: 5px; padding-left: 5px">
									<div class="row">
										<strong>
										<div class="col-xs-1">N° Tipo</div>
										<div class="col-xs-6">Descripción</div>
										<div class="col-xs-1"><span class="hidden-print">Monto</span> S/.</div>
										<div class="col-xs-3">Dia Hora</div>
									</strong>
									</div>
									<span id="contenidoACuadrarIngresVsEgres" >
										<div class="">
											<div class="col-xs-12"><p class="text-muted">Aún no hay datos, pulse el boton de actualizar</p></div>
										</div>
										<!-- <div class="row">
											<div class="col-xs-2">1. Crédito</div>
											<div class="col-xs-7">Se le dió al cliente Flores Ramos Roxana, 40 galones de gasolina</div>
											<div class="col-xs-1">85.00</div>
											<div class="col-xs-2">8:00 am</div>
										</div>
										<div class="row">
											<div class="col-xs-2">2. Gasto</div>
											<div class="col-xs-7">Se le entergó un adelanto de dinero a Porras Soto Miguel</div>
											<div class="col-xs-1">28.00</div>
											<div class="col-xs-2">6:30 am</div>
										</div> -->
									</span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="panel panel-negro">
									<div class="panel-heading">
										<h3 class="panel-title">Resumen de Caja chica</h3>
									</div>
									<div class="panel-body">
										<div class="col-xs-7">
											<p>Ingresos</p>
											<p>Gastos</p>
											<p>Créditos</p>
											<p><strong>Suma:</strong></p>
										</div>
										<div class="col-xs-5">
											<p>S/. <span id="spanPanelResumenIngresos">0.00</span></p>
											<p>S/. <span id="spanPanelResumenGastos">0.00</span></p>
											<p>S/. <span id="spanPanelResumenCreditos">0.00</span></p>
											<p><strong>S/. <span id="spanPanelSumaTotalChica">0.00</span></strong></p>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="panel panel-negro ">
								<div class="panel-heading">
									<h3 class="panel-title">Resumen de ventas</h3>
								</div>
								<div class="panel-body">
								<div class="row">
									<strong>
										<div class="col-xs-4">Producto</div>
										<div class="col-xs-4">Suma consumo</div>
										<div class="col-xs-4">Suma ventas</div>
									</strong>
								</div>
								<span id="spanListadoResumen">
								<div>
									<?php require 'php/listarProdctosSoloNombresResumen.php' ?>
								</div>
									
								</span>
								<div class="row"><strong>
									<div class="col-xs-4">Sumas</div>
									<div class="col-xs-4"><span id="spanSumaCantidades">0</span> gl.</div>
									<div class="col-xs-4"><span id="spanSumaTotal">0.00</span></div></strong>
									<div class="sr-only"><span id="spanSumaTotasr">0.00</span></div></strong>
								</div>
								</div>
								</div>
								
								
							</div>
							<div class="row text-center">
								<button class="btn btn-morado btn-outline hidden-print" id="btnGuardarReporte"><i class="icofont icofont-print"></i> Guardar e Imprimir reporte</button>
							</div>
						</div>
						
						</div>
						<!--Fin de pestaña 03--></div>

						<div class="tab-pane fade container-fluid" id="tabCuadrarCajaEgreso">
						<!--Inicio de pestaña 04-->
						<h3>Cuadre de Ingresos Vs Egresos </h3>
							<div class="row">
								<div class="col-xs-6">
									<h4>Turno <small><?php echo $_SESSION['Atiende']; ?></small></h4>
									<h4>Fecha <small><?php require 'php/getFecha.php'; ?></small></h4>
								</div>
								<div class="col-xs-6"> <button class="btn btn-morado btn-outline hidden-print" id="btnRefreshIngVsEgr2"><i class="icofont icofont-refresh"></i> Actualizar tabla</button></div>
							</div>
							<div class="row">
								<strong>
								<div class="col-xs-2">N° Tipo</div>
								<div class="col-xs-6">Descripción</div>
								<div class="col-xs-1"><span class="hidden-print">Monto</span> S/.</div>
								<div class="col-xs-3">Dia Hora</div>
							</strong>
							</div>
							<span id="contenidoACuadrarIngresVsEgres2" >
								<div class="row">
									<div class="col-xs-12"><p class="text-muted">Aún no hay datos, pulse el boton de actualizar</p></div>
								</div>
								<!-- <div class="row">
									<div class="col-xs-2">1. Crédito</div>
									<div class="col-xs-7">Se le dió al cliente Flores Ramos Roxana, 40 galones de gasolina</div>
									<div class="col-xs-1">85.00</div>
									<div class="col-xs-2">8:00 am</div>
								</div>
								<div class="row">
									<div class="col-xs-2">2. Gasto</div>
									<div class="col-xs-7">Se le entergó un adelanto de dinero a Porras Soto Miguel</div>
									<div class="col-xs-1">28.00</div>
									<div class="col-xs-2">6:30 am</div>
								</div> -->
							</span>
							<div class="row">
							<br>
								<div class="row text-center">
								<button class="btn btn-morado btn-outline hidden-print sr-only" id="btnGuardarReporteIngresoVsEgreso"><i class="icofont icofont-print"></i> Guardar e Imprimir reporte</button>
							</div>
							</div>
						<!--Fin de pestaña 04-->
						</div>

						<div class="tab-pane fade container-fluid" id="tabExtra">
						<!--Inicio de pestaña 04-->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, quis, facilis beatae recusandae optio molestias ipsam quibusdam aliquid rerum voluptatem incidunt in vero quo illo natus? Asperiores, ipsum placeat dolorum.
						<!--Fin de pestaña 04-->
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
<script src="js/accionesGlobales.js?version=1.0.7"></script>
<script src="js/bootstrap-select.js"></script>
<!-- <script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script> -->

<script>
datosUsuario();
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
	moment.locale('es');
	$.each($('#tbodyProductosListado .fecha'), function (i, dato2) {
		var fechaNue=moment($(dato2).text());
		$(this).text( fechaNue.format('LLLL'));
		});
/*	$('#tbodyProductosListado').children().remove();
	$.get({url:'php/listarTodosProductosContenedor.php', type: 'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato2) { console.log(dato2)
			$('#tbodyProductosListado').append(`<tr  class='${dato2.contColorMaterialize}'>
				<!--<td>${dato2.grupoDescripcion}</td>
				<td>${dato2.ladoDescripcion}</td>-->
				<td><strong>${dato2.contDescripcion}</strong></td>
				<td>${parseFloat(dato2.contPrecio).toFixed(2)}</td>
				<td>${moment(dato2.contUltimaFecha).format('LLLL')}</td>
			</tr>`);//dddd DD, MMMM YYYY hh:mm a
		});
	});*/
	$.get({url: 'php/listarTodosProductos.php', type: 'POST'}).done(function (resp) {
		//console.log(resp)
		
		$.JsonProductosCliente=JSON.parse(resp);
		$('#spanPremierB').children().remove();$('#spanPremierC').children().remove();$('#spanSurtidorGas').children().remove();
		var considerar='';
		$.each(JSON.parse(resp), function (i, dato) { // console.log(dato)
				/*<div class="col-xs-5 col-sm-3">Producto</div>
					<div class="col-xs-2 col-sm-1">Precio</div>
					<div class="col-xs-1 col-sm-1">Cuenta anterior</div>
					<div class="col-xs-1 col-sm-1">Consumo</div>
					<div class="col-xs-2 col-sm-2">Venta</div>
					Math.round(Math.random() * (900000 - 100000) + 100000) || dato.prodUltimoContador ------------ */
			/*$('#spanListadoNuevosCuadres').append(`<div class="row ${dato.prodColorMaterialize}">
				<div class="idProdConsumo hidden">${dato.idproductos}</div>
				<div class="col-xs-5 col-sm-3 mayuscula"><strong>${i+1}. <span class="spanGrupo">${dato.grupoDescripcion}</span>, <span class="spanProducto">${dato.prodNombre}</span>, <span class="spanLado">${dato.ladoCorto}</span></strong></div>
				<div class="col-xs-2 col-sm-1 mayuscula">S/. <span class="divPrecioFijo">${parseFloat(dato.prodPrecioActual).toFixed(2)}</span></div>
				<div class="col-xs-1 col-sm-2 divContadorPrevio">${Math.round(Math.random() * (900000 - 100000) + 100000)}</div>
				<div class="col-xs-2 col-sm-2 hidden-print"><input type="numeric" class="form-control txtValorNumericoConsumo text-center" id="${i}" ></div>
				<div class="col-xs-1 col-sm-1 divConsumoProd">-</div>
				<div class="col-xs-2 col-sm-2 divVentaConsumo">S/. -</div>
			</div>`);*/
			if( parseInt($('#tbodyProductosListado #'+dato.idContenedor).find('.tdStock').text())>0 ){considerar='';}else{considerar='disabled';}
			switch(dato.grupoDescripcion){ /*${Math.round(Math.random() * (900000 - 100000) + 100000)}*/
				case 'Premier B': 
					$('#spanPremierB').append(`<div class="row ${dato.prodColorMaterialize} rowProductosMalla">
						<div class="idProdConsumo hidden">${dato.idproductos}</div>
						<div class="idContenedorCons hidden">${dato.idContenedor}</div>
						<div class="col-xs-3 col-sm-2 mayuscula"><strong>${$('#spanPremierB .row').length+1}. <span class="spanGrupo"><span class="spanProducto">${dato.prodNombre}</span>, <span class="spanLado">${dato.ladoCorto}</span></strong></div>
						<div class="col-xs-1 col-sm-1 mayuscula">S/. <span class="divPrecioFijo">${parseFloat(dato.prodPrecioActual).toFixed(2)}</span></div>
						<div class="col-xs-2 col-sm-2 divContadorPrevio text-center">${dato.prodCtaAnterior}</div>
						<div class="col-xs-2 col-sm-2 hidden-print"><input type="numeric" class="form-control txtValorNumericoConsumo text-center" id="${i}" ${considerar}></div>
						<div class="col-xs-2 col-sm-2 visible-print divCuentaNueva">S/. -</div>
						<div class="col-xs-1 col-sm-1 divConsumoProd">-</div>
						<div class="col-xs-2 col-sm-2 divVentaConsumo">S/. -</div>
					</div>`); break;
				case 'Premier C': 
					$('#spanPremierC').append(`<div class="row ${dato.prodColorMaterialize} rowProductosMalla">
						<div class="idProdConsumo hidden">${dato.idproductos}</div>
						<div class="idContenedorCons hidden">${dato.idContenedor}</div>
						<div class="col-xs-3 col-sm-2 mayuscula"><strong>${$('#spanPremierC .row').length+1}. <span class="spanGrupo"><span class="spanProducto">${dato.prodNombre}</span>, <span class="spanLado">${dato.ladoCorto}</span></strong></div>
						<div class="col-xs-1 col-sm-1 mayuscula">S/. <span class="divPrecioFijo">${parseFloat(dato.prodPrecioActual).toFixed(2)}</span></div>
						<div class="col-xs-2 col-sm-2 divContadorPrevio text-center">${dato.prodCtaAnterior}</div>
						<div class="col-xs-2 col-sm-2 hidden-print"><input type="numeric" class="form-control txtValorNumericoConsumo text-center" id="${i}" ${considerar}></div>
						<div class="col-xs-2 col-sm-2 visible-print divCuentaNueva">S/. -</div>
						<div class="col-xs-1 col-sm-1 divConsumoProd">-</div>
						<div class="col-xs-2 col-sm-2 divVentaConsumo">S/. -</div>
					</div>`); break;
				case 'Surtidor de Gas':
					$('#spanSurtidorGas').append(`<div class="row ${dato.prodColorMaterialize} rowProductosMalla">
						<div class="idProdConsumo hidden">${dato.idproductos}</div>
						<div class="idContenedorCons hidden">${dato.idContenedor}</div>
						<div class="col-md-2 col-xs-3 mayuscula"><strong>${$('#spanSurtidorGas .row').length+1}. <span class="spanGrupo"><span class="spanProducto">${dato.prodNombre}</span>, <span class="spanLado">${dato.ladoCorto}</span></strong></div>
						<div class="col-md-1 col-xs-1 mayuscula">S/. <span class="divPrecioFijo">${parseFloat(dato.prodPrecioActual).toFixed(2)}</span></div>
						<div class="col-md-2 col-xs-2 divContadorPrevio text-center">${dato.prodCtaAnterior}</div>
						<div class="col-md-2 col-xs-2 hidden-print"><input type="numeric" class="form-control txtValorNumericoConsumo text-center" id="${i}" ${considerar}></div>
						<div class="col-md-2 col-xs-2 visible-print divCuentaNueva">S/. -</div>
						<div class="col-md-1 col-xs-1 divConsumoProd">-</div>
						<div class="col-md-2 col-xs-2 divVentaConsumo">S/. -</div>
					</div>`); break;
			}

		});
		$('.mitooltip').tooltip();
	});
});

/*$('#btnAgregarProductoCuadrar').click(function () {
	var index=$('#spanListadoNuevosCuadres .row').length+1;
	var grupo= $('#divSelectGrupoListado').find('li.selected a').text();
	var producto= $('#divSelectProductoListado').find('li.selected a').text();
	var precio=parseFloat(Math.random() * (21 - 8) + 8).toFixed(2);
	var contAnterior=Math.round(Math.random() * (900000 - 100000) + 100000);

	if(grupo!='' && producto !=''){
	$('#spanListadoNuevosCuadres').append(`
		<div class="row">
			<div class="idProdConsumo hidden">${index}</div>
			<div class="col-sm-2 mayuscula"><button class=" btn btn-xs btn-default btn-outline red-text text-darken-2"><i class="icofont icofont-close"></i></span></button> ${index}. <span class="spanGrupo">${grupo}</span> - <span class="spanProducto">${producto}</span></strong></div>
			<div class="col-sm-2 mayuscula">S/. <span class="divPrecioFijo">${precio}</span></div>
			<div class="col-sm-2 divContadorPrevio">${contAnterior}</div>
			<div class="col-sm-2"><input type="numeric" class="form-control txtValorNumericoConsumo" ></div>
			<div class="col-sm-2 divConsumoProd">-</div>
			<div class="col-sm-2 divVentaConsumo">S/. -</div>
		</div>`);
	$('.selectpicker').selectpicker('val', ''); //Borra todas las selecciones de todos los select
	
	if($(`#spanListadoResumen .divProducResumen:contains("${producto}")`).length==0 ){
		
		$('#spanListadoResumen').append(`
			<div class="row">
				<div class="col-sm-3 divProducResumen mayuscula">${producto}</div>
				<div class="col-sm-3"><span id="spanSumaFinalConsumo">0</span></div>
				<div class="col-sm-3">S/. <span id="spanSumaFinalMontos">0.00</span></div>
			</div>`);
	}
	}
	
});*/
$('body').on('change', '.txtValorNumericoConsumo', function () {// console.log('cambio')
	var idCambiante=$(this).attr('id');
	//console.log(idCambiante)
	var contenedorRow=$(this).parent().parent();//.find('.idProdConsumo').text();
	var nuevoValor= parseFloat($(this).val());
	var precioFijo=$.JsonProductosCliente[idCambiante].prodPrecioActual;//parseFloat(contenedorRow.find('.divPrecioFijo').text());
	var contadorPrevio=parseFloat(contenedorRow.find('.divContadorPrevio').text()); //$.JsonProductosCliente[idCambiante].prodUltimoContador;
	var stockFict=contenedorRow.find('.idContenedorCons').text();
	console.log($('#tbodyProductosListado #'+stockFict).find('.tdStock').text())
	//var productoRow=contenedorRow.find('.spanProducto').text();

	var consumoRealHoy=(nuevoValor-contadorPrevio);
	//console.log(precioFijo)
	if(consumoRealHoy<=0){
		contenedorRow.find('.txtValorNumericoConsumo').val(0);
		contenedorRow.find('.divConsumoProd').text('Inválido!').removeClass('text-success').addClass('text-danger');
		contenedorRow.find('.divVentaConsumo').text('Inválido!').removeClass('text-success').addClass('text-danger');
	}else{
		var precFinventa=parseFloat(consumoRealHoy*precioFijo/100).toFixed(2);
		contenedorRow.find('.divConsumoProd').text(consumoRealHoy).removeClass('text-danger').addClass('text-success');
		contenedorRow.find('.divVentaConsumo').text(precFinventa).removeClass('text-danger').addClass('text-success');
	}

	sumarTotales();
	contenedorRow.next().find('input').focus();

});
function sumarTotales(){
	var sumaTotales=0, sumaConsumo=0;
	var cuantoConsumo=0, cuantoVendo=0;
	$('#spanListadoResumen .row').each( function (i, elem) { 
		var produdctoABuscar=$(elem).find('.divProducResumen').text();

		var sumaParcialConsumo=0, sumaParcialVenta=0;
		$(`.spanSurtidores .spanProducto:contains("${produdctoABuscar}")`).parent().parent().parent().parent().each(function (i, arg) {
			cuantoConsumo=parseFloat($(arg).find('.divConsumoProd').text());
			cuantoVendo=parseFloat( $(arg).find('.divVentaConsumo').text());

			if( ! isNaN(cuantoConsumo)){ sumaParcialConsumo+=cuantoConsumo; sumaConsumo+=sumaParcialConsumo }else{cuantoConsumo=0;}
			if( ! isNaN(cuantoVendo)){ sumaParcialVenta+=cuantoVendo; }else{cuantoConsumo=0;}
			
			
		});
		//console.log( produdctoABuscar+' = ' + parseFloat(sumaParcialVenta).toFixed(2) )
		sumaTotales+=sumaParcialVenta;
		$(elem).find('#spanSumaFinalConsumo').text(sumaParcialConsumo);
		$(elem).find('#spanSumaFinalMontos').text(parseFloat(sumaParcialVenta).toFixed(2));
	});
	$('#spanSumaTotal').text(parseFloat(sumaTotales).toFixed(2));
	$('#spanSumaTotasr').text(parseFloat(sumaTotales).toFixed(2));

	$('#spanSumaCantidades').text(parseFloat(sumaConsumo).toFixed(2));

}

$('#divSelectGrupoListado').on('click','.optProducto',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	cmbProductoListadoLlenar();
});
$('#divSelectLadoListado').on('click','.optProducto',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	cmbProductoListadoLlenar();
});
function cmbProductoListadoLlenar(){
	$('#divSelectProductoListado option').remove();
	$('#divSelectProductoListado selectpicker').selectpicker('destroy');
	var grupo=$('#divSelectGrupoListado').find('li.selected a').attr('data-tokens');
	var lado=$('#divSelectLadoListado').find('li.selected a').attr('data-tokens');
	if(grupo==null || lado==null ){//cuando no hay nada seleccionado en el comboBox
		//console.log('no ver ni buscar nada');
		
	}else{//Cuando los 3 cmbBox estan llenos
		//console.log('algo pa ver o buscar');
		$.ajax({url:'php/listarNombresProductos.php', type: 'POST', data: {dgrupo:grupo, dlado:lado}}).done(function (resp) {
			$.each(JSON.parse(resp), function (i, dato) {
				$('#divSelectProductoListado .selectpicker').append(`<option class="optProducto mayuscula" data-tokens="${dato.idproductos}">${dato.prodNombre}</option>`);
				$('#divSelectProductoListado .selectpicker').selectpicker('refresh');
			});
		});
	}
}
$('#btnGuardarReporte').click(function () {
	var idsCaja=''; contadorRow=0;
	//$('#btnRefreshIngVsEgr').click();
	totalRowsCaja=$('#contenidoACuadrarIngresVsEgres .row').length;

	console.log(totalRowsCaja);
	if(!$('#btnGuardarReporte').hasClass('disabled')){
		$('#btnGuardarReporte').addClass('disabled');
		$.each($('.rowProductosMalla'), function (i, rowD) { console.log(rowD)
			if($(rowD).find('.txtValorNumericoConsumo').val()==''){
				$(rowD).addClass('hidden-print');
			}
		});

		$.ajax({url:'php/insertarCuadreCajaCabeceras.php', type: 'POST', data: { sumTotal: $('#spanSumaTotasr').text(), obs:'', idUser: $.JsonUsuario.idUsuario }}).done(function (resp) {
			if(resp!=0){
				var idVenta=resp;
				$.each($('.rowProductosMalla'), function (i, dato) {
					if($(dato).find('.txtValorNumericoConsumo').val()!=0 && $(dato).find('.txtValorNumericoConsumo').val()!='' ){
						//console.log($(dato).find('.idProdConsumo').text());
						var idProd=$(dato).find('.idProdConsumo').text();
						var consum=$(dato).find('.divConsumoProd').text();
						var idConten=$(dato).find('.idContenedorCons').text();
						var contadorTotal=$(dato).find('.txtValorNumericoConsumo').val();
						$.ajax({url: 'php/insertarCuadreCajaDetalle.php', type: 'POST', data: {idVent: idVenta, idPro: idProd, cant:consum, idCont: idConten, contador:contadorTotal }}).done(function (respu) {
							console.log(respu)
						});
					}
				});
			}

			if(totalRowsCaja>0){
				$.each( $('#contenidoACuadrarIngresVsEgres .row'), function (i, caja) {
					contadorRow++;
					idsCaja+=','+$(caja).find('.idCaja').text();
					//console.log(contadorRow);
					if(contadorRow==totalRowsCaja){
						idsCaja=idsCaja.substring(1,idsCaja.length);
						 $.ajax({url:'php/actualizarCajaImpresion.php', type: 'POST', data: {Losids:idsCaja }}).done(function (resp) {
						 });
					}
				});
			}
		});

		}
		window.print();
});
$('#btnGuardarReporteIngresoVsEgreso').click(function () {
	var ids=''; cadena='';
	$.each( $('#contenidoACuadrarIngresVsEgres .idCaja'), function (i, elem) {
		
		ids  = ids+ $(elem).text() +',';
	});
	cadena=ids.substring(0, ids.length-1);
	console.log(cadena);
	$.ajax({url: 'php/actualizarCajaImpresion.php', type: 'POST', data: {Losids: cadena }}).done(function (resp) {
		console.log(resp)
		if(resp=='1'){window.print();}
		else{$('.modal-GuardadoError').modal('show');}
	});
});
$('#btnRefreshIngVsEgr').click(function () {
	$('#contenidoACuadrarIngresVsEgres').children().remove();

	var sumaIngreso=0, sumaEgreso=0, sumaCredito=0;
	$.ajax({url: 'php/listarCajaPorUsuario.php', type: 'POST', data:{ idUser: $.JsonUsuario.idUsuario}}).done(function (resp) {
		elemento=JSON.parse(resp); //console.log(elemento);
		$.each(elemento, function (i, dato) {

			switch(dato.idTipoProceso){
				case "3": sumaCredito+=parseFloat(dato.cajaMonto) ;break; //es credito
				case "5": sumaEgreso+=parseFloat(dato.cajaMonto) ;break; //es gasto
				case "6": sumaIngreso+=parseFloat(dato.cajaMonto) ;break; //es gasto
			}
			$('#contenidoACuadrarIngresVsEgres').append(`<div class="row">
					<div class="idCaja sr-only">${dato.idcaja}</div>
					<div class="col-xs-1">${i+1}. ${dato.tipoDescripcion}</div>
					<div class="col-xs-6 mayuscula">${dato.cajaDescripcion}</div>
					<div class="col-xs-1">${parseFloat(dato.cajaMonto).toFixed(2)}</div>
					<div class="col-xs-3">${moment(dato.cajaFecha).format('dddd h:mm a')}</div>`);
		});
		$('#spanPanelResumenIngresos').text(parseFloat(sumaIngreso).toFixed(2));
		$('#spanPanelResumenGastos').text(parseFloat(sumaEgreso).toFixed(2));
		$('#spanPanelResumenCreditos').text(parseFloat(sumaCredito).toFixed(2));
		$('#spanPanelSumaTotalChica').text(parseFloat(sumaIngreso-sumaEgreso+sumaCredito).toFixed(2));
	/*	$('#contenidoACuadrarIngresVsEgres').append(`
			<div class="col-xs-4"><strong>Ingresos S/. ${parseFloat(sumaIngreso).toFixed(2)}</strong></div>
			<div class="col-xs-4"><strong>Gastos S/. ${parseFloat(sumaEgreso).toFixed(2)}</strong></div>
			<div class="col-xs-4"><strong>Créditos S/. ${parseFloat(sumaCredito).toFixed(2)}</strong></div>`);
		$('#btnGuardarReporteIngresoVsEgreso').removeClass('sr-only');*/
	});
});
</script>

</body>
</html>