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

		<title>Producto: Infocat-Grifo</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.5" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.2" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.2">
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
				<li class="active">
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
					<a class="navbar-brand ocultar-mostrar-menu" href="#!"><img id="imgLogoInfocat" class="img-responsive" src="images/logo.png" alt=""></a>
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
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-washing-machine"></i> Panel de productos</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarProd" data-toggle="tab">Agregar producto</a></li>
					<li><a href="#tabListarProd" data-toggle="tab">Listar productos</a></li>
					<li><a href="#tabHistorialPrecios" data-toggle="tab">Historial cambios precios</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para crear productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarProd">
						<!--Inicio de pestaña 01-->
							<h3>Agregar un nuevo producto</h3>
							<div class="row">
							<div class="col-sm-4">
								<label for="txtProductoNombrNuevo">Nombre del producto:</label>
								<input type="text" id="txtProductoNombrNuevo" class="form-control mayuscula">
							</div>
							<div class="col-sm-2">
								<label for="txtProductoNombrNuevo">Precio del producto S/.:</label>
								<input type="number" id="txtProductoNombrNuevo" class="form-control txtNumeroDecimal text-center" step=1 min=0 value='0.00'>
							</div>
							<div class="col-sm-2" id="spGrupoProducto">
								<label for="spGrupoProducto">¿Pertenece a un grupo?</label>
								<select class="selectpicker mayuscula"  title="Grupo..."  data-width="100%" data-live-search="true"">
								<option class="optGrupoProd mayuscula" data-tokens="0">Ninguno</option>
								<option class="optGrupoProd mayuscula" data-tokens="1">Grupo 1</option>
								<option class="optGrupoProd mayuscula" data-tokens="2">Grupo 2</option>
								<option class="optGrupoProd mayuscula" data-tokens="3">Grupo 3</option>
								<option class="optGrupoProd mayuscula" data-tokens="4">Grupo 4</option>
								<option class="optGrupoProd mayuscula" data-tokens="5">Grupo 5</option>
								<option class="optGrupoProd mayuscula" data-tokens="6">Grupo 6</option>
								<option class="optGrupoProd mayuscula" data-tokens="7">Grupo 7</option>
								<option class="optGrupoProd mayuscula" data-tokens="8">Grupo 8</option>
								<option class="optGrupoProd mayuscula" data-tokens="9">Grupo 9</option>
								<option class="optGrupoProd mayuscula" data-tokens="10">Grupo 10</option>
								<option class="optGrupoProd mayuscula" data-tokens="11">Grupo 11</option>
								<option class="optGrupoProd mayuscula" data-tokens="12">Grupo 12</option>
							</select>
							</div>
							</div>
							<hr>
							<div class="row col-sm-12">
								<button class="btn btn-primary btn-outline" id="btnGuardarProdNuevo"><i class="icofont icofont-diskette"></i> Guardar producto</button>
							</div>
						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para listar productos-->
						<div class="tab-pane fade container-fluid" id="tabListarProd">
						<!--Inicio de pestaña 02-->
						<h3>Listado de todos los productos</h3>
						<div class="panel panel-cielo ">
						<div class="panel-heading">
							<h3 class="panel-title">Productos activos</h3>
							
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
								<th>Responsable</th>
								<th>Última actualización</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody id="tbodyProductosListado">
							<!-- <tr>
								<td><strong>1. Gasolina 94</strong></td>
								<td>14.50</td>
								<td>Lunes, 24 Mayo 2017</td>
								<td>Grupo 1</td>
								<td>
									<button class="btn btn-morita btn-outline mitooltip" data-toggle="tooltip" title="Editar"><i class="icofont icofont-edit"></i></button>
									<button class="btn btn-danger btn-outline mitooltip" data-toggle="tooltip" title="Eliminar"><i class="icofont icofont-error"></i></button>
								</td>
							</tr> -->
							
						</tbody>
						</table>
						</div>
					</div>
						<!--Fin de pestaña 02-->
						</div>
						

						<!--Panel para historial-->
						<div class="tab-pane fade container-fluid" id="tabHistorialPrecios">
						<!--Inicio de pestaña 02-->
						<h3>Cambios registrados en el tiempo</h3>
						<span class="pull-left">Seleccione el producto para ver los cambios</span>
						<!-- <div class="col-sm-3">
						<div  id="divSelectGrupoProListado">
							<select class="selectpicker mayuscula" title="Grupo..."  data-width="100%" data-live-search="true"">
							</select>
						</div>
						</div>
						<div class="col-sm-3">
						<div  id="divSelectLadoProListado">
							<select class="selectpicker mayuscula" title="Lado..."  data-width="100%" data-live-search="true"">
							</select>
						</div>
						</div> -->
						<div class="col-sm-3">
						<div  id="divSelectProductoListado">
							<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true"">
								<?php require 'php/listarProductosNombresOption.php'; ?>
							</select>
						</div>
						</div>

						<div class="col-sm-12">
						<hr>
						<div class="panel panel-verde hidden" id="pnlTablaModificacionPrecio">
						<div class="panel-heading">
							<h3 class="panel-title">Listado de cambios para: <strong id="strProducto">Gas</strong></h3>
						</div>
						<div class="container-fluid">
						<table class="table table-hover">
						<thead>
							<tr class="filters">
								<th>Fecha modificación</th>
								<th>Precio Nuevo S/.</th>
								<th>Precio Anterior S/.</th>
								<th>Responsable</th>
							</tr>
						</thead>
						<tbody id="tbodyRellenoHistorial">
							<!-- <tr>
								<td>Lunes, 24 Mayo 2018</td>
								<td>14.50</td>
								<td>14.10</td>
								<td>Carlos Alex</td>
							</tr> -->
							</tr>
						</tbody>
						</table>
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
<?php include ('php/llamandoModals.php'); ?>


