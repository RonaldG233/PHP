<!-- escriba una fucnion q me reciba una cadena y que me devuelva una cadena pero sin las vocales -->

<?php
$palabra = "jojo";
function vocales($palabra){
  $vocales=preg_replace('/a|á|e|é|i|í|o|ó|u|ú/','',strtolower($palabra));
  return $vocales;


}

$texto = vocales($palabra);
echo "la palabra con vocales es: $palabra y sin vocales es: $texto";

