<?php 
	class Abuelo{
		//Declarando atributos.
		var $nombre;
		var $colorCabello;

		//Para cambiar una variable a privada solo se le borrar var y se le agrega private.
		protected $edad;

		//El modificador por default es public

		//Creando constructor.
		function Abuelo(){ //Le da un estado inicial al objeto
			//Con el simbolo -> referenciamos a una propedad o a un método de la clase
			$this -> nombre = "Cipriano";  //Nuestro coche en su estado inicial tendrá 4 ruedas.
			$this -> edad = 89;
			$this -> colorCabello = "Blanco";
		}

		//Funcion get para devolver el valor de la variable edad la cual es private.
		function get_edad(){
			return $this -> edad;
		}	

		//Declarando métodos.
		function levantar(){
			echo "Me estoy levantando<br>";
		}

		function despertar(){
			echo "<br>Estoy despertando<br>";
		}

		function desayunar(){
			echo "<br>Estoy desayunando<br>";
		}

		function asignar_atributos($color_cabello, $nombre_abuelo){
			$this -> nombre = $color_cabello;

			echo "<br>El color de cabellos de mi abuelo " . $nombre_abuelo . " es : " . $this -> colorCabello . "<br><br>";
		}
	}
?>