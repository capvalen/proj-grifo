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

		<title>Reportes: Infocat-Grifo</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.1" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.2" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.4">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://eonasdan.github.io/bootstrap-datetimepicker/	-->

</head>

<body>
<style>
#divResVentaMes .row, #divResultadoDetalleCreditos>.row, #divResVentaDiaria .row, #divResCajaDiaria .row, #divResultadoDetallTanqueoFin .row, #divResultadoGastosMes .row, #divResultadoIngresosMes .row{padding-top: 10px; padding-bottom: 10px; border-bottom: solid 1px #e2e2e2;  }
#divResVentaMes .row:hover, #divResultadoDetalleCreditos>.row:hover,#divResVentaDiaria .row:hover, #divResCajaDiaria .row:hover, #divResultadoDetallTanqueoFin .row:hover, #divResultadoGastosMes .row:hover, #divResultadoIngresosMes .row:hover{background-color: #eee;}
hr{    margin-top: 10px;
	margin-bottom: 10px;}
</style>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png" alt="">
				</div>
				<li>
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
			<li class="active">
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
					<li ><a href="#tabCreditosFinalizados" data-toggle="tab">Créditos finalizados</a></li>
					<li><a href="#tabResumenVentas" data-toggle="tab">Ventas resumen</a></li>
					<li><a href="#tabHistorialTanqueo" data-toggle="tab">Historial tanqueo</a></li>
					<li><a href="#tabHistorialGastos" data-toggle="tab">Historial Gastos</a></li>
					<li><a href="#tabHistorialIngresos" data-toggle="tab">Historial Ingresos</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabCreditosPendientes">
						<!--Inicio de pestaña 01-->
							<p>Tiene Ud. <strong><?php require 'php/returnCreditosCount.php' ?></strong> créditos pendientes por cobrar: </p>
							<p>Fechas con <strong>Créditos pendientes</strong>: <span id="idFechasCreditos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosNumFecha.php' ?>
								</select>
							</span>
							</p>
							<p>Clientes con <strong>Créditos pendientes</strong>: <span id="idClientesCreditos"><select class="selectpicker mayuscula" title="Clientes..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosFaltaACliente.php' ?>
								</select></span></p>
							<p><button class="btn btn-success btn-lg btn-outline" id="btnExportarExcel01"><i class="icofont icofont-file-excel"></i> Exportar</button></p>
							<div class="container-fluid">
								 <!-- <div class="row"><strong>
								 									<div class="col-xs-4">Detalle</div>
								 									<div class="col-xs-2"># Comprobante</div>
								 									<div class="col-xs-2">Fecha</div>
								 									<div class="col-xs-2">Monto</div>
								 									<div class="col-xs-2">Estado</div>
								 </strong>
								 </div>
								 <div id="divResultadoDetalleCreditos">
								 									<p>Aún no se solicitó ninguna fecha</p>
								 </div> -->
								 <table class="table table-hover" id="tableResultadoDetalleCreditos">
									<thead>
										<tr>
											<th>Detalle</th>
											<th># Comprobante</th>
											<th>Fecha</th>
											<th>Monto</th>
											<th>Estado</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
								
							</div>

						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para nueva compra-->
						<div class="tab-pane fade container-fluid" id="tabCreditosFinalizados">
						<!--Inicio de pestaña 02-->
							<p>Fechas con <strong>Créditos finalizados</strong>: <span id="idFechasCreditosFin">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosFinNumFecha.php' ?>
								</select>
							</span>
							</p>
							<p>Clientes con <strong>Créditos finalizados</strong>: <span id="idClientesCreditosFin"><select class="selectpicker mayuscula" title="Clientes..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosNoFaltaACliente.php' ?>
								</select></span></p>
							<div class="container">
								 <div class="row"><strong>
									<div class="col-xs-4">Detalle</div>
									<div class="col-xs-2"># Comprobante</div>
									<div class="col-xs-2">Fecha</div>
									<div class="col-xs-2">Monto</div>
									<div class="col-xs-2">Estado</div>
								 </strong>
								 </div>
								 <div id="divResultadoDetallCreditosFin">
									<p>Aún no se solicitó ninguna fecha</p>
								 </div>
							</div>
						<!--Fin de pestaña 02-->
						</div>

						<div class="tab-pane fade container-fluid" id="tabResumenVentas">
						<!--Inicio de pestaña 03-->
						<p>Seleccione una fecha para ver reporte de ventas: <span id="">
							<div class="form-group col-xs-4">
							<div class='input-group date' id='dtpFechaVentas'>
								<input type='text' class="form-control text-center" id="txtFechaVentas">
								<span class="input-group-addon">
									<i class="icofont icofont-calendar"></i>
								</span>
							</div>
							</div>
						</span>
						</p>

						<ul class="nav nav-tabs" id="ulResumen">
							<li class="hidden"><a href="#tabVentaMes" data-toggle="tab">Mensual</a></li>
							<li><a href="#tabVentaDiariaGlobal" data-toggle="tab">Diaria</a></li>
							<li class="hidden"><a href="#tabVentaDiariaDetalla" data-toggle="tab">Diaria detallado</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade container-fluid" id="tabVentaMes">
							<div class="row"><strong>
								<div class="col-xs-4">N° Fecha</div>
								<div class="col-xs-4">Monto S/.</div>
								<div class="col-xs-4">Usuario</div></strong>
							</div>
							<div id="divResVentaMes">
							</div>
							<div class="row divTotalMes"> <label for="">Total:</label> S/. <span id="divVMTotalSuma"></span></div>
						</div>
						<div class="tab-pane fade  container-fluid" id="tabVentaDiariaGlobal">
							<div class="row"><strong>
								<div class="col-xs-3">Producto / Lado / Responsable</div>
								<div class="col-xs-2">Fecha / Hora</div>
								<div class="col-xs-2">Cont. Inicial - Salida</div>
								<div class="col-xs-1">Consumo</div>
								<div class="col-xs-1">Precio</div>
								<div class="col-xs-2">Total</div>
							</strong>
							</div>
							<div id="divResVentaDiaria"></div><br><br>
							<div class="row"><strong>
								<div class="col-xs-1">N° Tipo</div>
								<div class="col-xs-6">Descripción</div>
								<div class="col-xs-1"><span class="hidden-print">Monto</span> S/.</div>
								<div class="col-xs-3">Dia y Hora</div>
							</strong>
							</div>
							<div id="divResCajaDiaria">
								<div class="col-xs-12"><p class="text-muted">No hay datos en ésta fecha.</p></div>
							</div>
							
						</div>
						<div class="tab-pane fade container-fluid" id="tabVentaDiaraiaDetalla">
							
						</div>
						</div>
						
						<!--Fin de pestaña 03-->
						</div>
						<div class="tab-pane fade container-fluid" id="tabHistorialTanqueo">
							<p>Fechas con <strong>Tanqueos</strong>: <span id="idFechasTanqueo">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarTanqueoFechas.php' ?>
								</select>
							</span>
							</p>
							<div class="container">
								 <div class="row"><strong>
									<div class="col-xs-4">Detalle</div>
									<div class="col-xs-4">Fecha</div>
									<div class="col-xs-4">Usuario</div>
								 </strong>
								 </div>
								 <div id="divResultadoDetallTanqueoFin">
									<p>Aún no se solicitó ninguna fecha</p>
								 </div>
							</div>
						</div>
						<div class="tab-pane fade container-fluid" id="tabHistorialGastos">
							<p>Fechas con <strong>Gastos</strong>: <span id="idFechasGastos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarGastosFechas.php' ?>
								</select>
							</span>
							</p>
							<div class="container">
								 <div class="row"><strong>
									<div class="col-xs-4">Detalle</div>
									<div class="col-xs-4">Fecha</div>
									<div class="col-xs-4">Usuario</div>
								 </strong>
								 </div>
								 <div id="divResultadoGastosMes">
									<p>Aún no se solicitó ninguna fecha</p>
								 </div>
							</div>
						</div>
						<div class="tab-pane fade container-fluid" id="tabHistorialIngresos">
							<p>Fechas con <strong>Ingresos</strong>: <span id="idFechasIngresos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarIngresosFechas.php' ?>
								</select>
							</span>
							</p>
							<div class="container">
								 <div class="row"><strong>
									<div class="col-xs-4">Detalle</div>
									<div class="col-xs-4">Fecha</div>
									<div class="col-xs-4">Usuario</div>
								 </strong>
								 </div>
								 <div id="divResultadoIngresosMes">
									<p>Aún no se solicitó ninguna fecha</p>
								 </div>
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

