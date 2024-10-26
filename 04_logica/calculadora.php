<?php
$a=25;
$b=4;

Function calculadora($a,$b){
  try {
    if($b === 0){
      throw new Exception ("division por cero");
    }
    if (is_string($a) || is_string($b)){
      throw new Exception ("los datos datos deben ser de tipo numerico");
    }
  

  $respuesta=array(
    "suma" =>  $a+$b,
    "resta" =>$a-$b,
    "multiplicacion" =>$a*$b,
    "division" =>$a/$b

  );
  return $respuesta;
  } catch (\Exception $e) {
    return $e ->getmessage();
  }  
} 

$resultado=calculadora($a,$b);

echo "<pre>";
print_r($resultado);
echo "</pre>";



?>

