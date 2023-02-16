<?php
$car = array(
    'honda', 'bmw', 'tata', 'porche');
$arrayLength = count($car);
for ($i=0; $i < $arrayLength; $i++) { 
   echo $car[$i]. "\n"; 
}
//As array index is counted from zero, arraylength should be minus 1($arraylenght -1) in recursion method
for ($i=$arrayLength-1; $i >= 0; $i--) { 
    echo $car[$i]. "\n"; 
 }
// foreach ($car as $eachcar=> $speed) {
//     echo "Speed of $eachcar is $speed". "\n"; 
// }