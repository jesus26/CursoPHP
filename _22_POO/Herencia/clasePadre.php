<?php 
	class Padre extends Abuelo {

		//Creando constructor.
		function Padre(){ //Le da un estado inicial al objeto
			//Con el simbolo -> referenciamos a una propedad o a un método de la clase
			$this -> nombre = "Cristobal";  //Nuestro coche en su estado inicial tendrá 4 ruedas.
			$this -> edad = 49;
			$this -> colorCabello = "Negro";
		}	

		function asignar_atributos($color_cabello, $nombre_padre){
			$this -> nombre = $color_cabello;

			echo "<br>El color de cabellos de mi padre " . $nombre_padre . " es : " . $this -> colorCabello;
		}

		function despertar(){
			parent :: despertar(); //Con esto se ejecuta primero todo el codigo del metodo en la clase padre y después el código que agregemos a este metodo

			echo "Padre ha despertado";
		}
	}
?>