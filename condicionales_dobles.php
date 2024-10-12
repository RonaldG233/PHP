<?php
/**
 * 
 *  Estructura condicional doble | IF   ELSE
 * 
 * if(expresion){
 * Codigo a ejecutar si la expresion es verdadera
 * }else{
 * codigo si es falsa
 * }
 * 
 * if(expresion):
 * si es verdadera
 * else:
 * si es falsa
 * endif;
 */

 if (1>7) {

    echo "condicion a evaluar es verdadero";
 }else{
    echo "condicion a evaluar es falsa";
 }

 echo "<br>";

 if (9 == 12):
    echo "condicion evalua a verdadero";
 else:
    echo "condicion evalua a falsa";
 endif;


 // calcular total q debe pagar en un montallantas, cada precio de cada llantas es de 800, si se compran menos de 5 llantas, y de 700 si se compran 5 o mas llantas

 echo "<hr><br>";

 $llantas=4;
 $total=0;
 if ($llantas<5){
    
    $total= $llantas*800;
    
 }else{
    
    $total= $llantas*700;
 }

 echo " el total del cobro de las llantas es: ${total}";





 //determinar si un alumno aprueba o reprueba un cruso sabiendo q aprobara si promedio de 3 calificaciones es mayor o igual 3.0 y si no reprueba 

 echo "<br>";

 $nota1=3.0;
 $nota2=4.0;
 $nota3=1.0;
 $promedio=($nota1+$nota2+$nota3)/3;

 if ($promedio>=3.0){
    echo "APROBADO";
 }else{
    echo "REPROBADO";
 }



 echo "<hr><br>";

// echo  (8>=10) ?  "verdadero":  "es falso";


/**
 * 
 * Operador ternario 
 * operador ? true : false;
 * 
 * 
 */

 //si el primer es mayor q el segudno multiplicamos y si no dividimos
$numero1=6;
$numero2=2;
$resultado=($numero1>$numero2) ? $numero1*$numero2 :  $numero1/$numero2;

 echo "el resultado es: ${resultado}";

 echo "<br>";