<!-- Modal para Detallar credito  -->
<div class="modal fade modal-detallarCredito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Detalle de crédito</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid"><span class="hidden" id="spIdCred"></span>
			<div class="row"> <label for="">Razón social:</label> <span class="mayuscula" id="detCreRazon"></span></div>
			<div class="row"> <label for="">RUC/DNI:</label> <span class="mayuscula" id="detCreDni"></span></div>
			<div class="row"> <label for="">Dirección:</label> <span class="mayuscula" id="detCreDirec"></span></div>
			<div class="row"> <label for="">Teléfono:</label> <span class="mayuscula" id="detCreTlf"></span></div>
			<hr>
			<div class="row"> <label for="">Registro:</label> <span class="mayuscula" id="detCreFecha"></span></div>
			<div class="row"> <label for="">Comprobante:</label> <span class="mayuscula" id="detCreComprob"></span></div>
			<div class="row"> <label for="">Producto:</label> <span class="mayuscula" id="detCreProd"></span></div>
			<div class="row"> <label for="">Cantidad:</label> <span class="mayuscula" id="detCreQuant"></span></div>
			<div class="row"> <label for="">Total de crédito:</label> <span class="mayuscula" id="detCreTotalCosto"></span></div>
			<div class="row"> <label for="">Responsable:</label> <span class="mayuscula" id="detCreRespons"></span></div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-warning btn-outline" id="btnFinCreditoDeuda"><i class="icofont icofont-social-meetme"></i> Finalizar crédito</button></div>
	</div>
	</div>
</div>
<!-- Modal para cambiar fecha de tanqueo  -->
<div class="modal fade modal-cambioTanqueFecha" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Cambio de fecha de tanqueo</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid"><span class="hidden" id="spIdTanq"></span>
			<p>Estás intentando editar el registro de «<span id="spanTanqueInfo"></span>» eleccione una nueva fecha. <span class="hidden" id="spanHoraInfo"></span></p>
			<input class="form-control" id="txtFechaTanqueUpd" type="date" name="">
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-warning btn-outline" id="btnChangeFechaTanque"><i class="icofont icofont-social-meetme"></i> Cambiar fecha</button></div>
	</div>
	</div>
