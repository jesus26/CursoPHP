<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19 - Ciclo For</title>
</head>
<body>
	<?php
		//Se le conoce como ciclo determinado porque se "conoce cuantas veces se ejecutará"
		echo "Ciclo For<br/>";
		$variable = 10;

		for ($i = 1; $i <= $variable; $i++) { //también se puede incrementar i+=2, esto es igual a i=i+2:
			echo "Valor de variable: $i <br/>";
		}

		echo "Ya hemos salido del bucle";
		echo "<br><br>";

		echo "<br/>Uso de break para salir del ciclo antes de que este finalice<br/>";
		//Con la instruccion break se sale del ciclo antes de terminar.
		for($i = 0; $i <= 10; $i++){
			echo "Valor $i <br>";
			if($i == 5){
				echo "Se termina el ciclo con break";
				break;
			}
			echo "siguiente valor<br>";
		}

		echo "<br><br>";
		echo "<br/>Uso de contonue para saltar la iteración actual<br/>";
		//Con la instruccion continue dentro de un for, se pasa directamente a la siguiente iteracion sin ejecutar el codigo que sigue después de la instrucción.
		for($i = 0; $i <= 10; $i++){
			echo "Valor $i <br>";
			if($i == 5){
				echo "no se ejecuta lo siguiente de continue (pasa a la siguiente iteración)<br>";
				continue;
				echo "Esta línea jamás de ejecutará<br>";
			}
			echo "siguiente valor<br>";
		}
	?>

</body>
</html>