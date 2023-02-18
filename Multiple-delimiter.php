<?php
#string to Array
//delimeter---> space between single qoute
// $vegetables = explode(', ', 'bringle, lau, capsicam, potato,lau' );
// var_dump($vegetables);
// echo $vegetables[3];

// #Array to string
// $vegToString = join(', ',$vegetables);
// echo $vegToString;
// echo PHP_EOL;
// echo count($vegetables);
$vegetables = preg_split('/(, |,)/', 'bringle, lau, capsicam, potato,lau,n' );
echo count($vegetables);