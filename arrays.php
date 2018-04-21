<?php 
	/*Array.- espacio en la memoria donde se pueden almacenar varios valores*/
/*En php se pueden utilizar los arrays idexados(con indice) o arrays asociativos*/
	$array_semana[] = "Lunes"; //PHP permite no indicar el indice
	$array_semana[] = "Miercoles";
	$array_semana[] = "Martes";

	echo $array_semana[2];

	//Declaración de arreglo indexado pasandole los valores.
	$array_semana2 = array("Lunes", "Miercoles", "Martes");
	echo "<br>" . $array_semana2[1];

	//Declaración array asociativo (cada posicion se identifica con un nombre).
	$datos = array('Nombre' => "Juan", 'Apellido' => "Becerra", 'Edad' => 20);
	echo "<br>" . $datos["Nombre"];

	/*La clave puede ser integer o string*/

	/*La clave es opcional. Si no se especifica, PHP usará el incremento de la clave de tipo 
	integer mayor utilizada anteriormente.*/

	/*Si varios elementos en la declaración del array usan la misma clave, 
	sólo se utilizará la última, siendo los demás son sobrescritos.*/

	//la funcion isArray() para comprobar si una variable es array o es variable normal.
	if(is_array($datos)){
		echo "<br>Si es array<br>";
	}else{
		echo "<br>No es array<br>";
	}

	//Recorrer un array indexado
	for($i = 0; $i < count($array_semana); $i++){
		echo "<br>" . $array_semana[$i]. "<br>";
	}

	//Recorrer un array asociativo con un bucle for each
	foreach ($datos as $clave => $valor) { /*la variable clave y valor pueden llamarse de cualquier nombre*/
		echo "<br>clave = " . $clave . " => " . $valor . "<br>";
	}

	//Agregar un elemento a un arrar.
	$array_semana[] = "Viernes"; //No se le agrega indice cuando no se conoce la posicion.
	echo "<br>Se ha agregado un elemento nuevo <br>";

	for($i = 0; $i < count($array_semana); $i++){
		echo "<br>" . $array_semana[$i]. "<br>";
	}

	//Agregar un elemento a un array asociativo
	$datos["pais"] = "México";
	echo "<br>Se ha agregado un elemento nuevo al array datos<br>";
	foreach ($datos as $clave => $valor) { /*la variable clave y valor pueden llamarse de cualquier nombre*/
		echo "<br>clave = " . $clave . " => " . $valor . "<br>";
	}

	//Ordenar elementos por orden alfabetico en un array idicativo
	sort($array_semana);
	for($i = 0; $i < count($array_semana); $i++){
		echo "<br>" . $array_semana[$i];
	}

	/*ARRAYS MULTIDIMENSIONALES*/
	$alimentos = array("fruta"=> array("tropical" => "Kiwi",
										"citrico" => "Limón",
										"otros" => "Manzana"),
						"leche"=> array("vaca" => "leche",
										"animal" => "perro",
										"vegetal" => "Lechuga"),
						"carne"=> array("vacuno" => "Lomo",
										"porcino" => "Pata")
						);

	//Ver posicion de un array multidimensianal.
	echo "<br><br>" . $alimentos["carne"]["vacuno"] . "<br>";

	//recorrer un array 
/*	foreach ($alimentos as $key => $value) {
		echo "<br>" . $key . " : <br>";
		while (list($clave, $valor) = each($value)) {
			echo "<br>" . $clave . " --- " . $valor;
		}
	}*/

	//var_dump para imprimir un array multidimensional
	echo var_dump($alimentos);
?>