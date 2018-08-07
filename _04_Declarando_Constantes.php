<?php 
	
	/*
	Una constante es un espacio en la memoria del ordenador cuyo valor no cambiará.
	- una constante siempre va en mayusculas.
	- su hambito siempre es global.
	- no llevan el simbolo $
	- siempre se definen con la función define().
	- solo pueden almacenar valores escalares (que se pueden dividir en valores más pequeños, un array no).
	
	EJEMPLO:
	define("CONSTANTE","Valor de constante",[true or false]); el tercer parametro no es obligatorio solo es
	para especificar la sencibilidad de la declaración de la constante cuando sea llamada.

	leer constantes predefinidas por PHP, por ejemplo __LINE__, __FILE__
	*/


	//Se utiliza la palabra define para definir constantes, esto en forma de clave-valor
	define("SALUDO", "Hola como estás");	//Si se agrega true, se podrá llamar en minusculas o mayusculas, no recomendable
	define("NOMBRE", "Jesus");
	define("EDAD", 22);

	//No se requiere símbolo para llamar constantes y se llama la clave;
	//Se concatena con el punto.
	echo SALUDO . " " . NOMBRE . "?, aún tienes " . EDAD . " años";

	//Las constantes no se pueden agregar dentro de un string, como si se puede hacer con las variables
	
?>