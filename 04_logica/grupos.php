<!-- si los alumnos en un curso se han divido en dos grupos a y  b de acuerdo con el sexo y el nombre el grupo a esta formado por las mujeres con nombre de anterior de la m y los hombres con posterior a la n, y el grupo b por el resto, escribir un programa que pregunte al usuario el nombre y su sexo y q aparezca a q grupo pertenece -->
<?php
$nombre="brayan";
$sexo="m";

Function grupos($nombre, $sexo) {
  if ($sexo === "f" strtoupper($nombre)<"m")
  {
    return "grupo a";
  } else if($sexo === "m" strtoupper($nombre)>"n"){
    return "grupo b";
  }

}


