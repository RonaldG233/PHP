<?php
/**
 * 
 * Operadores de incremento y decremento 
 * 
 * Simbolo        Nombre
 *   ++           Incremento 
 *   --           Decremento
 * 
 * Ejemplo
 * 
 * ++$variable       Pre-incremento
 * --$variable       pre-decremento
 * 
 * 
 */

 $numero =10;

 //Primero Incrementa y luego realiza la operacion 
 echo "Pre incremento ".++$numero;

 echo "<br>";

 // Primero realiza la operacion y luego la incrementa

 echo "Post incremento ".$numero++;

 echo "<br>";
 echo $numero;

 echo "<br>";

 //Primero resta y luego realiza la operacion

 echo "Pre decremento ". --$numero;

 echo "<br>";

 //Primero realiza la operacion y luego resta
 echo "Post decremento".$numero--;

 echo "<br>";

 $resultado = ++$numero;

 echo $resultado;

 echo "<br>";

 //
 $resultado = $numero++;
 echo $resultado;