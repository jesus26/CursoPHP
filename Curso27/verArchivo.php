<?php 
//Para guardar en una carpeta especifica
$carpeta = "img/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
	copy($_FILES['foto']['tmp_name'], $destino);
	//Parametros, archivo, nombre
	//copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
	echo "Archivo subido bien";

	//Esta linea guarda el archivo en la carpeta del archivo la página
	/*$nombre = $_FILES['foto']['name'];
	echo "<img src=\"$nombre\" />";*/

	//Imprimiendo archivo desde carpeta
	$nombre = $_FILES['foto']['name'];
	echo "<img src=\"img/$nombre\" /><br/>";
	echo $_FILES['foto']['name']."<br/>";
	echo $_FILES['foto']['size']."<br/>";
	echo $_FILES['foto']['type'];

?>