<?php
//array_pop() ---> pop from last
//array_shift() ---> pop from first
//array_push() ---> add at last
//array_unshift() ---> add at first
$cars = [
    "honda", "bmw", "tata", "porche"];
$popp = array_pop($cars);
$popp = array_shift($cars);
//two way of adding an item into the array
$cars[]= "Ranze rover";
array_push($cars, "Ranze rover") ;
array_unshift($cars, "Ranze rover") ; 
// $car[2] = 'Yamaha';
$n = count($cars);
for ($i=0; $i < $n; $i++) { 
        echo $cars[$i]. "\n"; 
     }
