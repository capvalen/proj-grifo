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
	if($row['contStock']<=400){$campoAlerta='red-text text-darken-1';}else{$campoAlerta='blue-text text-accent-3';}
	echo '<div class="row '.$campoAlerta.'"><div class="col-xs-4 col-sm-offset-1"><h3 class=" ">'.$row['contDescripcion'].'</h3></div> <div class="col-xs-3"><h3><strong>'.number_format($row['contStock'],2,'.', ' ').' gls.</strong></h3></div> <div class="col-xs-3"><h3>S/. '.number_format($row['contPrecio'], 2,'.', ' ').'</h3></div></div>';
}
mysqli_close($conection); //desconectamos la base de datos

?>