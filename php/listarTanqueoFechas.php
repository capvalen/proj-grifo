<?php 
require("conectkarl.php");

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$sql = mysqli_query($conection,"call listarTanqueoFechas();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	if($row['mes']<10){ $mes='0'.$row['mes'];}else{$mes=$row['mes'];}
	echo '<option class="optTanqueoFecha mayuscula" data-tokens="'.$row['ano'].'/'.$mes.'">'.$row['ano'].' '.$meses[$row['mes']-1].'</option>';
}
mysqli_close($conection); //desconectamos la base de datos

?>