<?php
	/*
	La POO es trasladar cada elemento que vemos en la vida real a código de programación
	
	El objetivo de la POO es la reutilización de código y hacer la programación
	más fácil para las personas.
	
	OBJETO .- Tiene atributos y comportamientos.
	
	CLASE .- Modelo donde se redactan las características comunes de un grupo de objetos.
	
	INSTANCIA .- Ejemplar de una clase.
	*/

	//Incluyendo archivo externo para poder crear objetos del tipo de la clase.
	include("Coche.php");
	
	//Creando objetos los cuales tienen los valores del constructor de la clase
	$mazda = new Coche();
	$ferrari = new Coche();

	//Llamando métodos para un objeto
	$mazda -> arrancar();
	$mazda -> girar();
	$mazda -> frenar();

	echo "El coche tiene " . $mazda -> ruedas . " ruedas";
	$mazda -> asignar_color("Rojo", "Mazda");
	$ferrari -> asignar_color("Amarillo", "Ferrari");
?>