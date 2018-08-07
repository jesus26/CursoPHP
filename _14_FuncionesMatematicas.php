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

		//Con la instruccion continue dentro de un for, se pasa directamente a la siguiente iteraccion sin ejecutar el codigo que sigue despues de la instruccion.

		//Con la instruccion break se sale del ciclo.
		echo "<br><br>";
		for($i = 0; $i <= 10; $i++){
			echo "Valor $i <br>";
			if($i == 5){
				echo "Se termina el ciclo con break";
				break;
			}
			echo "siguiente valor<br>";
		}

		echo "<br><br>";
		for($i = 0; $i <= 10; $i++){
			echo "Valor $i <br>";
			if($i == 5){
				echo "no se ejecuta lo siguiente de continue (pasa a la siguiente iteración)<br>";
				continue;
			}
			echo "siguiente valor<br>";
		}

		echo "<br><br>";
		//Funcion con un parametro con valor por default.

		function frasesita($frase, $convert = true){
			if($convert == true){
				$resultadillo = ucwords($frase);
			}else{
				$resultadillo = strtoupper($frase);
			}

			return $resultadillo;
		}

		//En esta llamada a la funcion solo le pasamos un parametro por lo que toma el valor por default del segundo parametro.
		echo frasesita("esta es mi frase tio");

		echo "<br><br>";
		//En esta llamada si se le pasan los 2 parametros, esta es la importancia de los valores por default en los parametros.
		echo frasesita("esta es mi frase tio<br><br>", false);

		//En PHP se pueden utilizar funciones con parametros por valor y parametros por referencia.

		/*
		Los parametros por valor no cambiar el valor original, solo se utilizan dentro de la funcion, en cambio
		lo parametros por referencia cambiar el valor original
		*/

		$valor = 3;
		
		//Esta funcion recibe parametro por valor por lo que la modificacion no afecta al numero original.
		function incrementar($numero){
			$numero++;
			return $numero;
		}
		echo incrementar($valor);
		echo "<br><br>El valor original (3) no cambia y es igual a " . $valor . "<br><br>";


		//Esta funcion recibe un valor por referencia y si cambiará el valor original.
		function decrementar(&$numero){
			$numero--;
			return $numero;
		}
		echo decrementar($valor);
		echo "<br><br>El valor original (3) si ha cambiado y es igual a " . $valor;
	?>	
</body>
</html>