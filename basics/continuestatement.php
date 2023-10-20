<?php
// continue statement with all loops 
$x = 0;
while ($x < 10) {
    $y = 5;
    while($y > 0){
        echo "Looping...\n";
        $y--;
        }
        if ($x == 3) {
            break; // breaks out of the outer loop only
        }
        else{
            $x++;
        }
    }

// use continue statemet 
for ($i=0; $i<10; $i++){
    for ($j=0; $j<2; $j++) {
        if ($j==1) {
            continue;
        }
        echo "$i x $j = ".($i*$j)."\n";
    }
}



?>