<?php 
	$filename = $_REQUEST['archivo'];
	//echo $filename;
	unlink($filename);
	echo "El archivo ha sido eliminado con exito";
?>