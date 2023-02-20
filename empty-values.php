<?php
$name = "";
if(isset($name)){
    echo "Name is set";
}
else{
    echo "Name is not set.";
}
echo PHP_EOL;
if(isset($name) && (is_numeric($name) || $name != "")){
    echo "name is set and not empty";
}
else{
    echo "name is either not set or empty";
}