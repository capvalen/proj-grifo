<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarTodosUsuarios();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<option class="optProducto" data-tokens="'.$row['idUsuario'].'">'.$row['usuNombres'].'</option>';
}
mysqli_close($conection); //desconectamos la base de datos

?>