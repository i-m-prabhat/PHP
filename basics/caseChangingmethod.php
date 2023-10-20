<?php
$str = "Hello World";
$lowercase = strtolower($str);
echo $lowercase; // Output: "hello world"
echo "<br/>";

$str = "Hello World";
$uppercase = strtoupper($str);
echo $uppercase; // Output: "HELLO WORLD"
echo "<br/>";

$str = "hello world";
$capitalized = ucfirst($str);
echo $capitalized; // Output: "Hello world"
echo "<br/>";

$str = "Hello World";
$lcfirst = lcfirst($str);
echo $lcfirst; // Output: "hello World"
echo "<br/>";

$str = "hello world";
$ucwords = ucwords($str);
echo $ucwords; // Output: "Hello World"
echo "<br/>";

$str = "Héllo Wörld";
$lowercase = mb_strtolower($str, 'UTF-8');
$uppercase = mb_strtoupper($str, 'UTF-8');
echo $lowercase; // Output: "héllo wörld"
echo "<br/>";
echo $uppercase; // Output: "HÉLLO WÖRLD"

?>