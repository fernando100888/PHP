<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9; 
$d = 7;


//== operador igual

var_dump ( $a == $b ); //TRUE porque son iguales

var_dump ( $a == $b2); //también es TRUE porque PHP considera que el valor 5 dentro del string es igual al 5 integer


//=== operador indéntico

var_dump ( $a === $b ); //TRUE porque son identicos

var_dump ( $a === $b2); //FALSE porque uno es un string y el otro es un integer (no son indénticos)


// != operador diferente

var_dump ( $a != $b ); //FALSE porque son identicos

var_dump ( $a != $b2); //FALSE porque son identicos != no compara los tipos de datos


// !== operador diferente (considerando el tipo de dato)

var_dump ( $a !== $b ); //FALSE porque son identicos

var_dump ( $a !== $b2); //TRUE porque son diferentes !== sí compara los tipos de datos


// < menor que 

var_dump ( $a < $c ); // TRUE porque 5 es menor que 9

var_dump ( $c < $d ); // FALSE porque 9 no es menor que 7


// > mayor que 

var_dump ( $a > $c ); // FALSE porque 5 no es mayor que 9

var_dump ( $c > $d ); // TRUE porque 9 es mayor que 7


// >= mayor o igual

var_dump ( $a >= $b ); // TRUE porque 5 es mayor o igual que el 5 dentro del string $b

var_dump ( $a >= $c ); // FALSE porque 5 no es mayor o igual que 9

var_dump ( $c >= $d ); // TRUE porque 9 es mayor o igual que 7



// <= menor o igual

var_dump ( $a <= $b ); // FALSE porque 5 es menot o igual que el 5 dentro del string $b

var_dump ( $a <= $c ); // TRUE porque 5 es menor o igual que 9

var_dump ( $c <= $d ); // FALSE porque 9 no es menor o igual que 7



// <=> operador nave espacial

// el operador de nave espacial te va a devolver:
// -1 si el número que está a la izquierda es menor que el que está a la derecha
// 0 si el número que está a la izquierda es igual que el que está a la derecha
// 1 si el número que está a la izquierda es mayor que el que está a la derecha

echo 2 <=> 1; // 1
echo "<br>";

echo 2 <=> 2; // 0
echo "<br>";

echo 1 <=> 2; // -1
echo "<br>";



// ?? operador fusión de null

//otorga el valor de una variable establecida a una variable sin valor

$edad_1 = 34;

echo $edad_2 ?? $edad_1; // devuelve 34


