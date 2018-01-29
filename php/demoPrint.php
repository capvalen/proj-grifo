<?php 
unlink('impresion.txt');

$arch=fopen('impresion.txt', 'a') or die ('Error al crear archivo');

$texto=" ---------------------------------------------------------------------"."\r\n";
$texto.=" Producto                |  Precio  | Cta. Ant  | Cta. Nueva  |  Gls.  | SubTotal \r\n";
$texto.=$_POST['campo'];

fwrite($arch,$texto);
//fclose($arch);

echo "fin de guardado";

shell_exec('print.bat');

 ?>
