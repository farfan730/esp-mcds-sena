<?php

/////////////////////////////////////

abstract class fruta{
	protected $nombre;
	protected $color;
	protected $precio;

	public function __construct($n, $c, $p){
		$this->nombre=$n;
		$this->color=$c;
		$this->precio=$p;
	}



	abstract public function getInfo();


}

/////////////////////////////////////

class Manzana extends Fruta
{
	 public function getInfo(){
	 	return "nombre: ".$this->nombre."\ncolor: ".$this->color."\nprecio : ".$this->precio;
	 }

}
/////////////////////////////////////

class Pera extends Fruta
{
	 public function getInfo(){
	 	return "nombre: ".$this->nombre."\ncolor: ".$this->color."\nprecio : ".$this->precio;
	 }

}

// creamos los objetos

// las clases abastractas no se pueden instanciar, las hijas si.
   $fruta1=new Manzana('manzroja', 'verde', 1200);
   echo "\n\nla info de fruta 1 es : ".$fruta1->getInfo();

   $fruta2=new Pera('perVerde', 'verdesita', 1500);
   echo "\n\nla info es de fruta 2 es : ".$fruta2->getInfo();


?>