<?php 
	class Compra_vehiculo
	{
		private $precio_base;
		
		//Declarando variable statica, para no poder modificarla se pone privada.
		private static $ayuda = 0; //No pertenecerá a instancia de este objeto, este pertenece a la clase.

		function Compra_vehiculo($gama){
			if ($gama == "urbano") {
				$this -> precio_base = 10000;
			}else if($gama == "compacto"){
				$this -> precio_base = 20000;
			}else if($gama == "berlina"){
				$this -> precio_base == 30000;
			}
		}

		function climatizador(){
			$this -> precio_base += 2000;
		}

		//Cuando se dice que un metodo es statico significa que solo funciona para la clase donde se ha creado
		//Por lo que los objetos no tendrian copia, tendrian el mismo metodo porque pertenece a la clase.

		function navegador_gps(){
			$this -> precio_base += 2500;
		}

		function tapiceria_cuero($color){
			if($color == "blanco"){
				$this -> precio_base += 3000;
			}else if($color == "beige"){
				$this -> precio_base += 3500;
			}else{
				$this -> precio_base += 4000;
			}
		}

		//This methos return the final price.
		function precio_final(){
			$valor_final = $this -> precio_base - self :: $ayuda; //Para hacer referencia a una variable estatica.
			return $valor_final; //Sin el this porque es un campo de metodo y no de clase.
		}

		static function descuento_gobierno(){
			if(date("m-d-y")>"30-01-16"){ /*Compara fechas*/
				self :: $ayuda = 4500;
			}else{
				self :: $ayuda = 100;
			}
			
		}
	}
?>