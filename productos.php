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
		<link href="css/estilosElementosv2.css?version=1.0.1" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
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
						<a href="ventas.php"><i class="icofont icofont-cart"></i> Cuadrar caja</a>
				</li>
				<li>
						<a href="compras.php"><i class="icofont icofont-truck-alt"></i> Crédito nuevo</a>
				</li>
				<li>
						<a href="reportes.php"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
				</li>
				<li >
						<a href="inventario.php"><i class="icofont icofont-ui-rate-add"></i> Ingreso extra</a>
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
								 <li id="liDatosPersonales"><a href="#!"><p><strong>Usuario: </strong> <span id="menuNombreUsuario">Carlos Pariona</span></p><small class="text-muted text-center" id="menuFecha"><span id="fechaServer"></span> <span id="horaServer"><?php require('php/gethora.php') ?></span> </small></a></li>
									
				<li class="text-center"><a href="#!"><span class="visible-xs">Cerrar Sesión</span><i class="icofont icofont-sign-out"></i></a></li>
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
						<div class="panel panel-negro ">
						<div class="panel-heading">
							<h3 class="panel-title">Productos activos</h3>
							
						</div>
						<div class="container-fluid">
						<table class="table table-hover">
						<thead>
							<tr class="filters">
								<th>N° Producto</th>
								<th>Precio S/.</th>
								<th>Última actualización</th>
								<th>Grupo</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>1. Gasolina 94</strong></td>
								<td>14.50</td>
								<td>Lunes, 24 Mayo 2017</td>
								<td>Grupo 1</td>
								<td>
									<button class="btn btn-morita btn-outline mitooltip" data-toggle="tooltip" title="Editar"><i class="icofont icofont-edit"></i></button>
									<button class="btn btn-danger btn-outline mitooltip" data-toggle="tooltip" title="Eliminar"><i class="icofont icofont-error"></i></button>
								</td>
							</tr>
							<tr>
								<td><strong>2. Gas</strong></td>
								<td>3.80</td>
								<td>Sábado, 14 Junio 2017</td>
								<td>Grupo 1</td>
								<td>
									<button class="btn btn-morita btn-outline mitooltip" data-toggle="tooltip" title="Editar"><i class="icofont icofont-edit"></i></button>
									<button class="btn btn-danger btn-outline mitooltip" data-toggle="tooltip" title="Eliminar"><i class="icofont icofont-error"></i></button>
								</td>
							</tr>
							<tr>
								<td><strong>3. Kerosene</strong></td>
								<td>9.80</td>
								<td>Viernes, 11 Agosto 2016</td>
								<td>Grupo 2</td>
								<td>
									<button class="btn btn-morita btn-outline mitooltip" data-toggle="tooltip" title="Editar"><i class="icofont icofont-edit"></i></button>
									<button class="btn btn-danger btn-outline mitooltip" data-toggle="tooltip" title="Eliminar"><i class="icofont icofont-error"></i></button>
								</td>
							</tr>
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
						<div class="col-sm-3">
						<div  id="divSelectProductoListado">
							<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true"">
								<option class="optProducto mayuscula" data-tokens="aa">gas</option>
								<option class="optProducto mayuscula" data-tokens="bb">Gasolina 84</option>
								<option class="optProducto mayuscula" data-tokens="cc">Kerosene</option>
							</select>
						</div>
						</div>

						<div class="col-sm-12">
						<hr>
						<div class="panel panel-verde hidden" id="pnlTablaModificacionPrecio">
						<div class="panel-heading">
							<h3 class="panel-title">Listado de cambios para: <strong>Gas</strong></h3>
						</div>
						<div class="container-fluid">
						<table class="table table-hover">
						<thead>
							<tr class="filters">
								<th>Fecha modificación</th>
								<th>Precio S/.</th>
								<th>Responsable</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lunes, 24 Mayo 2018</td>
								<td>14.50</td>
								<td>Carlos Alex</td>
							</tr>
							<tr>
								<td>Sábado, 14 Junio 2017</td>
								<td>13.80</td>
								<td>Rebeca</td>
							</tr>
							<tr>
								<td>Viernes, 11 Agosto 2016</td>
								<td>15.10</td>
								<td>Manuel Angel</td>
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

<!-- Modal para indicar que falta completar campos o datos con error -->
	<div class="modal fade modal-mostrarDetalleInventario" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header-info">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Detalles del inventario: <span id="spanIdInventario"></span></h4>
			</div>
			<div class="modal-body">
				<div class="row container"> <strong>
					<div class="col-xs-4">Producto</div>
					<div class="col-xs-1">Cantidad</div>
					<div class="col-xs-2">Precio</div>
					<div class="col-xs-2">Sub-Total</div></strong>
				</div>
				<div class="row container" id="detProductoInv">
					
				</div>
				<div class="row container-fluid text-right" style="padding-right: 100px"><strong>Total valorizado:</strong> <span id="spanvalorInvent">S/. 3.00</span></div>
			</div>
			<div class="modal-footer"> <button class="btn btn-primary btn-outline" data-dismiss="modal"><i class="icofont icofont-alarm"></i> Aceptar</button></div>
		</div>
		</div>
	</div>

		
<!-- Modal para indicar que falta completar campos o datos con error -->
	<div class="modal fade modal-faltaCompletar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header-danger">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Campos incorrectos o faltantes</h4>
			</div>
			<div class="modal-body">
				Ups, un error: <i class="icofont icofont-animal-squirrel"></i> <strong id="lblFalta"></strong>
			</div>
			<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-alarm"></i> Ok, revisaré</button></div>
		</div>
		</div>
	</div>

	
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
	$('.mitooltip').tooltip();
	var existeProd= <?php if (isset( $_GET['idproducto'])){echo $_GET['idproducto']; } else { echo 0;} ?>;
	
	if(existeProd==0){console.log('No hay ningún producto')}
	else{}
	
});
$('#divSelectProductoListado').on('click','.optProducto',function () {
	console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('.filter-option').addClass('mayuscula'); //Asigna mayúscula al boton de filtro
	$('#pnlTablaModificacionPrecio').removeClass('hidden');
});

$('#btnGuardarProdNuevo').click(function () {
	var valor=$('#spGrupoProducto').find('li.selected a').attr('data-tokens');
	if(valor=='null'){console.log('nada')}else{
		console.log(valor); //devuelve el id del campo seleccionado
	}
	
});
</script>

</body>

</html>
