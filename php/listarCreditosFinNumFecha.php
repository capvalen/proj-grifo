<?php 
require("conectkarl.php");

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$sql = mysqli_query($conection,"call listarCreditosFinNumFecha();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

	echo '<option class="optCreditoFin mayuscula" data-tokens="'.$row['ano'].'/'.$row['mes'].'">'.$row['ano'].' '.$meses[$row['mes']-1].' ('.$row['total'].')</option>';
}
mysqli_close($conection); //desconectamos la base de datos

?>