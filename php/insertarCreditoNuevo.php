<?php 
session_start();
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

$idCli=0; $idCredito=0;
if( $_POST['idCli']==0 ){ //Primero guardar cliente luego guardar el crédito nuevo
	
	$sql= "call insertarClienteNuevo ('".$_POST['dni']."','".$_POST['social']."','".$_POST['direccion']."', '".$_POST['celular']."' );";

	$stmt = $conection->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_array(MYSQLI_NUM))
	{
		$idCli=$row[0];
	}
	$stmt->fetch();

	$stmt->close();
	
	$sql2= "call insertarCreditoNuevo (".$idCli.",".$_POST['idProductoCont'].",".$_POST['cantidad'].", '".$_POST['comprobante']."', ".$_POST['idUser'].");";

	$stmt2 = $conection->prepare($sql2);
	$stmt2->execute();
	$result2 = $stmt2->get_result();
	while ($row2 = $result2->fetch_array(MYSQLI_NUM))
	{
		echo $row2[0];
	}
	$stmt2->fetch();

	$stmt2->close();

}else{ // Guardar directo el crédito porque ya existe usuario

	$sql3= "call insertarCreditoNuevo (".$_POST['idCli'].",".$_POST['idProductoCont'].",".$_POST['cantidad'].", '".$_POST['comprobante']."', ".$_POST['idUser'].");";

	$stmt3 = $conection->prepare($sql3);
	$stmt3->execute();
	$result3 = $stmt3->get_result();
	while ($row3 = $result3->fetch_array(MYSQLI_NUM))
	{
		echo $row3[0];
	}
	$stmt3->fetch();

	$stmt3->close();

}



?>