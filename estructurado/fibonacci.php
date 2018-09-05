<?php

$n=0;
$lim=10;
$sig=1;
$i=0;

while($i <= $lim)
{
  echo $n."\n";
  $aux=$sig;
  $sig+=$n;
  $n=$aux;
  $i++;
}




?>