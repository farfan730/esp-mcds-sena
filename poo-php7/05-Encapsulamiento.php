<?php

class Usuario
{	
	 private $nombre;
	 private $genero;	 

 public function setNombre($nombre){
 	$this->nombre=$nombre;
 }
 public function setGenero($genero){
 	$this->genero=$genero;
 }
/////////////////////////////////

 public function getNombre(){
 	return $this->nombre;
 }
 public function getGenero(){
 return $this->genero;	
 }

}
/////////////////////////////////

	$usua1 =new Usuario;
	$usua1->setNombre('lorena');
	$usua1->setGenero('femenino');
	
	echo "\n".$usua1->getNombre();
	echo "\n".$usua1->getGenero();

	$usua2=new Usuario;
    $usua2->setNombre('pablo');
    $usua2->setGenero('masculino');


    echo "\n\n".$usua2->getNombre();
	echo "\n".$usua2->getGenero();
	
?>