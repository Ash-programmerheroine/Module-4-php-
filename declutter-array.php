<?php
# MAIN WORK---->EXTRACTING FROM EXISTING ARRAY
$someFruits = array('melon', 'mango', 'pinapple', 'grape', 'jackfruit');
$random = array('a'=>12, 'b'=>22, 'c'=>12, 'd'=>12, 23=>12, 'e'=>12, 'g'=>12);
//Adding some in the array
$newFruits = array('tamarind', 'banana');
$fruits = array_splice($someFruits, 3, 2, $newFruits);
print_r($fruits);
print_r($someFruits);