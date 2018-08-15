<?php

class Pokemon
{
	
	 public $nombre;
	 public $tipo;
	 public $salud;

	 public function __construct($nombre, $tipo, $salud){

	 	$this->nombre=$nombre;
	 	$this->tipo=$tipo;
	 	$this->salud=$salud;
	 }

	 public function atacar(){
	 	echo "atacando";
	 }

	 public function esquivar(){
	 	echo "esquivando";
	 }

	 public function evolucionar(){
	 	echo "evolucionando";
	 }

}


	$poquemon1 =new Pokemon("picachu", 5, 10);	
	echo "\n".$poquemon1->atacar();
	

    $poquemon2 =new Pokemon("doraemon", 20, 5);	
	echo "\n".$poquemon2->esquivar();

    $poquemon3 =new Pokemon("pokedex", 20, 5);	
	echo "\n".$poquemon3->evolucionar();

?>