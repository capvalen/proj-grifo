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

		<title>Inicio: Info-Combustion</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.2" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.1">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">

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
				<li>
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
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-shopping-cart"></i> Ventas - Cuadre de caja</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabListaPreciosActual" data-toggle="tab">Lista de precios de productos</a></li>
					<li><a href="#tabCuadrarCajaEmpleado" data-toggle="tab">Cuadrar caja</a></li>
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
								<tr class="filters">
									<th>Producto</th>
									<th>Precio S/.</th>
									<th>Última actualización</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Gasolina 84</td>
									<td>11.70</td>
									<td>Lunes, 11 Mayo 2017</td>
								</tr>
								<tr>
									<td>Gas</td>
									<td>13.80</td>
									<td>Martes, 9 Junio 2017<td>
								</tr>
								<tr>
									<td>Kerosene</td>
									<td>15.10</td>
									<td>Viernes, 23 Febrero 2017</td>
								</tr>
							</tbody>
							</table>
							</div>
							</div>

						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para cuadrar caja-->
						<div class="tab-pane fade container-fluid" id="tabCuadrarCajaEmpleado">
						<!--Inicio de pestaña 02-->
						<h3>Cuadrar caja del usuario: <small>Carlos Pariona</small></h3>
						<span class="pull-left">Seleccione el grupo y luego el producto:</span>
							<div class="col-sm-2">
							<div  id="divSelectGrupoListado">
								<select class="selectpicker mayuscula slpGrupos" title="Grupo..."  data-width="100%" data-live-search="true">
									<option class="optGrupo mayuscula" data-tokens="aa">Grupo 1</option>
									<option class="optGrupo mayuscula" data-tokens="bb">Grupo 2</option>
									<option class="optGrupo mayuscula" data-tokens="cc">Grupo 3</option>
								</select>
							</div>
							</div>
							<div class="col-sm-3">
							<div  id="divSelectProductoListado">
								<select class="selectpicker mayuscula slpProductos" title="Producto..."  data-width="100%" data-live-search="true">
									<option class="optProducto mayuscula" data-tokens="aa">gas</option>
									<option class="optProducto mayuscula" data-tokens="bb">Gasolina 84</option>
									<option class="optProducto mayuscula" data-tokens="cc">Kerosene</option>
								</select>
							</div>
							</div>
						<button class="btn btn-rosaKit btn-outline" id="btnAgregarProductoCuadrar"><i class="icofont icofont-cube"></i> Agregar producto</button>
						<!--Fin de pestaña 02-->
						
						<div class="col-xs-12">
							<hr>
							<div class="row">
								<strong>
								<div class="col-sm-2">Producto</div>
								<div class="col-sm-2">Precio</div>
								<div class="col-sm-2">Cuenta anterior</div>
								<div class="col-sm-2">Cuenta actual</div>
								<div class="col-sm-2">Consumido</div>
								<div class="col-sm-2">Venta</div>
							</strong>
							</div>
							<span id="spanListadoNuevosCuadres">
								<!-- <div class="row">
									<div class="col-sm-2"><strong>1.</strong> Grupo 1</div>
									<div class="col-sm-3 mayuscula">Producto</div>
									<div class="col-sm-2 mayuscula">S/. 14.50</div>
									<div class="col-sm-2">1456930</div>
									<div class="col-sm-3"><input type="numeric" class="form-control"></div>
								</div> -->
							</span>
							
							
							<hr>
							<div class="row col-xs-8 col-xs-offset-2">
							<div class="panel panel-negro ">
							<div class="panel-heading">
								<h3 class="panel-title">Resumen de cuadro</h3>
								
							</div>
							<div class="container-fluid">
							<div class="row">
								<strong>
									<div class="col-sm-3">Producto</div>
									<div class="col-sm-3">Suma consumo</div>
									<div class="col-sm-3">Suma ventas</div>
								</strong>
							</div>
							<span id="spanListadoResumen">
							
							</span>
							<div class="row">
								<span class="pull-right" style="padding-right: 150px"><strong >Suma Total: S/. <span id="spanSumaTotal"></span></strong></span>
							</div>
							</div>
							</div>
							
							
						</div></div></div>

						<!--Panel para -->
						<div class="tab-pane fade container-fluid" id="tabExtra">
						<!--Inicio de pestaña 02-->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, quis, facilis beatae recusandae optio molestias ipsam quibusdam aliquid rerum voluptatem incidunt in vero quo illo natus? Asperiores, ipsum placeat dolorum.
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
<?php include ('php/llamandoModals.php'); ?>

	
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js"></script>
<script src="js/accionesGlobales.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>

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

