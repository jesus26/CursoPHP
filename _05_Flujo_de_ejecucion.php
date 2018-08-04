<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05 - Flujo de Ejecución</title>
</head>
<body>
	<?php
		/*El flujo de ejecución siempre será de arriba hacia abajo, a menos que este
		sea interrumpido por estructuras como: condicionales, bucles y funciones.
		*/
		echo "Primer mensaje<br/>";
		//LLamando a la función imprimirMensaje
		imprimirMensaje();

		//Conesto estamos integrando un archivo externo y podemos usar las funciones de ese archivo
		include("archivo_externo.php");

		echo "Segundo mensaje<br/>";

		//Esta es una función contenida en el archivo externo
		funcionExterna();
		
		imprimirOtroMensaje();

		//Creando una funcion, su código se ejecuta hasta que sea llamada
		function imprimirMensaje(){
			echo "Tercer mensaje (mensaje de funcion)<br/>";
		}

		/*La principal utilidad de una función es la reutilización de código, la función
		puede ser llamada n veces*/
	?>

	<?php
		/*Se pueden utilizar diferentes secciones de php en un mismo documento*/
		function imprimirOtroMensaje(){
			echo "Otro mensaje (mensaje de funcion de diferente seccion PHP)<br/>";
		}

		/*Para incluir un archivo externo (el cual contenga código que queramos utilizar)
		se utiliza una de las siguientes instrucciones

		include ("nombreArchivoExterno.php");
		require ("nombreArchivoExterno.php");

		diferencia entre include y require
		include, si ocurre un error, el resto del programa se ejecutará.
		require, si ocurre un error, el resto del programa NO se ejecutará
		*/
	?>
</body>
</html>