$(window).load(function() {
    $('.filter-option').addClass('mayuscula');
    $('.mitooltip').tooltip();
});

$('#aCreditoNuevo').click(function () {
	//Solicitar lista de precios actualizado
	$.ajax({url: 'php/listarPreciosContenedor.php', type: 'POST'}).done(function (resp) {
		$.JsonListaPreciosActualizada=JSON.parse(resp);
		$('.modal-ingresarCredito').modal('show');
	});
	
});
$('.modal-ingresarCredito').on('shown.bs.modal', function() {
	$('#txtUsDNI').focus();
});
$('#aGastoExtra').click(function () {
	$('.modal-ingresarGastoExtra').modal('show');
});
$('.modal-ingresarGastoExtra').on('shown.bs.modal', function() {
	$('#txtRazonGasto').focus();
});
$('#aIngresoExtra').click(function () {
	$('.modal-ingresarMontoExtra').modal('show');
});
$('.modal-ingresarMontoExtra').on('shown.bs.modal', function() {
	$('#txtRazonIngreso').focus();
});



/************ JS para Modals ***********/

$('#txtModCreditoCantidad').change(function () {
	cambioModalCmbPrecio();
});

$('.modal-ingresarCredito').on('click','.optProducto',function () {
	 cambioModalCmbPrecio();
});
function cambioModalCmbPrecio() {
var idProd=$('#divSelectModCreditoProducto').find('.selected a').attr('data-tokens');
for (var i = 0; i < $.JsonListaPreciosActualizada.length; i++) {
	//console.log($.JsonListaPreciosActualizada[i])
	if($.JsonListaPreciosActualizada[i].idcontenedorProductos==idProd){
		var precio=$.JsonListaPreciosActualizada[i].contPrecio;
		var cant=$('#txtModCreditoCantidad').val();
		$('#spanModCreditoPrecioProd').text(parseFloat(precio).toFixed(2));
		$('#spanModCreditoTotal').text(parseFloat(precio*cant).toFixed(2));
		break;
	}
}
}