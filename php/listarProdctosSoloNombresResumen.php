<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarProdctosSoloNombres();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

	echo '<div class="row">
		<div class="col-xs-4 divProducResumen mayuscula">'.$row['prodnombre'].'</div>
		<div class="col-xs-4"><span id="spanSumaFinalConsumo">0</span></div>
		<div class="col-xs-4">S/. <span id="spanSumaFinalMontos">0.00</span></div></div>';
}
mysqli_close($conection); //desconectamos la base de datos

?>