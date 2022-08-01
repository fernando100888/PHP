<?php

// operator precedence, is when the language decides which value comes first and what happens next

// for exaple:
// in this case first assign and then add
$contador = 0 ;
$nuevo_contador = $contador ++ ;
echo $nuevo_contador ; // it will give the value 0, due to the associativity of the language, in this case of php



// an example of left associativity in php is the subtraction operator
echo 1 - 2 - 3 ; // is going to give -4 because it first performs the operation on the left (1 - 2) and then subtracts the -3



// an example of right associativity is the assignment operator
$c = 10 ;

$a = $b = $c ; // in this case it first says that the value of $b is equal to the value of $c and then that the value of $a is equal to the value of $b







