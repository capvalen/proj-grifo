<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarProductosContenedor();");
$i=0;
// if (!$sql) { ////codigo para ver donde esta el error
//     printf("Error: %s\n", mysqli_error($conection));
//     exit();
// }

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$i++;
	echo '<tr  class="'.$row['contColorMaterialize'].'">
				<td><strong>'.$row['contDescripcion'].'</strong></td>
				<td>'.number_format($row['contPrecio'], 2).'</td>
				<td class="fecha">'.$row['contUltimaFecha'].'</td>
			</tr>';
}
mysqli_close($conection); //desconectamos la base de datos

?>