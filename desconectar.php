<?php
session_start();
session_destroy();
if ($_SESSION['idUsuario']) {
	
	header("location:index.php");
}else{
	header("location:index.php");
}
?>