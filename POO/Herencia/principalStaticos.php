<?php 
	include("metodosStaticos.php");

	//Llamada a ametodo estatico para poner el descuento a todas las compras
	Compra_vehiculo :: descuento_gobierno();

	//Creando una nueva instancia.
	$compra_antonio = new Compra_vehiculo("compacto");

	//Llamando metodo para la instancia creada.
	$compra_antonio -> climatizador();

	//Llamando metodo
	$compra_antonio -> tapiceria_cuero("blanco");
	echo $compra_antonio -> precio_final();

	//Creando nueva instancia.
	$compra_ana = new Compra_vehiculo("compacto");

	//llamando metodos para el objeto compra_ana.
	$compra_ana -> climatizador();
	$compra_ana -> tapiceria_cuero("rojo");

	//Llamando el metodo de precio final para Compra_ana.
	echo "<br><br><br>";
	echo $compra_ana -> precio_final();

	//Para acceder a una variable static es necesario poner el nombre de la clase, dos puntos y el nombre de la variable.
	//Compra_vehiculo :: $ayuda

?>