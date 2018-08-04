<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>06 - Ambitos de las variables</title>
</head>
<body>
	<?php
		/*
		Ámbito: lugar donde se declara la variable
		
		El ámbito puede ser:
		Local: variable declarada dentro de una función
		Global: Se puede declarar dentro o fuera de una función, se puede utilizar en cualquier lugar del código
		Super global: Acceder a una variable incluso fuera del script PHP, se declaran como array
		*/

		$nombre = "Jesus";

		function imprimirMensaje(){
			/*Con esto se convierte en global una variable y se puede utilizar en ambos ámbitos, el uso de la
			palabra global siempre va dentro de una función, de lo contrario aparecerá un error*/
			global $nombre;

			/*Esta variable es de entorno local y por razones de seguridad no está relacionada con la variable 
			con el mismo nombre de fuera de la función, esto también sirve para no modificar una variable que 
			se está utilizando en una función que ha escrito otro desarrollador*/
			$nombre = "Ernesto";
		}

		imprimirMensaje();

		echo "El nombre es " . $nombre;
	?>
</body>
</html>