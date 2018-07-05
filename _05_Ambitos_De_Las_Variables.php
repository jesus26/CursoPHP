<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05 - Ambitos de las variables</title>
</head>
<body>
	<?php
		/*
		Ambito: lugar donde se declara la variable
		
		El ámbito puede ser:
		Local: variable declarada dentro de una función
		Global: Se puede declarar dentro o fuera de una función, se puede utilizar en cualquier lugar del código
		SuperGlobal: Acceder a una variable incluso fuera del programa, se declaran como array
		*/

		$nombre = "Jesus";

		function imprimirMensaje(){
			//Con esto se convierte en global una variable y se puede utilizar en ambos ambitos
			global $nombre;

			/*Esta variable es de entorno local y por razones de seguridad no está
			relacionada con la variable del mismo nombre de fuera de la función*/
			$nombre = "Ernesto";
		}

		imprimirMensaje();

		echo "El nombre es " . $nombre;
	?>
</body>
</html>