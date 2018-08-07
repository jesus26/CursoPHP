<style>
	.resultado{
		color: #F00;
	}
</style>

<?php

	//Con esto se comprueba si el botón submit ha sido presionado
	if(isset($_POST["enviar"])){
		echo "Resultado<br/><br/>";
	
		$operacion = $_POST['lista'];
		
		//Lo que se utiliza es el atributo name de la página html
		$num1 = $_POST['n1'];
		$num2 = $_POST['n2'];

		//Llamando a la función pasando parametros
		calcular($operacion, $num1, $num2);
	}

	
	//Crear una función para las diferentes operaciones y pasando parametros
	function calcular($operacion, $num1, $num2){
		//Para comprobar si es correcta la informacion y no está vacio el textfield
		/*if (isset($num1) && !empty($num1)) {
			# code...
		}*/

		switch ($operacion) {
			case 'sumar':
				$resultado = $num1 + $num2;
				echo "<p class='resultado'>La suma es = $resultado</p>";
				break;
			case 'restar':
				$resultado = $num1 - $num2;
				echo "<p class='resultado'>La resta es = $resultado</p>";
				break;
			case 'multiplicar':
				$resultado = $num1 * $num2;
				echo "<p class='resultado'>La multiplicación es = $resultado</p>";
				break;
			case 'dividir':
				$resultado = $num1 / $num2;
				echo "<p class='resultado'>La divición es = $resultado</p>";
				break;
			case 'incrementar':
				$num1++;
				$resultado = $num1;
				echo "<p class='resultado'>El incremento es = $resultado</p>";
				break;
			case 'decrementar':
				$num1--;
				$resultado = $num1;
				echo "<p class='resultado'>El decremento es = $resultado</p>";
				break;
			
			default:
				# code...
				break;
		}
	}

?>