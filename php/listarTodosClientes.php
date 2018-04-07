<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarTodosClientes();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<option class="optProducto" data-tokens="'.$row['idCliente'].'">'.$row['cliRazonSocial'].'</option>';
}
mysqli_close($conection); //desconectamos la base de datos

?>