</div>
<!-- Modal para Editar credito  -->
<div class="modal fade modal-editarCreditoPers" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Editar crédito</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid"><span class="hidden" id="spIdCreditoHid"></span>
				<label for="">R.U.C o D.N.I:</label>
				<input type="number" class="form-control" id="modEditRuc" disabled="">
				<label for="">Razón social:</label>
				<div id="selectClientesEditar">
					<select class="selectpicker slpClientes " title="Clientes..."  data-width="100%" data-live-search="true">
					<?php require 'php/listarTodosClientes.php' ?>
					</select>
				</div>
				<label for="">Fecha de registro:</label>
				<input type="date" class="form-control" id="modEditFecha">
				<label for="">Comprobante:</label>
				<input type="text" class="form-control mayuscula" id="modEditComprobante">
				<label for="">Producto:</label>
				<div id="selectProductosEditar">
					<select class="selectpicker slpProductos " title="Usuarios..."  data-width="100%" data-live-search="true">
					<?php require 'php/listarProductosContenedorOPT.php' ?>
					</select>
				</div>
				<label for="">Cantidad (gls.):</label>
				<input type="number" class="form-control" id="modEditCantidad">
				<label for="">Monto (S/.):</label>
				<input type="number" class="form-control" id="modEditMonto">
				<label for="">Responsable:</label>
				<div id="selectUsuariosEditar">
					<select class="selectpicker slpUsuarios " title="Usuarios..."  data-width="100%" data-live-search="true">
					<?php require 'php/listarTodosUsuarios.php' ?>
					</select>
				</div>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-success btn-outline" id="btnUpdCaja"><i class="icofont icofont-social-meetme"></i> Cambiar datos</button></div>
	</div>
	</div>
</div>


<?php include 'php/llamandoModals.php'; ?>

<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.0.1"></script>
<script src="js/accionesGlobales.js?version=1.0.10"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/xlsx.core.js"></script>
<script src="js/FileSaver.js"></script>
<script src="js/Blob.js"></script>
<script src="js/tableexport.js?version=5.0.2"></script> <!-- extraido de https://tableexport.v3.travismclarke.com/ -->

<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){
datosUsuario();
	$('.selectpicker').selectpicker('refresh');
	$('.mitooltip').tooltip();
	$('#dtpFechaVentas').datetimepicker({ format: 'DD/MM/YYYY', locale: 'es'});
});


