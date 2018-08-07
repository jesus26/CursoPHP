<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09 - Operadores de Comparación</title>
</head>
<body>

	<form action="" method="POST" name="datos_usuario" id="datos_usuario">
		Nombre: <input type="text" name="nombre" id="nombre">
		<br>
		<br>
		Apellido: <input type="text" name="apellido" id="Apellido">
		<br>
		<br>
		<input type="submit" name="enviar" id="enviar">
	</form>

	<?php
		/*
		Operadores de Comparación
			==, true su las 2 variables son iguales
			===, compara que las variables sean iguales y sean del mismo tipo
			!=, true si las 2 variables NO son iguales
			<>, true si las 2 variables no son iguales y además son de diferente tipo
			<, >, <=, >=
		*/

		$variable1 = 8;
		$variable2 = "8";
		$variable3 = "Jesus";

		//Comparando el valor sin considerar el tipo
		if($variable1 == $variable2){
			echo "Son iguales<br>";
		} else{
			echo "No son iguales<br>";
		}

		//Comparando el valor sin considerar el tipo
		if($variable1 == $variable3){
			echo "Son iguales<br>";
		} else{
			echo "No son iguales<br>";
		}

		//Comparando el valor y considerando el tipo
		if($variable1 === $variable2){
			echo "Son iguales<br>";
		} else{
			echo "No son iguales<br>";
		}

		//Comparando el valor pero con comparador diferente a
		if($variable1 != $variable3){
			echo "No son iguales<br>";
		} else{
			echo "Son iguales<br>";
		}

		/*
		para mostrar el resultado de POST en el mismo documento, en el action del formulario se le ponen dos comillas solamente ""
		*/
	?>
		
	<?php
		//El isset se está utilizando para validar si el botón enviar ha sido presionado
		if(isset($_POST["enviar"])){
			//Guardar el valor de lo que el usuario ingresó en los text fields
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];

			//Comparando valor ingresado
			if($nombre == "Jesus"){
				echo "Puedes entrar";
			} else {
				echo "Acceso denegado";
			}
		}
	?>
</body>
</html>