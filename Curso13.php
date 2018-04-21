<?php 
	echo "Funciones<br/><br/>";

	function opMatematicas($num1, $num2, $num3){
		$suma = $num1 + $num2 + $num3;
		$multiplicacion = $suma * 2;

		return $multiplicacion;
	}

	echo opMatematicas(2,4,6);
?>