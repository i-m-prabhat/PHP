<?php
// function 
// A function isblock of statements that can be used repeatedly in a program.

// Functions are defined by the following components:
/*1. The function keyword, followed by the name of the function and parentheses ().
2. Parameters inside the parentheses. These define the input to the function.
3. An optional return type declaration after the parameters list. This specifies what data type should be returned when this function is called.
3. An optional return type declaration after the parameters. This specifies what data type should be returned from the function.*/


function greet(){
    echo "Hello World!";
}

greet();
function greet2(){
    return "Hello World with return";
}

echo greet2();

?>