<?php if ( $_SESSION['Power']== 1){ ?>
<!-- Modal para cambiar los datos de un producto sleccionado  -->
<div class="modal fade modal-editarProductoMod" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog  modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-wysteria">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Actualizar precios</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			
			<div class="row">
				<p>Se está intentando cambiar un nuevo precio a <strong id="strModalProductoChange"></strong><span class="sr-only" id="idHideProdModalChange"></span></p>
				<label for="txtnewpriceProducto">Nuevo precio (S/.):</label>
				<input type="number" class="form-control text-center txtNumeroDecimal" id="txtnewpriceProducto">
				<div class="checkbox checkbox-success">
					<input id="chkConfCambioPrecioProducto" class="styled" type="checkbox" value=1>
					<label for="chkConfCambioPrecioProducto">
							Confirmo el cambio de precio de éste producto.
					</label>
				</div>
				<h4 class="red-text text-darken-2 sr-only" id="lblFalta"><i class="icofont icofont-animal-cat-alt-4"></i> <span></span></h4>
			</div>
			
			</div>
			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-morita btn-outline" id="btnActualizarDataPrecioProducto"><i class="icofont icofont-social-meetme"></i> Actualizar</button></div>
	</div>
	</div>
</div>
<?php  } ?>

<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.0.3"></script>
<script src="js/accionesGlobales.js?version=1.0.7"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>

<!-- Menu Toggle Script -->
<script>
datosUsuario();
$(document).ready(function(){
	
	var existeProd= <?php if (isset( $_GET['idproducto'])){echo $_GET['idproducto']; } else { echo 0;} ?>;
	
	if(existeProd==0){console.log('No hay ningún producto seleccionado')}
	else{}
	moment.locale('es');
	$.get({url: 'php/listarTodosProductosContenedor.php', type: 'POST'}).done(function (resp) {
		//console.log(resp)
		$('#tbodyProductosListado').children().remove();
		$.JsonProductosContenedor=JSON.parse(resp);
		$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
			$('#tbodyProductosListado').append(`<tr  class='${dato.contColorMaterialize}'>
				<!--<td>${dato.grupoDescripcion}</td>
				<td>${dato.ladoDescripcion}</td>-->
				<td><strong>${dato.contDescripcion}</strong></td>
				<td>${parseFloat(dato.contPrecio).toFixed(2)}</td>
				<td>${dato.contStock}</td>
				<td>${dato.responsable}</td>-->
				<td>${moment(dato.contUltimaFecha).format('dddd DD, MMMM YYYY hh:mm a')}</td>
				<td>
					<button class="btn btn-morita btn-outline mitooltip btnMovilProductoEditar" id="${i}" data-toggle="tooltip" title="Cambiar precio"><i class="icofont icofont-edit"></i></button>
					<button class="btn btn-danger btn-outline mitooltip btnMovilProductoEliminar" id="${i}" data-toggle="tooltip" title="Eliminar"><i class="icofont icofont-error"></i></button>
				</td>
			</tr>`);

		});
		$('.mitooltip').tooltip();
	});
	
});

