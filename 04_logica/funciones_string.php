<?php

// $exp = "/PRUEBA/i";
// $exp = "/[0-9]/";
// $exp = "/^texto/i";
// $exp = "/pr[eu]eba/i";
// $exp = "/grupo-[0-9]-adso/";
// $exp = "/l[aeiou]{2,4}r/";
// $exp = "/[0-9]/";
// $exp = "/[A-Za-z]/";
// $exp = "/[\d]/";
// $exp = "/[\D]/";
// $exp = "/[A-Z]{4}/";
// $exp = "/[A-Z]{4,}[\D]{0,}[0-9]{2,}[\D]{0,}[\W]/";
// $exp = "/(?=.\d)/";        //números 
// $exp = "/(?=.*[a-z])/";    //letras minusculas
// $exp = "/(?=.*[A-Z])/";    //letras mayuscula
$texto = "B2c0n0";
$exp = "/(?=.*[A-Z].*[0-9].*[a-z])/";

$resultado = preg_match_all($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);
// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";
// echo "<br>";
// echo $texto;
// echo "<br>"; 

if ($resultado){
  echo "si tiene resultado";
}
else{
  echo "no tiene resultados";
}