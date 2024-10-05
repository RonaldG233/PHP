<?php
// $estudiantes = array('Carlos','Jose','Maria','Luis');
$estudiantes = ['Carlos','Jose','Maria','Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";


echo $estudiantes[2];


$aprendiz = [
    'nombre' => 'Ronald',
    'apellido' => 'Gallo',
    'edad' => 17,
    'deudas' => '120.000.00'
];
echo "<pre>";
print_r($aprendiz);

echo"</pre>";


$tutor=[
    'nombre'=> 'Ronald Alejandro',
    'apellido'=>'Gallo Castellanos',
    'edad' =>17,
    'direccion'=>[
        'ciudad' =>'Bucaramanga',
        'barrio '=>'Comuneros',
        'nomeclatura'=>'Calle 10A #16-40',
        'zipcode'=>666554

    ],
    'habilidades' =>[
        'git','html','css','js','php','python','slq'
    ]
];

echo "<pre>";
print_r($tutor);
echo"</pre>";


echo "<pre>";
print_r($tutor['direccion']['nomeclatura']);
echo"</pre>";

echo "<pre>";
print_r($tutor['habilidades'][4]);
echo"</pre>";

echo "<pre>";
print_r($tutor['habilidades'][3]='JavaScrip');
echo"</pre>";

$tutor['direccion'] ['departamento']= 'Santander';
unset($tutor['habilidades'][4]);
echo "<pre>";
print_r($tutor);
echo"</pre>";


echo count($tutor['habilidades']);