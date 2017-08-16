<!-- Modal para ingresar Credito de productos  -->
<div class="modal fade modal-ingresarCredito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-indigo">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar crédito nuevo</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">D.N.I.</label>  <span class="red-text text-darken-2">*</span>
				<input type="number" class="form-control mayuscula" id="txtModCreditoDnioRUC">
			</div>
			<div class="row">
				<label id="lblNombresORazon" for="">Nombres y Apellidos:</label> <span class="red-text text-darken-2">*</span>
				<input type="text" class="form-control mayuscula" id="txtModCreditoRazonSocial">
			</div>
			<div class="row">
				<label for="">Comprobante:</label>
				<input type="text" class="form-control mayuscula" id="txtModCreditoComprobante">
			</div>
			<div class="row">
				<label for="">Cantidad de galones:</label>  <span class="red-text text-darken-2">*</span>
				<input type="number" class="form-control mayuscula text-center" id="txtModCreditoCantidad" value="0" step="1" min="1">
			</div>
			<div class="row">
				<label for="">Producto concedido a crédito:</label> <span class="red-text text-darken-2">*</span>
				<div  id="divSelectModCreditoProducto">
					<select class="selectpicker mayuscula slpProductos" title="Producto..."  data-width="100%" data-live-search="true">
						<?php require 'listarProductosNombresOption.php'; ?>
					</select>
				</div>
			</div>
			
			<div class="row blue-text text-accent-3">
				<label for="">Precio por galón S/.</label>
				<strong><span  id="spanModCreditoPrecioProd">0.00</span></strong>
			</div>
			<div class="row blue-text text-accent-3">
				<label for="">Total de crédito concedido S/.</label>
				<strong><span  id="spanModCreditoTotal">0.00</span></strong>
			</div>
			<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span id="spanError">Hubo un error interno</span></h4>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-morita btn-outline" id="btnIngresarCreditoModal"><i class="icofont icofont-social-meetme"></i> Ingresar crédito</button></div>
	</div>
	</div>
</div>

<!-- Modal para ingresar egreso de dinero  -->
<div class="modal fade modal-ingresarGastoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar gasto inesperado</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="alert alert-danger hidden">
				<strong>Ups!</strong> <span class="spanError"></span>
			</div>
			<div class="row">
				<label for="">Razón del gasto</label> <span class="sr-only" id="userModalId"></span>
				<input type="text" class="form-control" id="txtRazonGasto" >
			</div>
			<div class="row">
				<label for="">Monto que se gastó (S/.)</label> <span class="sr-only" id="userModalId"></span>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtUsapellido" step="1" min="0" value="0.00">
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-morita btn-outline" id="btnActualizarDataUser"><i class="icofont icofont-social-meetme"></i> Ingresar gasto</button></div>
	</div>
	</div>
</div>

<!-- Modal para ingresar ingreso de dinero  -->
<div class="modal fade modal-ingresarMontoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingreso extra</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="alert alert-danger hidden">
				<strong>Ups!</strong> <span class="spanError"></span>
			</div>
			<div class="row">
				<label for="">Razón del monto ingresado</label> <span class="sr-only" id="userModalId"></span>
				<input type="text" class="form-control" id="txtRazonIngreso" >
			</div>
			<div class="row">
				<label for="">Monto que entra a caja (S/.)</label> <span class="sr-only" id="userModalId"></span>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtUsapellido" step="1" min="0" value="0.00">
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-morita btn-outline" id="btnActualizarDataUser"><i class="icofont icofont-social-meetme"></i> Ingresar gasto</button></div>
	</div>
	</div>
</div>

