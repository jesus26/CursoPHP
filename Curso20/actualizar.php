<?php 
	include 'conexion.php';

	$con = mysql_connect($host, $user, $pass) or die("Problemas al conecar");
	//Conectar base de datos
	mysql_select_db($db, $con) or die("Problemas al conectar la base de datos");

	//Realizar consultas
	$registro = mysql_query("UPDATE codigo SET name='$_POST[nuevo]' WHERE name='$_POST[viejo]'", $con) or die("Problemas para obtener los datos".mysql_error());

	echo "Actualizacion correctamente";

?>