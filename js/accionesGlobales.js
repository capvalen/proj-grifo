$(window).load(function() {
    $('.filter-option').addClass('mayuscula');
});

$('#aCreditoNuevo').click(function () {
	$('.modal-editarDatosUsuarios').modal('show');
});
$('.modal-editarDatosUsuarios').on('shown.bs.modal', function() {
	$('#txtUsDNI').focus();
})