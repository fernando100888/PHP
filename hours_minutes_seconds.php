<?php

//Time 

$seconds = readline ("enter the time in seconds: ") ;

echo $seconds ;

$hours = (int) ($seconds / 3600) ;

$seconds = (int) ($seconds % 3600) ;

$minutes = (int) ($seconds / 60) ;

$seconds = (int) ($seconds % 60) ; 


echo "it's $hours hours, $minutes minutes, $seconds seconds" ;

echo "<br>" ;













