<?php

/////////////////////////////////////

class Operacion{
	protected $numero1;
	protected $numero2;

public function __construct($numero1, $numero2){
	$this->numero1=$numero1;
	$this->numero2=$numero2;

 }
}

/////////////////////////////////////

class Suma extends Operacion
{
	 public function getResultado(){
 	 return $this->numero1 + $this->numero2;
 }
}
////////////////////////////////////////

class Resta extends Operacion
{
	 public function getResultado(){
 	 return $this->numero1 - $this->numero2;
 }
}
//////////////////////////////////////////

class Multiplicacion extends Operacion
{
	 public function getResultado(){
 	 return $this->numero1 * $this->numero2;
 }
}
//////////////////////////////////////////

class Division extends Operacion
{
	 public function getResultado(){
 	 return $this->numero1 / $this->numero2;
 }
}

// creamos los objetos

   $oper1=new Suma(3,3);
   echo "\n\nla suma es : ".$oper1->getResultado();

   $oper2=new Resta(3,3);
   echo "\n\nla Resta es : ".$oper2->getResultado();

   $oper3=new Multiplicacion(3,3);
   echo "\n\nla Multiplicacion es : ".$oper3->getResultado();

   $oper3=new Division(6,3);
   echo "\n\nla Multiplicacion es : ".$oper3->getResultado();



?>