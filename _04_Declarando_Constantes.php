<?php 
	//Se utiliza la palabra define para definir constantes, esto en forma de clave-valor
	define("saludo", "Hola como estás");
	define("nombre", "Jesus");
	define("edad", 21);

	//No se requiere símbolo para llamar constantes y se llama la clave;
	//Se concatena con el punto.
	echo saludo . " " . nombre . "?, aún tienes " . edad . " años";
?>