<?php 
	include 'conexion.php';

	$con = mysql_connect($host, $user, $pass) or die("Problemas al conecar");
	//Conectar base de datos
	mysql_select_db($db, $con) or die("Problemas al conectar la base de datos");

	//Realizar consultas
	$registro = mysql_query("SELECT * FROM codigo WHERE name='$_POST[name]'", $con) or die("Problemas para obtener los datos".mysql_error());

	//Recorrer la lista que regresa
while($reg =  mysql_fetch_array($registro)){
	echo $reg['name']."<br/>";
	echo $reg['password']."<br/><br/>";
}

?>