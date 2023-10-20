<?php
// recursion of function 
function recursive($n) {
    if ($n == 0){
        return;
        } else{
        echo $n . " ";
        recursive($n -1); //recursive call with n-1
    }
}

$num = 5;
recursive($num);

// function countNumber($start){
//     if($start <= 10){
//         echo "$start<br/>";
//         $start++;
//         countNumber($start);
//     }else{
//         return;
//     }
// }

// countNumber(10);

?>