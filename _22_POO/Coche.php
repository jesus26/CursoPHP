<?php 
	/*No es obligatorio tener un archivo por clase, pero es recomendable para 
	la reutilización de diferentes archivos.*/
	class Coche{
		//Declarando atributos.
		var $ruedas;
		var $color;
		var $motor;

		//Creando constructor.
		function Coche(){ //Le da un estado inicial al objeto
			//Con el simbolo -> referenciamos a una propiedad o a un método de la clase
			$this -> ruedas = 4;  //Nuestro coche en su estado inicial tendrá 4 ruedas.
			$this -> color = "";
			$this -> motor = 1600;
		}	

		//Declarando métodos.
		function arrancar(){
			echo "El coche está arrancando<br>";
		}

		function girar(){
			echo "El coche está girando<br>";
		}

		function frenar(){
			echo "El coche se ha frenado<br>";
		}

		//método que recibe 2 parámetros
		function asignar_color($color_coche, $nombre_coche){
			//Igualando el etribut color
			$this -> color = $color_coche;

			echo "<br>El coche $nombre_coche es de color : " . $this -> color;
		}
	}
?>