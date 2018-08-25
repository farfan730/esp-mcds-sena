<?php


interface Animal{
	public function comer();
	public function correr();
}

class Perro implements Animal
{
	private $nombre;
 
    public function __construct($nombre){
     $this->nombre=$nombre;
    }
	
	public function getnombre(){
 	 return $this->nombre;
 	}

	 public function ladrar(){
	 	return "ladrar...";
	 }

	 public function comer(){
	 	return "comer...";
	 }

	 public function correr(){
	 	return "correr...";
	 }

}

///////////////////////////////////////////////

class Gato implements Animal
{
	private $nombre;
 
    public function __construct($nombre){
     $this->nombre=$nombre;
    }
	
	public function getnombre(){
 	 return $this->nombre;
 	}

	 public function maullar(){
	 	return "maullar...";
	 }

	 public function comer(){
	 	return "comer...";
	 }

	 public function correr(){
	 	return "correr...";
	 }

}

$perro1=new Perro('fIRULAIS');
echo "\n\n".$perro1->getnombre();
echo "\n\n".$perro1->correr();
echo "\n\n".$perro1->comer();
echo "\n\n".$perro1->ladrar();

$gato1=new Gato('felix');
echo "\n\n".$gato1->getnombre();
echo "\n\n".$gato1->correr();
echo "\n\n".$gato1->comer();
echo "\n\n".$gato1->maullar();

?>