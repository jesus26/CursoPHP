<?php
	//este es un comentario de una sola línea

	/*
	comentario 
	de 
	varias
	líneas
	*/

	/*
	variable: espacio en la memoria del ordenador que puede cambiar de valor durante la ejecución de la aplicación.
	*/

	/*
	declaración de variables, no se declara tipo, PHP lo detecta al asignar un valor
	el nombre siempre debe iniciar con el simbolo de dollar*/
	$numero = 4;
	$texto = "Esto es una cadena de texto (string)";
	$boolean = true;

	//El punto (.) se utiliza para concatenar un string con otros valores.
	echo "Este es un valor numerico " . $numero;
	echo "<br/>" . $texto;
	echo "<br/>este es un valor booleano: " . $boolean . "<br/>";

	//EL nombre de las variables puede ir dentro de las comillas(solo dobles) del mensaje concatenado
	echo "Este es un valor numerico $numero";
?>