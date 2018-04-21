<?php
	/*
	La POO es trasladar cada elemento que vemos en la vida real a código de programación
	*/
	/*El objetivo de la POO es la reutilización de código y hacer la programación
	más fácil para las personas.

	/*
	OBJETO .- tiene atributos y comportamientos.
	*/

	/*
	CLASE .- Modelo donde se redactan las caracteristicas comunes de un grupo de objetos.
	*/

	/*
	INSTANCIA .- Ejemplar de una clase.
	*/

	//Incluyendo clase de archivo diferente.
	include("Coche.php");
	$mazda = new Coche(); //Tiene los valores del contructor de la clase
	$ferrary = new Coche();

	$mazda -> arrancar();
	$mazda -> girar();
	$mazda -> frenar();

	echo "El coche tiene " . $mazda -> ruedas . " ruedas";
	$mazda -> asignar_color("Rojo", "Mazda");
	$ferrary -> asignar_color("Amarillo", "Ferrary");
?>