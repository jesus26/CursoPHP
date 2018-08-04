<?php

	//Creando función
	function incrementaVariable(){
		//declarando variable, si se le agrega el static el valor se conserva
		static $contador = 0;

		$contador++;

		echo $contador . "<br>";
	}

	//Llamando a la función
	incrementaVariable();
	incrementaVariable();
	incrementaVariable();
	incrementaVariable();

	/*Si no se utiliza la palabra static el valor de una variable
	se pierde su valor*/

?>