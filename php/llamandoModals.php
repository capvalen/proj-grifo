<!-- Modal para ingresar Credito de productos  -->
<div class="modal fade modal-ingresarCredito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header-indigo">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar crédito nuevo</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4">
						<label for="txtModCreditoDnioRUC">D.N.I.</label>  <span class="red-text text-darken-2">*</span> <span class="sr-only" id="spanIdCredClienteExiste"></span>
						<input type="number" class="form-control mayuscula" id="txtModCreditoDnioRUC">
				</div>
				<div class="col-xs-8">
						<label id="lblNombresORazon" for="txtModCreditoRazonSocial">Nombres y Apellidos:</label> <span class="red-text text-darken-2">*</span>
						<input type="text" class="form-control mayuscula" id="txtModCreditoRazonSocial">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
						<label for="txtModCreditoCelular">Teléfono/ Celular:</label>
						<input type="number" class="form-control mayuscula" id="txtModCreditoCelular">
				</div>
				<div class="col-xs-8">
						<label for="txtModCreditoDireccion">Dirección:</label>
						<input type="text" class="form-control mayuscula" id="txtModCreditoDireccion">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<label for="txtModCreditoComprobante">N° de Comprobante:</label>
					<input type="text" class="form-control mayuscula" id="txtModCreditoComprobante">
				</div>
				<div class="col-xs-8">
					<label for="">Producto concedido a crédito:</label> <span class="red-text text-darken-2">*</span>
					<div  id="divSelectModCreditoProducto">
						<select class="selectpicker mayuscula slpProductos" title="Producto..."  data-width="100%" data-live-search="true">
							<?php require 'listarProductosNombresOption.php'; ?>
						</select>
					</div>
				</div>
				
			</div>


			<div class="row">
				<div class="col-xs-6">
					<label for="txtModCreditoCantidad">Cantidad de galones:</label>  <span class="red-text text-darken-2">*</span>
					<input type="number" class="form-control mayuscula text-center" id="txtModCreditoCantidad" value="0" step="1" min="1">
				</div>
				<div class="col-xs-6 hidden">
					<label for="txtModCreditoCantidadLitro">Cantidad de litros:</label>  <span class="red-text text-darken-2">*</span>
					<input type="number" class="form-control mayuscula text-center" id="txtModCreditoCantidadLitro" value="0" step="1" min="1">
				</div>
				<div class="col-xs-6">
					<label for="txtModCreditoCantidadSoles">Cantidad de soles:</label>  <span class="red-text text-darken-2">*</span>
					<input type="number" class="form-control mayuscula text-center" id="txtModCreditoCantidadSoles" value="0" step="1" min="1">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="row blue-text text-accent-3" style="padding-top: 0;">
						<label for="">Precio por galón S/.</label>
						<strong><span  id="spanModCreditoPrecioProd">0.00</span></strong>
					</div>
					<div class="row blue-text text-accent-3" style="padding-top: 0;">
						<label for="">Total de crédito concedido S/.</label>
						<strong><span  id="spanModCreditoTotal">0.00</span></strong>
					</div>
					<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
				</div>
			</div>

			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-indigo btn-outline" id="btnIngresarCreditoModal"><i class="icofont icofont-social-meetme"></i> Ingresar crédito</button></div>
	</div>
	</div>
</div>

<!-- Modal para ingresar egreso de dinero  -->
<div class="modal fade modal-ingresarGastoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar gasto inesperado</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Razón del gasto</label>
				<input type="text" class="form-control mayuscula" id="txtRazonGasto" >
			</div>
			<div class="row">
				<label for="">Monto que se gastó (S/.)</label>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtModalGastoMonto" step="1" min="0" value="0.00">
				<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-warning btn-outline" id="btnIngresarGasto"><i class="icofont icofont-social-meetme"></i> Ingresar gasto</button></div>
	</div>
	</div>
</div>

<!-- Modal para ingresar ingreso de dinero  -->
<div class="modal fade modal-ingresarMontoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar un monto extra</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Razón del monto ingresado</label>
				<input type="text" class="form-control mayuscula" id="txtRazonIngreso" >
			</div>
			<div class="row">
				<label for="">Monto que entra a caja (S/.)</label>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtModalIngresoMonto" step="1" min="0" value="0.00">
				<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-success btn-outline" id="btnIngresarIngresoExtra"><i class="icofont icofont-social-meetme"></i> Ingresar ingreso</button></div>
	</div>
	</div>
</div>


<!-- Modal para ingresar ingreso de tanqueo  -->
<div class="modal fade modal-ingresarTanque" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-indigo">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Tanquear nuevo producto</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			
			<div class="row">
				<label for="">Seleccione un producto para agregar stock:</label> <span class="red-text text-darken-2">*</span>
				<div  id="divSelectModTanqueProducto">
					<select class="selectpicker mayuscula slpProductos" title="Producto..."  data-width="100%" data-live-search="true">
						<?php require 'listarProductosNombresOption.php'; ?>
					</select>
				</div>
			</div>
			<div class="row">
				<label for="">Cantidad de galones:</label>  <span class="red-text text-darken-2">*</span>
				<input type="number" class="form-control mayuscula text-center" id="txtModTanqueCantidad" value="0" step="1" min="1">
			</div>

			<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-indigo btn-outline" id="btnIngresarTanqueModal"><i class="icofont icofont-social-meetme"></i> Agregar a depósito</button></div>
	</div>
	</div>
</div>

<!-- Modal para decir que todo fue guardado correctamente  -->
<div class="modal fade modal-GuardadoExito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Dato guardado con éxito</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p><strong>Guardado!</strong> tu información fue guardada con éxito: <span class="mayuscula" id="spanExito"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-success btn-outline" data-dismiss="modal" ><i class="icofont icofont-social-meetme"></i> Aceptar</button>
		</div>
	</div>
	</div>
</div>
</div>

<!-- Modal para decir que hubo un error  -->
<div class="modal fade modal-GuardadoError" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> No se guardó</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p><strong>Error!</strong> Lo sentimos, hubo un error en la conexión o con el servidor tiene problemas. Comuníquelo por favor o inténtelo más tarde. <span id="spanMalo"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-warning-alt"></i> Ok</button>
		</div>
	</div>
	</div>
</div>
</div>