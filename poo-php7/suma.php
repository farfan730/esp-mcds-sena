<?php

#programacion lineal
#-------------
$a=20;
$b=30;

echo "la suma lineal es:".$c=$a+$b;



#programacion estructurada
#------------------
function sumar($a, $b){

	return $a +$b ;
}

echo "la suma estructurada es ".sumar(30, 25);


#orientado a objetos
#---------------
class Suma{
   private $a=3;
   private $b=3;

   public function getSuma()
   {
   return $a+$b;
   }

   public setSuma($a, $b){
    this.$a=$a;
    this.$b=$b;

   }
}

 Suma Sua=new Suma();
 echo "objeto".Sua.getSuma()


?>


