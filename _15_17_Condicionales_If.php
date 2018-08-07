<?php 
//Condiciones

	//&& es lo mismo que AND y || es lo mismo que OR.
	//&& tiene más prioridad que AND y || tiene prioridad sobre OR

	$edad = 10;

	if ($edad > 18 && $edad >= 40) {
		echo ("Ya eres viejo");
	}elseif($edad > 18 && $edad < 40){
		echo ("Ya eres mayor de edad");
	}elseif ($edad < 18) {
		echo "Aún eres menor de edad";
	}elseif($edad == 18){
		echo "Apenas eres mayor de edad";
	}

	//Operador ternario Condicion ? Valor si verdadero : valor si falso
	$result = $edad < 18 ? "<br><br>Aún eres menor (ternario)<br><br>" : "<br><br>Ya eres mayor de edad<br><br>";
	echo $result;

	//Tambien se pueden evaluar diferentes condicionales, es decir agregar && y ||

	$nombre = "Jesus";
	$edad = 10;	

	switch ($nombre) {
		case "Jesus":
			echo "<br>El nombre es Jesus";
			break;
		case "Jesus":
			echo "<br>El nombre no es Jesus";
			break;
	}

	//Para poder evaluar más de una condición en cada case se pasa true
	switch (true) {
		case $nombre == "Jesus" && $edad == 10:
			echo "<br>Caso 1";
			break;
		case $nombre == "Ernesto" && $edad == 12:
			echo "<br>Caso 2";
			break;
		default:
			echo "Ningun caso";
			break;
	}

	//Otra estructura
	switch (true):
		case $nombre == "Jesus" && $edad == 10:
			echo "<br>Caso 1, segunda estructura";
			break;
		case $nombre == "Ernesto" && $edad == 12:
			echo "<br>Caso 2, segunda estructura";
			break;
		default:
			echo "<br>Ningun caso, segunda estructura";
			break;
	endswitch;
	
?>