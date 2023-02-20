<?php
# REmoving data from array
$person = array('fname'=> 'ashrafi','lname'=> 'khanam',);
print_r($person);
unset($person['fname']);
print_r($person);