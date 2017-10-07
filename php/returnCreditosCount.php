<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"select returnCreditosCount();");

while($row = mysqli_fetch_array($sql))
{
echo $row[0];
	
}
mysqli_close($conection); //desconectamos la base de datos

?>