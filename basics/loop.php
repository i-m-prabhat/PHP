<?php
// A loop is used to repeat a block of code until the specified condition is met 
// repeate code and save time 

// while 
$i = 0; // initialize variable $i with value 0
while ($i < 5) { // as long as $i is less than 5, keep looping
    echo "The number is: " . $i . "<br>"; // print out The number is followed by the current value of $i
    $i++; // increment $i by one after each iteration through the loop
}

// do while 
$x = 10;
do {
    echo "Value of x :" . $x . "<br>";
    $x--;
    } while($x >= 0);


// for loop 
for ($j=0; $j<5; $j++){
    echo "Number:".$j."<br>";
    }

// foreach loop 
$fruits = array("lemon", "orange", "banana");
foreach($fruits as $fruit){
    echo "Fruits is $fruit\n<br/>";
    }

?>