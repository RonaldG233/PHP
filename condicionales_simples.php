<?php
/**
 * 
 * Estructura condicional simple
 * 
 * 
 * If(expresion){
 * Codigo a ejecutar
 * }
 * 
 * if(expresion):
 * Codigo a ejecutar
 * endif;
 * 
 */

 $edad= 18;
$saludo="hola ";

$descuento=0.20;

$compra=90;


 if($edad>=18){
    echo "Hola persona";
}
echo "<br>";
?>
<div>
    <?php if($edad>=18):?>
        <h1> <?= $saludo ?></h1>
    <?php endif; ?>
</div> 
<?php

echo "<br>";

$numeroo=6;

if (($numeroo% 2)===0){
    echo "es numero par";
}



echo "<br>";


$descuento=0.20;

$compra=120;

$descuento_total= $compra - ($compra*$descuento);

if ($compra>=100){
    echo "si hay descuento, y el costo es de ";
    echo $descuento_total;


}







 