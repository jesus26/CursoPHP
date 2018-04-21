<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Funciones matematicas y cast</title>
</head>
<body>
	<?php
		//Sin argumentos
		$num1 = rand();
		echo "El número es $num1 <br><br>";

		//Un argumento con parametros el minimo y el maximo
		$num1 = rand(10,20);
		echo "El número con parametros es $num1 <br><br>";

		$numero = "10";

		//Para convertir de un tipo a otro, se le pone el tipo entre parentesis antes de la variable a conevrtir.
		$resultado = (int)$numero;

		echo "El resultado es " . ($resultado + 3) . "<br><br>";

		//&& es lo mismo que AND y || es lo mismo que OR.
		//&& tiene más prioridad que AND

		//Operador ternadio Condicion ? Valor si verdadero : valor si falso
		$result = 5 < 3 ?  "Simon<br><br>" :  "Nel<br><br>";
		echo $result;

		$nombre = "Jesus";
		$edad = 10;	

		//Switch de condicionantes
		switch (true) {
			case $nombre == "Jesus" && $edad == 10:
				echo "Caso 1";
				break;
			case $nombre == "Ernesto" && $edad == 12:
				echo "Caso 2";
				break;
			default:
				echo "Ningun caso";
				break;
		}

		//Con la instruccion continue dentro de un for, se pasa directamente a la siguiente iteraccion sin ejecutar el codigo que sigue despues de 
		//la instruccion.

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
				echo "no se ejecuta la linea de abajo<br>";
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
		Los parametros por valor no cambiar el valor original, solo se utilizan dentr de la funcion, en cambio
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