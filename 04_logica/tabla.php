<!-- tabla de multiplicar del 1 al 10 -->
<?php

$num=-5;

function tabla($num){
  for ($n=1; $n < 10 ; $n++) { 
    $resultado="$num+$n=".($num*$n);
    echo "$resultado <br>";
  }
}

$numero=tabla($num);
