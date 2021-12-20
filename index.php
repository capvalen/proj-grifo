<?php
session_start();
if (isset($_SESSION['Atiende'])){
	header("Location:principal.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/icofont.css"> <!--Iconos en: https://design.google.com/icons/-->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/inicio.css?version=1.0.1" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<title>Bienvenido: Infocat-Grifo</title>
	<link rel="shortcut icon" href="images/peto.png" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->


</head>

<body >
<style type="text/css">
.wello.login-box legend{
padding-bottom: 1rem;}
label{
	color:#545454;
}
	body{background: linear-gradient(90deg, #100b19 10%, #291c40 90%);}
	.container{ margin-top:80px; padding:0 50px}
	.wello{padding:40px 50px; border-radius: 6px;}
	.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* Internet Explorer/Edge */
  user-select: none;           /* Non-prefixed version, currently
                                  not supported by any browser */
}
</style>
<div class="container noselect">
	<div class="row">
		<div class="col-md-12">
			<div class="wello login-box" style="color:#493267" >
			<center>
				<img src="https://infocatsoluciones.com/img/peto.png" style="max-width:100%;" />
			</center>
				<h2 class="text-center" style="font-family: 'Arial', cursive;">Infocat Soluciones</h2>
				<legend  style="color:#493267"><small style=" font-size: 80%; color:#545454">Sistema para grifos</small></legend>
				
			<div class="form-group">
				<label for="username"><i class="icofont icofont-user"></i> Usuario</label>
				<input class="form-control" value='' id="txtUser_grifo" placeholder="Ingrese su nombre de usuario" type="text"  />
			</div>
			<div class="form-group">
				<label for="password"><i class="icofont icofont-key"></i> Contraseña</label>
				<input class="form-control" id="txtPassw" value='' placeholder="Contraseña" type="password" />
			</div>
			
			<div class="form-group text-center">
				<button class="btn btn-morado btn-outline btn-block" id="btnAcceder"><div class="fa-spin sr-only"><i class="icofont icofont-spinner"></i> </div><i class="icofont icofont-key"></i> Iniciar</button>
			</div>
			<div class="form-group text-center text-danger hidden" id="divError">Error en alguno de los datos, complételos todos cuidadosamente.</div>
			
			<div class="row pull-right" ><small><?php include 'php/version.php' ?> | <?php echo date("Y"); ?> <a href="https://www.facebook.com/pg/infocat.soluciones/photos/?tab=album&album_id=2059119974302334">®  Infocat</a></small></div>
			</div>
		</div>
	</div>
</div>
</body>

	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- <script src="./node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script> 
	<script src="js/socketCliente.js"></script>-->
	<script>
		$(document).ready(function () {
			$('#txtUser_grifo').val('');
			$('#txtPassw').val('');
			$('#txtUser_grifo').focus();
			$('.wello').addClass('animated bounceIn');
			$('.fa-spin').addClass('sr-only');
			//$('body').css("background-image", "url(images/fondo.jpg)");		
		});
		$('#txtPassw').keypress(function(event){
			if (event.keyCode === 10 || event.keyCode === 13) 
				{event.preventDefault();
				$('#btnAcceder').click();
			 }
		});
		$('#btnAcceder').click(function() {
			$('.fa-spin').removeClass('sr-only');$('.icofont-key').addClass('sr-only');
			$.ajax({
				type:'POST',
				url: 'php/validarSesion.php',
				data: {user: $('#txtUser_grifo').val(), pws: $('#txtPassw').val()},
				success: function(iduser) { //console.log(iduser);
					if (iduser!=0){//console.log('el id es '+data)
						//console.log(iduser)
						window.location="principal.php";
					}
					else {
						$('#divError').removeClass('hidden');
						var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
						$('#btnAcceder').addClass('animated wobble' ).one(animationEnd, function() {
								$(this).removeClass('animated wobble');
						});
						$('#txtUser_grifo').select();
						$('.fa-spin').addClass('sr-only');$('.icofont-key').removeClass('sr-only');
						
						console.log('error en los datos')}
				}
			});
		});
		
	</script>

</html>