$('#divSelectGrupoProListado').on('click','.optProducto',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	cmbProductoListadoLlenar();
});
$('#divSelectLadoProListado').on('click','.optProducto',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	cmbProductoListadoLlenar();
});
$('#divSelectProductoListado').on('click','.optProducto',function () {
	var idProd=$(this).attr('data-tokens');
	var nomProd=$(this).text();
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	//cmbProductoListadoLlenar();
	if(idProd!=null){
		$('#tbodyRellenoHistorial').children().remove();
		$('#strProducto').text(nomProd);
		$.ajax({url:'php/listarHistorialProducto.php', type: 'POST', data:{idPro: idProd}}).done(function (resp) {
			//console.log(resp)
			$.each(JSON.parse(resp), function (i, dato) {
				$('#tbodyRellenoHistorial').append(`<tr><td>${moment(dato.histFechaCambio).format('LLLL')}</td>
								<td>${parseFloat(dato.histPrecioCambio).toFixed(2)}</td>
								<td>${parseFloat(dato.histPrecioAnterior).toFixed(2)}</td>
								<td class="mayuscula">${dato.responsable}</td>
							</tr>`);
			});
		});
		$('#pnlTablaModificacionPrecio').removeClass('hidden');
	}
});
function cmbProductoListadoLlenar(){
	$('#pnlTablaModificacionPrecio').addClass('hidden');
	$('#divSelectProductoListado option').remove();
	$('#divSelectProductoListado selectpicker').selectpicker('destroy');
	var grupo=$('#divSelectGrupoProListado').find('li.selected a').attr('data-tokens');
	var lado=$('#divSelectLadoProListado').find('li.selected a').attr('data-tokens');
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

$('#btnGuardarProdNuevo').click(function () {
	var valor=$('#spGrupoProducto').find('li.selected a').attr('data-tokens');
	if(valor=='null'){console.log('nada')}else{
		console.log(valor); //devuelve el id del campo seleccionado
	}
});
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	
var target = $(e.target).attr("href");
//console.log(target);
if(target=='#tabListarProd'){
	//$.queMichiEs='nada'; console.log('tabnada')
	
}
if(target=='#tabHistorialPrecios'){
	$('#divSelectGrupoProListado option').remove(); $('#divSelectGrupoProListado selectpicker').selectpicker('destroy');
	$('#divSelectLadoProListado option').remove(); $('#divSelectLadoProListado selectpicker').selectpicker('destroy');

	
	$.ajax({url:'php/listarGruposTodos.php', type: 'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato) {
			$('#divSelectGrupoProListado .selectpicker').append(`<option class="optProducto mayuscula" data-tokens="${dato.idGrupo}">${dato.grupoDescripcion}</option>`);
			$('#divSelectGrupoProListado .selectpicker').selectpicker('refresh');
		});
	});
	$.ajax({url:'php/listarLadosTodos.php', type: 'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato) {
			$('#divSelectLadoProListado .selectpicker').append(`<option class="optProducto mayuscula" data-tokens="${dato.idlado}">${dato.ladoDescripcion}</option>`);
			$('#divSelectLadoProListado .selectpicker').selectpicker('refresh');
		});
	});
	
}
});
$('#tbodyProductosListado').on('click', '.btnMovilProductoEditar', function () {
	idProdAlterno=$(this).attr('id');//id en el JSON solicitado por primera vez de la BD
	console.log('Intentando editar el id en Json interno:' + idProdAlterno +' ' +$.JsonProductosContenedor[idProdAlterno].contDescripcion);
	//console.log($.JsonProductos)
	$('#strModalProductoChange').text($.JsonProductosContenedor[idProdAlterno].contDescripcion);
	$('#idHideProdModalChange').text($.JsonProductosContenedor[idProdAlterno].idcontenedorProductos)
	$('.modal-editarProductoMod').modal('show');
});
$('.modal-editarProductoMod').on('shown.bs.modal', function() { $('#txtnewpriceProducto').focus(); });
$('#btnActualizarDataPrecioProducto').click(function () {
	if(! $('#btnActualizarDataPrecioProducto').hasClass('disabled')){
		$(this).addClass('disabled');
		
		var montoNuevo=parseInt($('#txtnewpriceProducto').val());
		//console.log($('#chkConfCambioPrecioProducto:checked').val()==null)
		if(isNaN(montoNuevo) || $('#txtnewpriceProducto').val()==''){$('.modal-editarProductoMod #lblFalta').removeClass('sr-only').find('span').text('Precio nuevo esta vacío!');}
		else if(montoNuevo<=0 ){$('.modal-editarProductoMod #lblFalta').removeClass('sr-only').find('span').text('Precio nuevo no puede cero o menor.');}
		else if ($('#chkConfCambioPrecioProducto:checked').val()==null){//console.log('no acepto los términos');
			$('.modal-editarProductoMod #lblFalta').removeClass('sr-only').find('span').text('Falta aceptar el contrato');}
		else{
			
				$('.modal-editarProductoMod #lblFalta').addClass('sr-only');}
				$.ajax({url:'php/updateProductoPrecioHistorial.php', type: 'POST',
					data:{idProd: $('#idHideProdModalChange').text(), newValue: $('#txtnewpriceProducto').val(), idUser: $.JsonUsuario.idUsuario }}).done(function (resp) {
						if(resp==1){
							location.reload();
						}else{
							$('.modal-editarProductoMod #lblFalta').removeClass('sr-only').find('span').text('Hubo un error interno, inténtelo más tarde.');
						}console.log(resp);
				});

	}/*else{
		console.log('ya tiene disabled no hace nada')
	}*/
});
</script>

</body>

</html>
