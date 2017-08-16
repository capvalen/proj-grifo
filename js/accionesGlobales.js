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
$('#txtModCreditoDnioRUC').focusout(function () { console.log('aca')
	if($('#txtModCreditoDnioRUC').val().length==8){
		$('#txtModCreditoDnioRUC').prev().prev().text('D.N.I:');
		$('#lblNombresORazon').text('Nombres y Apellidos:');}
	if($('#txtModCreditoDnioRUC').val().length>8){
		$('#txtModCreditoDnioRUC').prev().prev().text('R.U.C.:');
		$('#lblNombresORazon').text('Razon Social:');}
});
$('#btnIngresarCreditoModal').click(function () {
	//, txtModCreditoRazonSocial, txtModCreditoComprobante, txtModCreditoCantidad
	var spanError=$('.modal-ingresarCredito #spanError');
	var valor=$('#divSelectModCreditoProducto').find('li.selected a').attr('data-tokens');

	if($('#txtModCreditoDnioRUC').val()==''){spanError.text('No puedes dejar el campo de DNI o RUC en blanco.'); spanError.parent().removeClass('sr-only');}
	else if($('#txtModCreditoDnioRUC').val().length<8){spanError.text('Es un DNI inválido, revísalo por favor.'); spanError.parent().removeClass('sr-only');}
	else if($('#txtModCreditoRazonSocial').val()==''){spanError.text('No puedes dejar el campo de Razón social o Apellidos en blanco.'); spanError.parent().removeClass('sr-only');}
	else if($('#txtModCreditoCantidad').val()<=0){spanError.text('No puedes guardar cantidades en cero o menores'); spanError.parent().removeClass('sr-only');}
	else if( isNaN(valor) || valor==null ){ spanError.text('Falta seleccionar un producto para el crédito'); spanError.parent().removeClass('sr-only'); }
	else{
		spanError.parent().addClass('sr-only');
		// $.ajax({url: '', type: 'POST', data: {} }).done(function (resp) {
		// 	// body...
		// });
	}

	
	
});