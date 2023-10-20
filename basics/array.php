<?php

// Array 
// Types of Array in PHP 
// Associative array (key value pair)
$student = [
    "name" => "John",
    "age" => 20,
    "class" => "1st"
    ];
    echo $student['name']; // Output: John
        echo "<pre>";
    print_r($student);
        echo "</pre>";

// Index array 
$fruits = ["apple","banana","cherry"];
$fruits[] = "Graps";
echo $fruits[0]; // Output: apple
    echo "<pre>";
print_r($fruits);
    echo "</pre>";

// Multi-dimensional arrays
$marks = [
    ['Maths' ,65],
    ['English',78]
    ];

    echo $marks[0][0]; // Output: Maths
    echo "<pre>";
    print_r($marks); // printing the array we use print_r function
    echo "</pre>";





?>