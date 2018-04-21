<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Flujo de ejecución</title>
</head>
<body>
	<!-- Se puede tener mas de un bloque de php en un documento html-->
	<?php
		//Aqí creamos una función
		function dameDatos(){
			echo "Este mensaje está en el interios de la funcion <br>";
		}
	?>
	<?php 
		//Una variable es un espacio en la memoria del ordenador que puede cambiar conforme la ejecucion del programa avance.
		echo "Este es el primer mensaje <br>";
		
		echo "Este es el segundo mensaje <br>";

		//La principal utilizacion es el reuso de código.
		dameDatos();
		dameDatos();
		dameDatos();
		//Se puede tener la funcion en otro documento y llamarse desde este documento, pero se necesita incluir el
		//Archivo con la instrucción include("nombreDelArchivoConFuncion.php").

		/*Hay otra función como include, esta es require, con la funcion include, el documento se ejecuta
		aunque no encuentre el archivo de referencia, en cambio con require si no se encuantra el archivo
		de referencio no se ejecuta el codigo después de la llmada*/

		/*
		Para utilizar una variable glocal se debe declarar como globar nombreVariable, pero esto debe ir dentro
		de la función donde queremos utilizar la variable.
		*/

		/*
		Cada vez que una funcion termina de ejecutarse sus variables internas de destruyen, para que no suceda esto
		y podamos mantener determinados valores podemos utilizar variables estaticas p. static variableName.

		la linea de una variable statica solo se ejecuta una única vez.
		*/
	?>

</body>
</html>