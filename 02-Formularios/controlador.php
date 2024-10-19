<?php

$nombre="";
$apellido="";
$edad="";
$telefono="";   
$errores = [];

// print_r($checkbox);

if (isset($_REQUEST['nombre'])&& ! empty($_REQUEST['nombre'])) {
    array_push($errores , "el campo nombre es requerido");
} 



if (iseet($_REQUEST['apellido']) && ! empty($_REQUEST['apellido'])) {
    array_push(  "el campo de apellido es requerido");
}


if (iseet($_REQUEST['edad'])&& ! empty($_REQUEST['edad'])) {
    array_push($errores , "el campo de edad es requerido");
}


if (iseet($_REQUEST['telefono'])&& ! empty($_REQUEST['telefono'])) {
    array_push($errores , "el campo de telefono es requerido");
}

// if (count($errores)) {
//     # code...
// }
echo "<ul>";
    for ($i=0; $i < count($errores) ; $i++) { 
        echo "<li>". $errores[$i]."</li>";
    }
echo "</ul>";
