<?php
include('header.php');
$name = "Prabhat Patel";

echo str_replace('P', 'Aa', $name);

echo strrev($name);

echo substr($name,2);

echo "<br/>";
echo str_word_count($name)."<br/>";
echo strlen($name)."<br/>";
echo str_repeat("hello",10)."<br/>";

echo rand(111111,999999)."<br>"; //for generating otp 

// Ceil and floor function 
$num=4.6;
echo ceil($num)."<br>"; // for rounding up the number
echo floor($num)."<br>"; // for rounding down the number

echo pow(2,7)."<br>";
echo sqrt(144)."<br>"; 


date_default_timezone_set("ASIA/KOLKATA");
echo date("Y-m-d H:i:s")."<br>";

echo time();

// include and include_once function 
// include ("switch.php");
// include_once ("loop.php");
include ("footer.php");
?>