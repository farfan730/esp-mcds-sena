<?php

class Animal
{
	
	 public $nombre;
	 private $edad;
	 protected $peso;

 public function __construct($mombre, $edad, $peso){

 	$this->nombre=$nombre;
 	$this->edad=$edad;
 	$this->peso=$peso;
 }

}


	$gat =new Animal("firu", 20, 5);
	echo "nombre".$gat->nombre;
	echo "edad" .$gat->edad;
    echo "peso" .$gat->peso;
?>