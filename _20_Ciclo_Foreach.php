<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>20 - Ciclo Foreach</title>
</head>
<body>
	<?php
		echo "Ciclo foreach <br/><br/>";

		//Crear un array predefinido.
		$predefinido = array("Elemento 1", "Elemento 2" );

		foreach ($predefinido as $elemento) {
			echo "$elemento <br/>";	//Imprimiendo el elemento actual
		}

		echo "<br/>";
		//Crear un array asociativo o personalizado
		$asociativo = array("clave1" => "Elemento 1", "clave2" => "Elemento 2");
		foreach ($asociativo as $key => $elemento) {
			echo "$key<br/>"; //llamar a la clave del elemento actual
			echo "$elemento<br/>"; //llamar al elemento actual
		}
	?>
</body>
</html>