<?php


interface Forma{
	public function getArea();
}

class Circulo implements Forma{
	private $radio;
	public function __construct($r){
		$this->radio=$r;
	}
}

class Rectangulo implements Forma{
	private $altura;
	private $base;

	public function __construct($a, $b){
		$this->altura=$a;
		$this->base=$b;
	}
}

?>