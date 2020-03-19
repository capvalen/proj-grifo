<?php
	$server="localhost";
	$username="root";
	$password="";
	$db='grifo';

	$conection= mysqli_connect($server,$username,$password,$db )or die("No se ha podido establecer la conexion");
	$sdb= mysqli_select_db($conection,$db)or die("La base de datos no existe");
	$conection->set_charset("utf8");
	
?>