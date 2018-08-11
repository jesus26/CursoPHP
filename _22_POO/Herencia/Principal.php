<?php
	include("claseAbuelo.php");
	include("clasePadre.php");
	$abuelo = new Abuelo();
	$padre = new Padre();

	$abuelo -> levantar();
	$abuelo -> asignar_atributos("blanco","Cipriano");

	$padre -> levantar();
	$padre -> asignar_atributos("negro","Cristobal");

	$abuelo -> despertar();
	$padre -> despertar();

	//Esta variable es de tipo privtae y para acceder a su valor son necesarios los métodos get and set que se declarn en la clase
	//de donde se hace la instancia.
	echo "<br><br>La edad de mi abuelo es " . $abuelo -> get_edad(); //Se ve como se llama al metodo get() en lufar de a la variable sola.
	echo "<br><br>La edad de mi padre es " . $padre -> get_edad(); //esta linea no muestra el valor de la variable por ser privada.

	/*
	Para solucionar el problema del valor, podemos poner como modificador de acceso protected con la cual la variable no solo puede
	ser utilizada en su calse si no también en todas las subclases de esta.
	*/
?>