$('#idFechasCreditos').on('click', '.optCreditoFecha', function () {
	var texto= moment($(this).attr('data-tokens'), 'YYYY/M');
	var año= texto.year();
	var mess=texto.month()+1;


	//console.log($(this).attr('data-tokens'));
	//console.log(texto.month()+1)
	
	if( $('#idClientesCreditos .selected a').attr('data-tokens')==null){ 
		$('#tableResultadoDetalleCreditos tbody').children().remove();
		$.ajax({url: 'php/listarCreditoPorFechaMesAno.php', type: 'POST', data: { mes:mess , anio:año }}).done(function (resp) {
			$.jsonAdeuda=JSON.parse(resp);
			$.each(JSON.parse(resp), function (i, jsonResp) {// console.log(jsonResp);
				var adeuda='', obs='';
				if(jsonResp.credObservacion!=''){obs='<strong>Obs.</strong> '+jsonResp.credObservacion;}
				if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
				$('#tableResultadoDetalleCreditos tbody').append(`<tr id="${jsonResp.idcreditos}">
					<td>${$('#tableResultadoDetalleCreditos tbody tr').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} gal. de ${jsonResp.contDescripcion} <span class="mayuscula">${obs}</span></td>
					<td>${jsonResp.credcomprobante}</td>
					<td class="tableexport-string">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</td>
					<td>${parseFloat(jsonResp.credCosto).toFixed(2)}</td>
					<td>${adeuda} <?php if($_SESSION['Power']=='1') echo '<br><button class="btn btn-sm btn-success btn-outline btnEditarCreditoMod" data-id="${jsonResp.idcreditos}"><i class="icofont icofont-ui-edit"></i></button> <button class="btn btn-sm btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button>' ?></td>
				</tr>`);
			});
			$('#tableResultadoDetalleCreditos').find('caption').remove();
		});
	}else{
		var clienteId = $('#idClientesCreditos .selected a').attr('data-tokens');
		//console.log(clienteId);
		$('#tableResultadoDetalleCreditos tbody').children().remove();
		$.ajax({url: 'php/listarCreditoPorFechaVSCliente.php', type: 'POST', data: { mes:mess , anio:año, idCli:clienteId }}).done(function (resp) {
			$.jsonAdeuda=JSON.parse(resp);
			//console.log($.jsonAdeuda.length);
			if($.jsonAdeuda.length==0){
				$('#tableResultadoDetalleCreditos tbody').append(`<tr><td>No se encontraron datos de <strong class="mayuscula">`+$('#idClientesCreditos').find('.filter-option').text()+`</strong> en <strong>`+ mess +'/'+ año +`</strong></td></tr>`)
			}else{
				$.each(JSON.parse(resp), function (i, jsonResp) {// console.log(jsonResp);
					var adeuda='', obs='';
					if(jsonResp.credObservacion!=''){obs='<strong>Obs.</strong> '+jsonResp.credObservacion;}
					if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
					$('#tableResultadoDetalleCreditos tbody').append(`<tr id="${jsonResp.idcreditos}">
						<td>${$('#tableResultadoDetalleCreditos tbody tr').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} gls. de ${jsonResp.contDescripcion} <span class="mayuscula">${obs}</span></td>
						<td>${jsonResp.credcomprobante}</td>
						<td class="tableexport-string">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</td>
						<td>${parseFloat(jsonResp.credCosto).toFixed(2)}</td>
						<td>${adeuda} <?php if($_SESSION['Power']=='1') echo '<br><button class="btn btn-sm btn-success btn-outline btnEditarCreditoMod" data-id="${jsonResp.idcreditos}"><i class="icofont icofont-ui-edit"></i></button> <button class="btn btn-sm btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button>' ?></td>
					</tr>`);
				});
			}
			$('#tableResultadoDetalleCreditos').find('caption').remove();
		});
	}
	$('#btnExportarExcel01').focus();
});
$('#idClientesCreditos').on('click', '.optCreditoCliente', function () {
	var clienteId= $('#idClientesCreditos').find('.selected a').attr('data-tokens');
	if( $('#idFechasCreditos .selected a').attr('data-tokens')==null){
		$.ajax({url: 'php/listarCreditoPorClienteDebe.php', type: 'POST', data: { idCli:clienteId }}).done(function (resp) { //console.log(resp)
			$('#tableResultadoDetalleCreditos tbody').children().remove();
			$.jsonAdeuda=JSON.parse(resp);

			$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
				var adeuda='', obs='';
				if(jsonResp.credObservacion!=''){obs='<strong>Obs.</strong> '+jsonResp.credObservacion;}
				if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
				$('#tableResultadoDetalleCreditos tbody').append(`<tr id="${jsonResp.idcreditos}"><td>${$('#tableResultadoDetalleCreditos tbody tr').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} gls. de ${jsonResp.prodNombre} <span class="mayuscula">${obs}</span></td>
		<td>${jsonResp.credcomprobante}</td>
		<td class="tableexport-string">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</td>
		<td>${parseFloat(jsonResp.credCosto).toFixed(2)}</td>
		<td>${adeuda} <?php if($_SESSION['Power']=='1') echo '<br><button class="btn btn-sm btn-success btn-outline btnEditarCreditoMod" data-id="${jsonResp.idcreditos}"><i class="icofont icofont-ui-edit"></i></button> <button class="btn btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button>' ?></td>
	</tr>`);
			});
			$('#tableResultadoDetalleCreditos').find('caption').remove();
		});
	}else{
		var texto= moment($('#idFechasCreditos .selected a').attr('data-tokens'), 'YYYY/M');
		var año= texto.year();
		var mess=texto.month()+1;
		$.ajax({url: 'php/listarCreditoPorFechaVSCliente.php', type: 'POST', data: {mes:mess , anio:año,  idCli:clienteId }}).done(function (resp) {
			$('#tableResultadoDetalleCreditos tbody').children().remove();
			$.jsonAdeuda=JSON.parse(resp);
			if($.jsonAdeuda.length==0){
				$('#tableResultadoDetalleCreditos tbody').append(`<tr><td>No se encontraron datos de <strong class="mayuscula">`+$('#idClientesCreditos').find('.filter-option').text()+`</strong> en <strong>`+mess +'/'+ año +`</strong></td></tr>`);
			}else{
				$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
				var adeuda='', obs='';
				if(jsonResp.credObservacion!=''){obs='<strong>Obs.</strong> '+jsonResp.credObservacion;}
				if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
				$('#tableResultadoDetalleCreditos tbody').append(`<tr><td id="${jsonResp.idcreditos}">${$('#tableResultadoDetalleCreditos tbody tr').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} gls. de ${jsonResp.contDescripcion} <span class="mayuscula">${obs}</span></td>
					<td>${jsonResp.credcomprobante}</td>
					<td class="tableexport-string">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</td>
					<td>${parseFloat(jsonResp.credCosto).toFixed(2)}</td>
					<td>${adeuda} <?php if($_SESSION['Power']=='1') echo '<br><button class="btn btn-sm btn-success btn-outline btnEditarCreditoMod" data-id="${jsonResp.idcreditos}"><i class="icofont icofont-ui-edit"></i></button> <button class="btn btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button>' ?></td>
					</tr>`);
				});	
			}
			
			$('#tableResultadoDetalleCreditos').find('caption').remove();
		});
	}
	$('#btnExportarExcel01').focus();
});
$('#tableResultadoDetalleCreditos').on('click', '.btnAdeudaDetalle', function () {
	//console.log($(this).parent().parent().attr('id'));
	var idCredito=$(this).parent().parent().attr('id');
	
	$.ajax({url: 'php/listarCreditoDetalle.php', type: 'POST', data: {idCred: idCredito}}).done(function (resp) {
		//console.log(resp);
		var creditoResultado=JSON.parse(resp)[0];
		$('#spIdCred').text(idCredito);
		$('#detCreRazon').text(creditoResultado.cliRazonSocial);
		$('#detCreDni').text(creditoResultado.cliRUC);
		$('#detCreDirec').text(creditoResultado.cliDireccion);
		$('#detCreTlf').text(creditoResultado.cliTelefono);
		$('#detCreFecha').text(creditoResultado.credFecha);
		$('#detCreFecha').text(creditoResultado.credFecha);
		
		$('#detCreComprob').text(creditoResultado.credComprobante);
		$('#detCreProd').text(creditoResultado.contDescripcion);
		$('#detCreRespons').text(creditoResultado.usuNombres +', '+ creditoResultado.usuApellido );
		$('#detCreQuant').text(creditoResultado.credCantidad+ ' gls.');
		$('#detCreTotalCosto').text(parseFloat(creditoResultado.credCosto).toFixed(2));
		$('#btnFinCreditoDeuda').removeClass('hidden');
		$('.modal-detallarCredito').modal('show');
	});
});
$('#btnFinCreditoDeuda').click(function () {
	$.ajax({url: 'php/finalizarCreditoPorId.php', type: 'POST', data: {idCred: $('#spIdCred').text() }}).done(function (resp) {
		console.log(resp);
		if(resp>0){
			location.reload();
		}
	});
});
$('#divResultadoDetallCreditosFin').on('click', '.btnCreditoFinalDetalle', function () {
	//console.log($(this).parent().parent().attr('id'));
	var idCredito=$(this).parent().parent().attr('id');
	
	$.ajax({url: 'php/listarCreditoDetalle.php', type: 'POST', data: {idCred: idCredito}}).done(function (resp) {
		console.log(resp);
		var creditoResultado=JSON.parse(resp)[0];
		$('#spIdCred').text(idCredito);
		$('#detCreRazon').text(creditoResultado.cliRazonSocial);
		$('#detCreDni').text(creditoResultado.cliRUC);
		$('#detCreDirec').text(creditoResultado.cliDireccion);
		$('#detCreTlf').text(creditoResultado.cliTelefono);
		$('#detCreFecha').text(creditoResultado.credFecha);
		$('#detCreFecha').text(creditoResultado.credFecha);
		
		$('#detCreComprob').text(creditoResultado.credComprobante);
		$('#detCreProd').text(creditoResultado.contDescripcion);
		$('#detCreRespons').text(creditoResultado.usuNombres +', '+ creditoResultado.usuApellido );
		$('#detCreQuant').text(creditoResultado.credCantidad+ ' gls.');
		$('#detCreTotalCosto').text(parseFloat(creditoResultado.credCosto).toFixed(2));
		$('#btnFinCreditoDeuda').addClass('hidden');
		$('.modal-detallarCredito').modal('show');
	});
});
$('#idFechasCreditosFin').on('click', '.optCreditoFin', function () {
	var texto= moment($(this).attr('data-tokens'), 'YYYY/M');
	//console.log(texto)
	var año= texto.year();
	var mess=texto.month()+1;

	//console.log($(this).attr('data-tokens'));
	//console.log(texto.month()+1)
	$.ajax({url: 'php/listarCreditoFinPorFechaMesAno.php', type: 'POST', data: { mes:mess , anio:año }}).done(function (resp) { console.log(resp)
		$('#divResultadoDetallCreditosFin').children().remove();
		$.jsonAdeuda=JSON.parse(resp);
		$.each(JSON.parse(resp), function (i, jsonResp) { console.log(jsonResp);
			var adeuda='';
			if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
			$('#divResultadoDetallCreditosFin').append(`<div class="row" id="${jsonResp.idcreditos}"><div class="col-xs-4 ">${$('#divResultadoDetallCreditosFin .row').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} galones de ${jsonResp.prodNombre}</div>
					<div class="col-xs-2">${jsonResp.credcomprobante}</div>
					<div class="col-xs-2">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</div>
					<div class="col-xs-2">${parseFloat(jsonResp.credCosto).toFixed(2)}</div>
					<div class="col-xs-2">${adeuda} <button class="btn btn-primary btn-outline btnCreditoFinalDetalle"><i class="icofont icofont-ui-rate-blank"></i></button></div></div>`);
		});
	})
});
$('#idClientesCreditosFin').on('click', '.optCreditoCliente', function () {
	var clienteId= $('#idClientesCreditosFin').find('.selected a').attr('data-tokens');

	//console.log($(this).attr('data-tokens'));
	//console.log(texto.month()+1)
	$.ajax({url: 'php/listarCreditoPorClienteNoDebe.php', type: 'POST', data: { idCli: clienteId }}).done(function (resp) { //console.log(resp)
		$('#divResultadoDetallCreditosFin').children().remove();
		//$.jsonAdeuda=JSON.parse(resp);
		$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
			var adeuda='';
			if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
			$('#divResultadoDetallCreditosFin').append(`<div class="row" id="${jsonResp.idcreditos}"><div class="col-xs-4 ">${$('#divResultadoDetallCreditosFin .row').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} galones de ${jsonResp.prodNombre}</div>
					<div class="col-xs-2">${jsonResp.credcomprobante}</div>
					<div class="col-xs-2">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</div>
					<div class="col-xs-2">${parseFloat(jsonResp.credCosto).toFixed(2)}</div>
					<div class="col-xs-2">${adeuda} <button class="btn btn-primary btn-outline btnCreditoFinalDetalle"><i class="icofont icofont-ui-rate-blank"></i></button></div></div>`);
		});
	})
});
$('#idFechasTanqueo').on('click', '.optTanqueoFecha', function () {
	var tanqueoFecha= $('#idFechasTanqueo').find('.selected a').attr('data-tokens');

	//console.log($(this).attr('data-tokens'));
	//console.log(tanqueoFecha)
	$.ajax({url: 'php/listarTanqueosXMes.php', type: 'POST', data: { fecha: tanqueoFecha }}).done(function (resp) { //console.log(resp)
		$('#divResultadoDetallTanqueoFin').children().remove();
		//$.jsonAdeuda=JSON.parse(resp);
		var maxRows=JSON.parse(resp).length-1;
		
		var sumaTanque=0, obs='';
		$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
			sumaTanque+=parseFloat(jsonResp.detcoCantidad);
			if(jsonResp.compObservacion ==''){obs='';}else{obs='<strong>Obs.</strong> '+jsonResp.compObservacion;}
			if(jsonResp.detcoCantidad>=0){
				$('#divResultadoDetallTanqueoFin').append(`<div class="row" id="${jsonResp.idcompra}"><div class="col-xs-4 ">${i+1}. Tanqueo: ${jsonResp.contDescripcion}: ${jsonResp.detcoCantidad} gls. <span class="mayuscula">${obs}</span></div>
					<div class="col-xs-4"><span class="spanFechaTanques">${moment(jsonResp.compFecha).format('DD/MM/YYYY')}</span> <span class="spanHoraTanques">${moment(jsonResp.compFecha).format('hh:mm a')}</span></div>
					<div class="col-xs-4 mayuscula">${jsonResp.usuNombres} <?php if($_SESSION['Power']=='1'){echo '<button class="btn btn-morado btn-outline btnCambiarFechaTanqueo btn-sm"><i class="icofont icofont-clock-time"></i></button>';} ?></div> </div>`);}
			else{
				$('#divResultadoDetallTanqueoFin').append(`<div class="row" id="${jsonResp.idcompra}"><div class="col-xs-4 ">${i+1}. Merma: ${jsonResp.contDescripcion}: ${jsonResp.detcoCantidad} gls. <span class="mayuscula">${obs}</span></div>
					<div class="col-xs-4"><span class="spanFechaTanques">${moment(jsonResp.compFecha).format('DD/MM/YYYY')}</span> <span class="spanHoraTanques">${moment(jsonResp.compFecha).format('hh:mm a')}</span></div>
					<div class="col-xs-4 mayuscula">${jsonResp.usuNombres} <?php if($_SESSION['Power']=='1'){echo '<button class="btn btn-morado btn-outline btnCambiarFechaTanqueo btn-sm"><i class="icofont icofont-clock-time"></i></button>';} ?></div> </div>`);
			}
			
			if(i ==maxRows){
				$('#divResultadoDetallTanqueoFin').append(`<div class="row" >
					<div class="col-xs-4"><strong>Total: ${parseFloat(sumaTanque).toFixed(2)} gls.</strong> </div>
					<div class="col-xs-4 mayuscula"></div> </div>`);
			}
		});
	})
});
$('#idFechasGastos').on('click', '.optGastoFecha', function () {
	var gastoFecha= $('#idFechasGastos').find('.selected a').attr('data-tokens');

	//console.log($(this).attr('data-tokens'));
	$.ajax({url: 'php/listarGastosPorMes.php', type: 'POST', data: { fecha: gastoFecha }}).done(function (resp) { //console.log(resp)
		$('#divResultadoGastosMes').children().remove();
		//$.jsonAdeuda=JSON.parse(resp);
		var maxRows=JSON.parse(resp).length-1;
		
		var sumaGastos=0;
		$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
			sumaGastos+=parseFloat(jsonResp.cajaMonto);
			
			$('#divResultadoGastosMes').append(`<div class="row" id="${jsonResp.idcaja}"><div class="col-xs-4 mayuscula">${i+1}. ${jsonResp.cajaDescripcion}: S/. ${parseFloat(jsonResp.cajaMonto).toFixed(2)} </div>
					<div class="col-xs-4"><span class="spanFechaTanques">${moment(jsonResp.cajaFecha).format('DD/MM/YYYY')}</span> <span class="spanHoraTanques">${moment(jsonResp.cajaFecha).format('hh:mm a')}</span></div>
					<div class="col-xs-4 mayuscula">${jsonResp.usuNombres} </div> </div>`);
			if(i ==maxRows){
				$('#divResultadoGastosMes').append(`<div class="row" >
					<div class="col-xs-4"><strong>Total: S/. ${parseFloat(sumaGastos).toFixed(2)} </strong> </div>
					<div class="col-xs-4 mayuscula"></div> </div>`);
			}
		});
	})
});
$('#idFechasIngresos').on('click', '.optIngresoFecha', function () {
	var IngresoFecha= $('#idFechasIngresos').find('.selected a').attr('data-tokens');

	//console.log($(this).attr('data-tokens'));
	$.ajax({url: 'php/listarIngresosPorMes.php', type: 'POST', data: { fecha: IngresoFecha }}).done(function (resp) { //console.log(resp)
		$('#divResultadoIngresosMes').children().remove();
		//$.jsonAdeuda=JSON.parse(resp);
		var maxRows=JSON.parse(resp).length-1;
		
		var sumaGastos=0;
		$.each(JSON.parse(resp), function (i, jsonResp) { //console.log(jsonResp);
			sumaGastos+=parseFloat(jsonResp.cajaMonto);
			
			$('#divResultadoIngresosMes').append(`<div class="row" id="${jsonResp.idcaja}"><div class="col-xs-4 mayuscula">${i+1}. ${jsonResp.cajaDescripcion}: S/. ${parseFloat(jsonResp.cajaMonto).toFixed(2)} </div>
					<div class="col-xs-4"><span class="spanFechaTanques">${moment(jsonResp.cajaFecha).format('DD/MM/YYYY')}</span> <span class="spanHoraTanques">${moment(jsonResp.cajaFecha).format('hh:mm a')}</span></div>
					<div class="col-xs-4 mayuscula">${jsonResp.usuNombres} </div> </div>`);
			if(i ==maxRows){
				$('#divResultadoIngresosMes').append(`<div class="row" >
					<div class="col-xs-4"><strong>Total: S/. ${parseFloat(sumaGastos).toFixed(2)} </strong> </div>
					<div class="col-xs-4 mayuscula"></div> </div>`);
			}
		});
	})
});

