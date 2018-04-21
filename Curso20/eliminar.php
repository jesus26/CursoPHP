<?php 
	include 'conexion.php';

	$con = mysql_connect($host, $user, $pass) or die("Problemas al conecar");
	//Conectar base de datos
	mysql_select_db($db, $con) or die("Problemas al conectar la base de datos");

	//Realizar consultas
	$registro = mysql_query("SELECT id FROM codigo WHERE name='$_POST[name]'", $con) or die("Problemas para obtener los datos".mysql_error());

	if($reg = mysql_fetch_array($registro)){
		mysql_query("DELETE FROM codigo WHERE name='$_POST[name]'", $con) or die("Problemas para obtener los datos".mysql_error());
		echo "Datos eliminados";
	}else{
		echo "Los datos no se han encontrado";
	}

?>