$('#btnAgregarProductoCuadrar').click(function () {
	var index=$('#spanListadoNuevosCuadres .row').length+1;
	var grupo= $('#divSelectGrupoListado').find('li.selected a').text();
	var producto= $('#divSelectProductoListado').find('li.selected a').text();
	var precio=parseFloat(Math.random() * (21 - 8) + 8).toFixed(2);
	var contAnterior=Math.round(Math.random() * (900000 - 100000) + 100000);

	if(grupo!='' && producto !=''){
	$('#spanListadoNuevosCuadres').append(`
		<div class="row">
			<div class="idProdConsumo hidden">${index}</div>
			<div class="col-sm-2 mayuscula"><strong>${index}. <span class="spanGrupo">${grupo}</span> - <span class="spanProducto">${producto}</span></strong></div>
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
	
});
$('#spanListadoNuevosCuadres').on('change', '.txtValorNumericoConsumo', function () {
	var contenedorRow=$(this).parent().parent();//.find('.idProdConsumo').text();
	var nuevoValor=parseFloat($(this).val());
	var precioFijo=parseFloat(contenedorRow.find('.divPrecioFijo').text());
	var contadorPrevio=parseFloat(contenedorRow.find('.divContadorPrevio').text());
	var productoRow=contenedorRow.find('.spanProducto').text();

	var consumoRealHoy=nuevoValor-contadorPrevio;
	//console.log(precioFijo)
	if(consumoRealHoy<=0){
		contenedorRow.find('.divConsumoProd').text('Inválido!').removeClass('text-success').addClass('text-danger');
		contenedorRow.find('.divVentaConsumo').text('Inválido!').removeClass('text-success').addClass('text-danger');
	}else{
		var precFinventa=parseFloat(consumoRealHoy*precioFijo).toFixed(2);
		contenedorRow.find('.divConsumoProd').text(consumoRealHoy).removeClass('text-danger').addClass('text-success');
		contenedorRow.find('.divVentaConsumo').text(precFinventa).removeClass('text-danger').addClass('text-success');
	}

	sumarTotales();
});
function sumarTotales(){
var sumaTotales=0;
$('#spanListadoResumen .row').each( function (i, elem) {
	var produdctoABuscar=$(elem).find('.divProducResumen').text()
	var sumaParcialConsumo=0, sumaParcialVenta=0;
	$(`#spanListadoNuevosCuadres .spanProducto:contains("${produdctoABuscar}")`).parent().parent().parent().each(function (i, arg) {
		
		sumaParcialConsumo+=parseFloat( $(arg).find('.divConsumoProd').text())
		sumaParcialVenta+=parseFloat( $(arg).find('.divVentaConsumo').text())
	});
	//console.log( produdctoABuscar+' = ' + parseFloat(sumaParcialVenta).toFixed(2) )
	sumaTotales+=sumaParcialVenta;
	$(elem).find('#spanSumaFinalConsumo').text(sumaParcialConsumo);
	$(elem).find('#spanSumaFinalMontos').text(parseFloat(sumaParcialVenta).toFixed(2));
});
$('#spanSumaTotal').text(parseFloat(sumaTotales).toFixed(2));
}
</script>

</body>

</html>
