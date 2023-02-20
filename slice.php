<?php
#slicing Array function-----> array_slice
// $someFruits = array('melon', 'mango', 'pinapple', 'grape', 'jackfruit');
// print_r($someFruits);
// $slicedArray = array_slice($someFruits, -3, 6, true);
// print_r($slicedArray); 

$random = array('a'=>12, 'b'=>22, 'c'=>12, 'd'=>12, 23=>12, 'e'=>12, 'g'=>12);
$randomData = array_slice($random, 1, -1, true);
print_r($randomData);
