<?php


///////imprime multiplos del 5 hasta el 50////////
/*
for ($n=0; $n <=50 ; $n++) { 
	  echo "".($n % 5==0) ? "-".$n: "";  
}

*/

////////imprimir factorial de 1 a 5 ///////////////


$num =25;
$fact=1;
$cont=1;

while($cont<=$num){
$fact=$fact*$cont;
 echo "<br>".$cont."! =".$fact;
 $cont++;
}



?>