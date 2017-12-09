<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");


$sql= "call insertarCuadreCajaDetalleGas (".$_POST['idVent'].",".$_POST['idPro'].",".$_POST['cant']." ,".$_POST['idCont'].", ".$_POST['contador']." )";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas simple sin respuesta

	/* liberar el conjunto de resultados */
	$llamadoSQL->close();
}else{echo '0';}



?>