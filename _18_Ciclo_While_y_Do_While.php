<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18 - Ciclo While y Do While</title>
</head>
<body>
	<?php
		/*Se le conoce como ciclo indeterminado porque el número de ejecuciones está determinado
		sobre que se cumpla una condición y no un número determinado*/
		echo "Ciclo While<br/>";
		$variable = 1;

		while ($variable <= 10) {
	 		echo "Esta es la iteración número $variable <br/>";
	 		$variable++;
	 	} 

	 	echo "Ya hemos salido del bucle";
	?>

	<?php
		//La diferencia entre el while y el do while es que el segundo se ejecutará al menos una vez
		echo "<br/><br/>Ciclo Do While<br/>";
		$miVariable = 1;

		do{
			echo "Esta es la iteración número $miVariable <br/>";
			$miVariable++;
		} while ($miVariable <= 10);
	?>

</body>
</html>