<?php
echo "Implode and explode function";
//implode == join
//explode == seprator
$fruits = array("apple", "banana", "cherry"); //array of fruits
//imploding the array into a string using comma as separator
$stringFruit= implode(", ", $fruits);
echo "<br>".$stringFruit;
//exploding the string back to an array
$newArray = explode(', ', $stringFruit);
print_r($newArray);

?>