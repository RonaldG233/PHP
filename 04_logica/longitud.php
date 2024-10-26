<!-- cree una funcion que calcule la longitud de una palabra si es corta o es larga, las palabras cortas son menores de 5 caracteres  -->

<?php

$palabra="hola";

function longitud($palabra){
  if(strlen($palabra)<5){
    return "la palabra es corta";
  } 
  else {
    return "la palabra es larga";
  }
  
}
$resultado=longitud($palabra);
echo $resultado;