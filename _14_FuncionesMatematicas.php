<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>14 - Funciones matemáticas y casting</title>
</head>
<body>
	<?php
		//rand(), genera numeros aleatorios

		//Sin argumentos
		$num1 = rand();
		echo "El número es $num1 <br><br>";

		//Un argumento con parámetros el mínimo y el máximo
		$num1 = rand(10,20);
		echo "El número con parametros es $num1 <br><br>";

		$numero = "10";

		//Para convertir de un tipo a otro, se le pone el tipo entre parentesis antes de la variable a conevertir.
		$resultado = (int)$numero;

		echo "El resultado es " . ($resultado + 3) . "<br><br>";
	?>	
</body>
</html>