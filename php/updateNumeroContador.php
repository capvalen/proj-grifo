<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

$sql= "call updateNumeroContador (".$_POST['numeroCambio'].",".$_POST['idConte'].",".$_POST['diferencia'].",".$_POST['idProd'].",".$_POST['idUser'].",".$_POST['numeroAnt']." )";
echo $sql;
if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	//echo json_encode(mysqli_fetch_array($llamadoSQL, MYSQL_ASSOC)); //sólo retorna los datos.
	echo 1;

}else{echo null;}

 ?>