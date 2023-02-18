<?php
$person = array('fname'=> 'ashrafi','lname'=> 'khanam',);
$newPerson = &$person;
$newPerson['lname'] = 'amin';
// print_r($person);
// print_r($newPerson);

//copy by value
//deep copy by &
function printData(&$person){
    $person['fname'] .= 'me';
    print_r($person);
}
printData($person);
print_r($person);