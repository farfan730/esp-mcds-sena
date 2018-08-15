<?php

class Animal
{
	
 public $nombre;
 public $edad;
 public $peso;

 public function correr(){

 	echo "esta corriendo";
 }
 public function comer(){
 	echo "esta comiendo";
 } 
 public function dormir(){
 	echo "esata durmiendo";
 }  


}


$ani =new Animal;
$ani->correr();
$ani->comer();
$ani->dormir();


?>