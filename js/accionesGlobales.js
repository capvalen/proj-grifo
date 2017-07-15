$(window).load(function() {
    $('.filter-option').addClass('mayuscula');
    $('.mitooltip').tooltip();
});

$('#aCreditoNuevo').click(function () {
	$('.modal-ingresarCredito').modal('show');
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