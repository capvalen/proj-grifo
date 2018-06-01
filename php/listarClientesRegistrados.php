<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarClientesRegistrados();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

	echo "<option class='optClienteReg mayuscula' data-tokens='{$row['idCliente']}'> {$row['cliRazonSocial']} - {$row['cliRUC']}</option>";
}
mysqli_close($conection); //desconectamos la base de datos

?>