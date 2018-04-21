<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Trabajando con Strings</title>

	<style type="text/css">
		.resaltar{
			color: #F00;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		$nombre = "Jesús";

		/*No se puede escribir con comillas dobles dentro de otras comilla dobles, ni commillas simples dentro de
		comillas simples.

		podemos escribir comillas dobles dentro de comillas simples(sin olvidar que las comillas simples toman
		el literal de las variables) o invertido, o podemos escapar con el uso de diagonal invertida.
		*/
		echo "<p class=\"resaltar\">Mi nombre es $nombre<p>";

		//Comparando string.
		$variable1 = "Casa";
		$variable2 = "CASA";

		//strcmp compara dos string validando que sean iguales en mayusculas, minusculas, etc.
		//strcasecmp compara string pero no le importan las mayusculas y minusculas
		$resultado = strcmp($variable1, $variable2); //Devuelve 1 si no son iguales y 0 si son iguales.
		echo "El resultado con strcmp es $resultado <br><br>";
		$resultado = strcasecmp($variable1, $variable2);
		echo "El resultado con strcasecmp es $resultado";

		/*
		El operador de comparacion === compara además de que sean iguales que las variables en comparació
		sean del mismo tipo
		*/

		/*
		Una constante es un espacio en la memoria del ordenador cuyo valor no cambiará.
		- una constante siempre va en mayusculas.
		- su hambito siempre es global.
		- no llevan el simbolo $
		- siempre se definen con la función define().
		- no pueden almacenar valores escalares (que se pueden dividir en valores más pequeños).
		EJEMPLO:
		define("CONSTANTE","Valor de constante",[true or false]); el tercer parametro no es obligatorio solo es
		para especificar la sencibilidad de la declaracion de la constante cundo sea llamada.

		leer constantes predefinidas por PHP por ejemplo __LINE__, __FILE__

		para mostrar el resultado de POST en el mismo documento en el action del formulario se le ponen dos comillas solamente ""
		*/

	?>
</body>
</html>