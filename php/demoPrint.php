<?php 
header('Content-Type: text/html; charset=utf8');
unlink('impresion.txt');

$arch=fopen('impresion.txt', 'a') or die ('Error al crear archivo');



$texto=" -> Cuadre de: ".$_POST['responsable']."  ".$_POST['fecha']." \r\n";
$texto.=" ---------------------------------------------------------------------"."\r\n";
$texto.=" Producto                  |  Precio  | Cta. Ant   | Cta. Nueva  |  Gls.  | SubTotal \r\n";
$texto.=$_POST['campo'];
$texto.="\r\n";
$texto.= ucwords($_POST['pcreditos']);
$texto.="\r\n";
$texto.=" ---------------------------------------------------------------------"."\r\n";
$texto.=" |   Resumen de Caja:                                                |"."\r\n";
$texto.="   Ingresos: S/.  ".$_POST['ingreso']."                Egresos S/.  ".$_POST['egreso'].""."\r\n";
$texto.="   Venta: S/.   ".$_POST['venta']."               Creditos S/.  ".$_POST['creditos'].""."\r\n";
$texto.="                     Total: S/. ".$_POST['total'].""."\r\n";


fwrite($arch,$texto);
//fclose($arch);

echo "fin de guardado txt";

 shell_exec('print.bat');

 ?>
