<?php

////////muestra los numeros pares hasta el 100 ////////
for ($cont=0; $cont <= 100; $cont++)
  echo "".$res=($cont % 2==0) ? $cont : "|";  


/////////////con while//////////////

$i = 0;
while ($i <= 100) {
    echo "\n\n".$res=($i % 2==0) ? $i : "|";  
    $i++;
}

?>