$('#ulResumen li').click(function () {
	var fecha=$('#txtFechaVentas').val(); console.log(fecha)
	if( fecha !=''){
		var sumaCantidades=0;
		fechMoment=moment(fecha, 'DD/MM/YYYY');
		var tabactivo=$(this).find('a').text();
		if(tabactivo=='Mensual'){
			$('#divResVentaMes').children().remove();
			$.ajax({url: 'php/listarVentasMes.php', type: 'POST', data: { anio: fechMoment.year() , mes: fechMoment.month()}}).done(function (resp) {

				$.each(JSON.parse(resp), function (i, dato) {
					sumaCantidades+=parseFloat(dato.ventMontoTotal);
					$('#divResVentaMes').append(`<div class="row">
							<div class="col-xs-4">${i+1}. ${moment(dato.ventFecha).format('DD/MM/YYYY h:mm a')}</div>
							<div class="col-xs-4">${parseFloat(dato.ventMontoTotal).toFixed(2)}</div>
							<div class="col-xs-4">${dato.usuNombres} ${dato.usuApellido}</div>
						</div>`);
					$('#divVMTotalSuma').text(parseFloat(sumaCantidades).toFixed(2));
				});
			})
		}
		if(tabactivo=='Diaria'){ 
			$('#txtFechaVentas').change();
		}
	}
});
$('#txtFechaVentas').change(function() {
	var fecha=$('#txtFechaVentas').val(); //console.log(fecha)
	$('#divResVentaDiaria').children().remove();
			$('#divResCajaDiaria').children().remove();
			$.ajax({url:'php/listarVentasDetalle.php', type: 'POST', data:{fechaIni:fecha}}).done(function (resp) {
				$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
					$('#divResVentaDiaria').append(`<div class="row ${dato.contColorMaterialize}"><div class="col-xs-3"><strong>${i+1}. ${dato. prodNombre} / ${dato.ladoDescripcion}</strong>. <span class='mayuscula'>${dato.usuNombres}</span></div>
							<div class="col-xs-2">${moment(dato.ventFecha).format('DD/MM/YYYY h:mm a')}</div>
							<div class="col-xs-2">${dato.detveContAnterior} - ${dato.detvenContMecan}</div>
							<div class="col-xs-1">${parseFloat(dato.detveCantidad).toFixed(2)} gls.</div>
							<div class="col-xs-1">S/. ${parseFloat(dato.detvePrecio).toFixed(2)}</div>
							<div class="col-xs-2">S/. ${parseFloat(dato.detveSubTotal).toFixed(2)}</div></div>`);
				});
				
			});
			var sumaIngreso=0, sumaEgreso=0, sumaCredito=0;
			var sumaVenta=0;
			$.ajax({url: 'php/listarCajaPorFecha.php', type: 'POST', data:{ fecha: $('#dtpFechaVentas').find('input').val() }}).done(function (resp) {
				elemento=JSON.parse(resp);/* console.log(elemento);*/
				if(elemento.length==0){
					
					$('#divResCajaDiaria').append(`<div class="row">
							<p>No hay créditos en éste turno.</p></div>`);
				}else{
					
					$.each(elemento, function (i, dato) {// console.log(dato)
						switch(dato.idTipoProceso){
							case "3": sumaCredito+=parseFloat(dato.cajaMonto) ;break; //es credito
							case "5": sumaEgreso+=parseFloat(dato.cajaMonto) ;break; //es gasto
							case "6": sumaIngreso+=parseFloat(dato.cajaMonto) ;break; //es gasto
						}
						$('#divResCajaDiaria').append(`<div class="row">
							<div class="idCaja sr-only">${dato.idcaja}</div>
							<div class="col-xs-1 creTipo">${i+1}. ${dato.tipoDescripcion}</div>
							<div class="col-xs-6 mayuscula creDescr">${dato.cajaDescripcion}</div>
							<div class="col-xs-1 creMonto">${parseFloat(dato.cajaMonto).toFixed(2)}</div>
							<div class="col-xs-3 creFecha">${moment(dato.cajaFecha).format('DD/MM/YYYY h:mm a')}</div>`);
					});
				}
				/*$('#spanPanelResumenIngresos').text(parseFloat(sumaIngreso).toFixed(2));
				$('#spanPanelResumenGastos').text('('+parseFloat(sumaEgreso).toFixed(2)+')');
				$('#spanPanelResumenCreditos').text('('+parseFloat(sumaCredito).toFixed(2)+')');
				$('#spanPanelSumaTotalChica').text(parseFloat(sumaVenta+sumaIngreso-sumaEgreso-sumaCredito).toFixed(2));*/
			});
});
$('#dtpFechaVentas').on('dp.change',function () {
	$('#txtFechaVentas').change();
});
$('#divResultadoDetallTanqueoFin').on('click', '.btnCambiarFechaTanqueo', function () {
	var fecha= moment($(this).parent().parent().find('.spanFechaTanques').text(), 'DD/MM/YYYY');
	// console.log(fecha);
	$('#spIdTanq').text($(this).parent().parent().attr('id'));
	$('#spanHoraInfo').text($(this).parent().parent().find('.spanHoraTanques').text());
	$('#spanTanqueInfo').text(($(this).parent().parent().children().first().text()));
	$('.modal-cambioTanqueFecha').modal('show');
	$('.modal-cambioTanqueFecha #txtFechaTanqueUpd').val(fecha.format('YYYY-MM-DD'));
});
$('#btnChangeFechaTanque').click(function () {

	var nuevaFecha = $('.modal-cambioTanqueFecha #txtFechaTanqueUpd').val()+ ' ' + moment($('#spanHoraInfo').text(), 'h:mm a').format('HH:mm');
	$.ajax({url: 'php/updateFechaTanqueo.php', type: 'POST', data: {
		idTanq: $('#spIdTanq').text(), fecha: nuevaFecha
	}}).done(function (resp) {
		if(resp=='1'){
			location.reload();
		}
	});
});
$('#tabCreditosPendientes').on('click', '.btnEditarCreditoMod', function () {
	var elemento =$(this);
	
	$.ajax({url: 'php/listarCreditoDetalle.php', type: 'POST', data: {idCred: $(elemento).attr('data-id')}}).done(function (resp) {
		console.log(resp);
		var creditoResultado=JSON.parse(resp)[0];
		$('#spIdCreditoHid').val($(elemento).attr('data-id'));
		$('#modEditRuc').val(creditoResultado.cliRUC);
		$('#modEditRazonSocial').val(creditoResultado.cliRazonSocial);
		$('#selectClientesEditar .selectpicker').selectpicker('val', creditoResultado.cliRazonSocial).selectpicker('refresh');
		$('#modEditFecha').val(moment(creditoResultado.credFecha).format('YYYY-MM-DD'));
		
		$('#modEditComprobante').val(creditoResultado.credComprobante);
		
		$('#selectProductosEditar .selectpicker').selectpicker('val', creditoResultado.contDescripcion).selectpicker('refresh');
		$('#modEditCantidad').val(parseFloat(creditoResultado.credCantidad).toFixed(2));
		$('#modEditMonto').val(parseFloat(creditoResultado.credCosto).toFixed(2));
		$('#selectUsuariosEditar .selectpicker').selectpicker('val', creditoResultado.usuNombres).selectpicker('refresh');
		$('.modal-editarCreditoPers').modal('show');
	});
});
$('#modEditRuc').keyup(function () {
	if($('#modEditRuc').val().length>=8){
		$.ajax({url: 'php/listarClientePorRUCoDNI.php', type: 'POST', data: {dniRuc: $('#modEditRuc').val() }}).done(function (resp) {
			var dato = JSON.parse(resp);
			$('#selectClientesEditar .selectpicker').selectpicker('val', dato[0].cliRazonSocial).selectpicker('refresh');
			$('#modEditRazonSocial').val();
		});
	}
});
$('#btnUpdCaja').click(function() {
	var idCli= $('#selectClientesEditar').find('li.selected a').attr('data-tokens');
	var fecha= $('#modEditFecha').val();
	var compro= $('#modEditComprobante').val();
	var idPro= $('#selectProductosEditar').find('li.selected a').attr('data-tokens');
	var quant= parseFloat($('#modEditCantidad').val());
	var price= parseFloat($('#modEditMonto').val());
	var idUser= $('#selectUsuariosEditar').find('li.selected a').attr('data-tokens');


	if (! moment(fecha).isValid()){ /*Error*/}
	else {
		$.ajax({url: 'php/updateCreditoPorId.php', type: 'POST', data: {
			idCred: $('#spIdCreditoHid').val(),
			idUser: idUser,
			monto: price,
			fecha: fecha,
			idProd: idPro,
			comprob: compro,
			canti: quant,
			idCli: idCli
		}}).done(function (resp) {
			//console.log(resp)
			location.reload();
		});
	}
});
$('#btnExportarExcel01').click(function () {
	$("#tableResultadoDetalleCreditos").tableExport({
		formats:["xlsx"],
		filename: 'Reporte créditos pendientes',
		mimeType: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
		bootstrap: true
	});
});
</script>

</body>

</html>
<!-- JOS MANUEÑO calificación -->