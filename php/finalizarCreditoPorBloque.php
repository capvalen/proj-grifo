<?php 
ob_start();
try {
	foreach($_POST['lista'] as $item){
		$_POST['idCred']= $item;
		require('./finalizarCreditoPorId.php');
	}
} catch (\Throwable $th) {
	echo "error"; die();
}
ob_end_clean();

echo "ok";

?>