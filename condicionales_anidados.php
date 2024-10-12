<?php

/**
 * 
 * Estructura
 * if(?){
 *  if(?){
 *      codigo a ejecutar
 *  }else{
 *          codigo a ejecutar
 *  }
 * }
 */

 $a=40;
 $b=45;
 $c=50;

 if ($a> $b){
    if ($a>$c){
        echo "$a es mayor que $b y $c";
    }else{
        echo "$a es mayor que $b pero  menor que $c ";

    }
 }else if ($b>$a){
    if ($b>$c){
        echo "$b es mayor que $a y $c";
    }else{
        echo "$b es mayor que $a pero  menor que $c ";
    }
}

echo "<br>";
//numero de 1 a 7 y los dias de la semana
$numero=3;

if ($numero==1){
    echo "Lunes";
}else if ($numero==2){
    echo "Martes";
}else if ($numero==3){
    echo "Miercoles";
}else if ($numero==4){
    echo "Jueves";
}else if ($numero==5){
    echo "Viernes";
}else if ($numero==6){
    echo "Sabado";
}else if ($numero==7){
    echo "Domingo";
}


