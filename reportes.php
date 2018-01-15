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
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->

</head>

<body>
<style>
#divResVentaMes .row, #divResultadoDetalleCreditos>.row, #divResVentaDiaria .row{padding-top: 10px; padding-bottom: 10px}
#divResVentaMes .row:hover, #divResultadoDetalleCreditos>.row:hover,#divResVentaDiaria .row:hover{background-color: #eee;}
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
						<a href="usuarios.php"><i class="icofont icofont-users"></i> Usuarios</a>
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
					<li ><a href="#tabCreditosFinalizados" data-toggle="tab">Créditos finalizados</a></li>
					<li><a href="#tabResumenVentas" data-toggle="tab">Ventas resumen</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabCreditosPendientes">
						<!--Inicio de pestaña 01-->
							<p>Tiene Ud. <strong><?php require 'php/returnCreditosCount.php' ?></strong> créditos pendientes por cobrar: </p>
							<p>Seleccione una fecha para ver los créditos: <span id="idFechasCreditos">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosNumFecha.php' ?>
								</select>
							</span>
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
						<div class="tab-pane fade container-fluid" id="tabCreditosFinalizados">
						<!--Inicio de pestaña 02-->
						<p>Seleccione una fecha para ver reporte de créditos finalizados: <span id="idFechasCreditosFin">
								<select class="selectpicker mayuscula" title="Fechas..."  data-width="30%" data-live-search="true">
									<?php require 'php/listarCreditosFinNumFecha.php' ?>
								</select>
							</span>
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
								<input type='text' class="form-control text-center" />
								<span class="input-group-addon">
									<i class="icofont icofont-calendar"></i>
								</span>
							</div>
							</div>
						</span>
						</p>

						<ul class="nav nav-tabs" id="ulResumen">
							<li><a href="#tabVentaMes" data-toggle="tab">Mensual</a></li>
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
							<div id="divResVentaDiaria"></div>
							
						</div>
						<div class="tab-pane fade container-fluid" id="tabVentaDiaraiaDetalla">
							
						</div>
						</div>
						
						<!--Fin de pestaña 03-->
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


<?php include 'php/llamandoModals.php'; ?>

<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.0.1"></script>
<script src="js/accionesGlobales.js?version=1.0.7"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){
datosUsuario();
	$('.selectpicker').selectpicker('refresh');

		$('.mitooltip').tooltip();
		$('input').keypress(function (e) {
			if (e.keyCode == 13)
			{
				$(this).parent().next().children().focus();
				//$(this).parent().next().children().removeAttr('disabled'); //agregar atributo desabilitado
			} 
		});
	$('#dtpFechaVentas').datetimepicker({ format: 'DD/MM/YYYY', locale: 'es'});
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
			if(jsonResp.credadeuda=='1'){ adeuda='<span class="red-text text-darken-2">Pendiente de pago</span>'} else { adeuda='<span class="light-green-text">Cancelado</span>'}
			$('#divResultadoDetalleCreditos').append(`<div class="row" id="${jsonResp.idcreditos}"><div class="col-xs-4 ">${$('#divResultadoDetalleCreditos .row').length+1}. <span class="mayuscula">${jsonResp.cliRazonSocial}</span>, solicitó: ${jsonResp.credCantidad} galones de ${jsonResp.prodNombre}</div>
					<div class="col-xs-2">${jsonResp.credcomprobante}</div>
					<div class="col-xs-2">${moment(jsonResp.credfecha).format('DD/MM/YYYY')}</div>
					<div class="col-xs-2">${parseFloat(jsonResp.credCosto).toFixed(2)}</div>
					<div class="col-xs-2">${adeuda} <button class="btn btn-primary btn-outline btnAdeudaDetalle"><i class="icofont icofont-ui-rate-blank"></i></button></div></div>`);
		});
		
	})
});
$('#divResultadoDetalleCreditos').on('click', '.btnAdeudaDetalle', function () {
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

$('#ulResumen li').click(function () {
	var fecha=$('#dtpFechaVentas').find('input').val();
	if( fecha !=''){
		var sumaCantidades=0;
		fechMoment=moment(fecha, 'DD/MM/YYYY');
		var tabactivo=$(this).find('a').text()
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
			$('#divResVentaDiaria').children().remove();
			$.ajax({url:'php/listarVentasDetalle.php', type: 'POST', data:{fechaIni:fecha}}).done(function (resp) {
				$.each(JSON.parse(resp), function (i, dato) { console.log(dato)
					$('#divResVentaDiaria').append(`<div class="row ${dato.contColorMaterialize}"><div class="col-xs-3"><strong>${i+1}. ${dato. prodNombre} / ${dato.ladoDescripcion}</strong>. <span class='mayuscula'>${dato.usuNombres}</span></div>
							<div class="col-xs-2">${moment(dato.ventFecha).format('DD/MM/YYYY h:mm a')}</div>
							<div class="col-xs-2">${dato.detveContAnterior} - ${dato.detvenContMecan}</div>
							<div class="col-xs-1">${parseFloat(dato.detveCantidad).toFixed(2)} gls.</div>
							<div class="col-xs-1">S/. ${parseFloat(dato.detvePrecio).toFixed(2)}</div>
							<div class="col-xs-2">S/. ${parseFloat(dato.detveSubTotal).toFixed(2)}</div></div>`);
				});
				
			});
		}
	}
})
</script>

</body>

</html>
<!--  -->