<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarCreditosFaltaACliente();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

	echo "<option class='optCreditoCliente mayuscula' data-tokens='{$row['idcliente']}'>{$row['cliRuc']} - {$row['cliRazonSocial']} ({$row['total']})</option>";
}
mysqli_close($conection); //desconectamos la base de datos

?>