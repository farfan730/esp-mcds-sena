<?php

/////////////////////////////////////

interface Forma{
	public function getArea();
}

/////////////////////////////////////

class Circulo implements Forma{
	private $radio;
	public function __construct($r){
		$this->radio=$r;
	}

	 public function getArea(){
 	 return $this->radio*pi();
 }
}

/////////////////////////////////////

class Rectangulo implements Forma{
	private $altura;
	private $base;

	public function __construct($a, $b){
		$this->altura=$a;
		$this->base=$b;
	}
	public function getArea(){
 	 return $this->base * $this->altura;
 }

}

/////////////////////////////////////
// creamos los objetos

   $rectan1=new Rectangulo(3,3);
   echo "\n\nEl area del rectangulo es : ".$rectan1->getArea();

   $circulo1=new Circulo(8);
   echo "\n\nArea del circulo: ".$circulo1->getArea();



?>