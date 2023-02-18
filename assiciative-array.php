<?php
# ASSOCIATIVE ARRAY IS NOT INDEXED ,SO FORLOOP NOT WORKED HERE
# fOR EACH LOOP ARE USED FOR ASSOICIATIVE aRRAY
$category = [
    "Vegetables" => "bringel, aspergus, leafy green",
    "Dairy"=> "Milk, cheese, yugurt",
    "Meat"=> "beef, chicken, lamb",
];

# to add some value ---> Like Concatenation
$category["Vegetables"] = $category["Vegetables"]. ", bottle gurd";
# to add some value ---> Like Concatenation(shortcut way)
$category["Vegetables"] .= ", bottle gurd";
// echo $category["Vegetables"];
// echo PHP_EOL;
// foreach ($category as $key => $value) {
//     echo "$key = $value \n";
// }

#BUILT IN FUNCTION ---->  array_keys() ---> for indexing (0,1,2)
# For viewing Array indexing-----> print_r

// $keys = array_keys($category);
// // print_r($keys);
// for ($i=0; $i < count($keys); $i++) { 
//     $key =$keys[$i];
//    echo $category[$key]."\n";
// }
$values = array_values($category);
print_r($values);
for ($i=0; $i < count($values); $i++) { 
    $value = $values[$i];
   echo $value."\n";
}