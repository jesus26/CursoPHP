<?php
	echo "Ciclo foreach <br/><br/>";

	//Crear un array predefinido.
	$predefinido = array("Elemento 1", "Elemento 2" );

	foreach ($predefinido as $elementillos) {
		echo $elementillos. "<br/>";
	}

	echo "<br/>";
	//Crear un array asociativo o personalizado
	$asociativo = array("clave1" => "Elemento 1", "clave2" => "Elemento 2");
	foreach ($asociativo as $key => $elementos) {
		echo $key."<br/>"; //llamar claves
		echo $elementos."<br/>"; //llamar elementos
	}
?>