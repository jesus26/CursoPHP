<?php
	$file = fopen("archivo.txt", "r")
	or die("Error al abrir el archivo");

	while(!feof($file)){ //La sentencia feof permite saber cuando el puntero llegue al final del archivo de texto
		$traer = fgets($file);
		$salto = nl2br($traer); //Esta instruccion es para leer saltos de linea
		echo $salto;
	}
?>