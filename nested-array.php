<?php
#Nested Arrays
$foods = [
    'vegetables' => explode(', ', 'bringle, lau, capsicam, potato' ),
    'drinks' =>  explode(', ', 'water, soda, juice' ),
    'fruits' => explode(', ', 'melon, pappaya, banana' ),
];
print_r($foods);
echo $foods['vegetables'][3];