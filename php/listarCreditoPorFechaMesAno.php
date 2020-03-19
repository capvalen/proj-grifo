<?php 
require("conectkarl.php");

$filas=array();
//echo "call listarCreditoPorFechaMesAno(".$_POST['mes'].", ".$_POST['anio'].");";
$sql = mysqli_query($conection,"call listarCreditoPorFechaMesAno(".$_POST['mes'].", ".$_POST['anio'].");");
$i=0;


	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$filas[$i]= $row;
		$i++;
	}

mysqli_close($conection); //desconectamos la base de datos
echo json_encode($filas);
?>