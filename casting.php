<?php

//casting es cuando forzamos que un tipo de dato sea otro tipo de datos

$numero = "5";

var_dump($numero);

$numero = (int) $numero;

var_dump($numero);

echo "<br>";

//---------------------

$dias = 5.89;
$dias = (int) $dias;

var_dump ($dias);

echo "<br>";


//---------------------

$bandera = 1;
$bandera = (bool) $bandera;

var_dump ($bandera);

echo "<br>";


?>

