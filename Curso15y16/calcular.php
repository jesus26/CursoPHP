<?php 
	echo "Resultado<br/><br/>";
	$operacion = $_POST['lista'];
	
	$num1 = $_POST['n1'];
	$num2 = $_POST['n2'];
	$num3 = $_POST['n3'];

	//Para comprobar si es correcta la informacion y no está vacio el textfield
	/*if (isset($num1) && !empty($num1)) {
		# code...
	}*/

	$numa = $num1 + $num2 + $num3;
	switch ($operacion) {
		case 'sumar':
			echo "La suma es = ".$numa;
			break;
		
		default:
			# code...
			break;
	}
?>