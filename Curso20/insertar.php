<?php 
	include 'conexion.php';
	//Comprobar que se envien los datos
	if(isset($_POST['name']) && !empty($_POST['name']) &&
		isset($_POST['pass']) && !empty($_POST['pass'])){
		//Conectar a base de datos, en otro archivo
		//Conectar con el servidor
		$con = mysql_connect($host, $user, $pass) or die("Problemas al conecar");
	//Conectar base de datos
	mysql_select_db($db, $con) or die("Problemas al conectar la base de datos");

	//Realizar consultas
	mysql_query("INSERT INTO codigo (name, password) VALUES ('$_POST[name]','$_POST[pass]')",$con);
	echo "Datos insertados";
	}else{
		echo "Problemas al insertar datos";
	}
?>