<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

$sql= "call updateCreditoPorId (".$_POST['idCred'].",".$_POST['idUser'].",".$_POST['monto'].",'".$_POST['fecha']."',".$_POST['idProd'].",'".$_POST['comprob']."',".$_POST['canti'].",".$_POST['idCli']." )";
//echo $sql;
if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	//echo json_encode(mysqli_fetch_array($llamadoSQL, MYSQL_ASSOC)); //sólo retorna los datos.
	echo 1;


}else{echo null;}

 ?>