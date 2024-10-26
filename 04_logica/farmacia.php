 <!-- en una farmacia aplica al precio de los remedios el 10% de descuento,hacer un programa que ingresanod el costo de los remedios, calcular el valor del descuento y muestre el precio -->

 <?php

$precio=5000;
$descuento=0.10;

function farmacia($precio, $descuento) {
  $descuento_tot=($precio*$descuento);
  return $descuento_tot;

}

$resultado=farmacia($precio, $descuento);

echo "el valor del descuento es:";
print_r($resultado);

echo "<br>";

echo "el precio con el descuendo del remedio es:";
print_r($precio-$resultado); 


