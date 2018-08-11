<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>21 - Funciones</title>
</head>
<body>
	<?php 
		echo "Funciones<br/><br/>";

		/*Las funciones permiten reutilizar código

		2 tipos de funciones:
		- predefinidas: las del propio lenguaje
		- propias: las que el programador genera
		*/

		//Utilizando funciones predefinidas
		$variable = "ESTA ES MI CADENA";
		echo $variable;

		echo "<br/>El resultado es: " . strtolower($variable);

		//Creando función propia
		function Operaciones($num1, $num2, $num3){
			$suma = $num1 + $num2 + $num3;
			$multiplicacion = $suma * 2;

			return "<br/><br/>El resultado de mi propia función es: $multiplicacion";
		}

		//Llamando a la función propia, si no se llama jamás se ejecutará
		echo Operaciones(3,4,6);

		echo "<br/><br/>Utilizando una función con valor por defecto<br/>";
		//Funcion con un parámetro con valor por default.
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
		//En esta llamada si se le pasan los 2 parámetros, esta es la importancia de los valores por default en los parámetros.
		echo frasesita("esta es mi frase tio<br><br>", false);


		echo "Utilizando parametros por valor y por referencia<br/>";
		/*
		En PHP se pueden utilizar funciones con parámetros por valor y parámetros por referencia.

		Los parámetros por valor no cambiar el valor original, solo se utilizan dentro de la funcion, en cambio
		lo parametros por referencia cambiar el valor original
		*/
		$valor = 3;
		
		//Esta funcion recibe parametro por valor por lo que la modificacion no afecta al numero original.
		function incrementar($numero){
			$numero++;
			return $numero;
		}
		echo "El valor incrementado es: " . incrementar($valor);
		echo "<br><br>El valor original (3) no cambia y es igual a " . $valor . "<br><br>";


		//Esta funcion recibe un valor por referencia y si cambiará el valor original.
		function decrementar(&$numero){
			$numero--;
			return $numero;
		}
		echo "El valor decrementado es: " . decrementar($valor);
		echo "<br><br>El valor original (3) si ha cambiado y es igual a " . $valor;
	?>
</body>
</html>