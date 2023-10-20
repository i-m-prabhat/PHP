<?php
// Arithmetic operator 
$a = 10;
$b = 5;
echo "Addition: ";
echo $c = $a + $b; // Addition of two numbers.
echo "<br>";

echo "Subtraction: ";
echo $d = $a - $b; // Subtracting one number from another.
echo "<br>";

echo "Multiplication: ";
echo $e = $a * $b; // Multiplying two numbers.
echo "<br>";

echo "Division: ";
if($b != 0) {
    echo $f = $a / $b; // Dividing one number by another.
} else{
    echo 'Cannot divide by zero';
}
echo "<br>";

echo "Modulas: ";
echo $g = $a % $b; // Getting the remainder or modulus after division.
echo "<br>";

echo "increament: ";
++$g; // Increment a variable by one.
echo $g ."<br>";
echo "decreament: ";
--$g; // Decrement a variable by one.
echo $g."<br>";


// Comparision Operators 
$x=3;
$y=2;

var_dump($x!=$y);
var_dump($x==$y);
var_dump($x>$y);
var_dump($x<$y);
var_dump($x>=$y);
var_dump($x<=$y);
if ($x==$y){
    echo "$x is equal to $y";
    }else if($x>$y){
        echo "$x is greater than $y";
    }else if($x<$y){
        echo "$x is lesser than $y";
}
            
// Logical nad Conditional Operators 
$age=18;
$name="Prabhat Patel";
if(isset($_GET['submit'])){
    $age=$_POST['age'];
    $name=$_POST['name'];
    }
    if($age>=18 && $age<=65){
        echo "Congratulation you are eligible for voting";
    }else{
        echo "Sorry, You are not eligible for voting";
}

$a=1;
$b=0;

echo $a && $b; //AND
echo "<br>";
echo $a || $b; //OR
echo "<br>";
echo !$a; //NOT
 
// Ternry operator 
$x=5;
$x>3? $flag = "Yes" : $flag = "No";
var_dump($flag); 


// Assignment Operators
$num=4; 
$num += 2; //addition assignment
echo $num."<br>";
$num-=2; //subtraction assignment
echo $num."<br>";
$num*=2; //multiplication assignment
echo $num."<br>";
$num/=2; //division assignment
echo $num."<br>";   
$num %= 2; //modulus assignment

// Conditional operators 
$age = 18;

if($age >= 18) {

echo 'You can vote';
} else{
  echo  'You cannot vote';
} 
      




?>