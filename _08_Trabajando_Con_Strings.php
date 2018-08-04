<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>08 - Trabajando con Strings</title>

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

		//Si se utilizan comillas dobles se puede poner el nombre de la variable sin necesidad de concatenar
		echo "<p class=\"resaltar\">Mi nombre es $nombre<p>";

		//Variables que serán comparadas más adelante
		$variable1 = "Casa";
		$variable2 = "CASA";

		//strcmp compara dos string validando que sean iguales en mayúsculas, minusculas, etc.
		//strcasecmp compara string pero no le importan las mayusculas y minusculas
		//Ambas funciones devuelve 1 si no son iguales y 0 si son iguales.
		$resultado = strcmp($variable1, $variable2);
		echo "El resultado con strcmp es $resultado <br><br>";
		$resultado = strcasecmp($variable1, $variable2);
		echo "El resultado con strcasecmp es $resultado";
		
	?>
</body>
</html>