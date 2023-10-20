<?php 
// break statement 
$x = 10;
while ($x > 5) {
    echo "The value of x is $x <br>";
    if($x == 7){
        // this will cause the loop to terminate immediately after printing 'The value of x is 7'
        break;
        }
        --$x;
    }

// use break with do while and for loop 
echo "<hr>Use Break With Do While Loop<hr>";
$y=2;
do{
    echo "$y ";
    ++$y;
    }while($y<=4);


echo "<hr>Use Break With For Loop<hr>";
    for($z=3;$z<=6;++$z){
        echo "$z ";
        if($z==4){break;}
    }



?>