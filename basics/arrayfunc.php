<?php
$cars = array(
     "Volvo",
     "BMW",
     "Saab",
     "Land Rover",
     "Mercedes-Benz",
     "Mahindra-Thar"
    );

$cars2 = array(
     "car 1",
     "car 2",
     "Car 3",
     "car 4",
     "car 5",
     "car 6"
    );
$x = 5;
if (is_array($cars)){
    echo "cars is an array";
}else{
    echo "cars is not an array";
}

echo array_search('Saab', $cars);
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<pre>";
print_r(array_slice($cars,2));
echo "</pre>";


echo "<pre>";
print_r(array_chunk($cars,2));
echo "</pre>";

echo "<pre>";
print_r(array_pop($cars));
echo "</pre>";

echo "<pre>";
print_r(array_push($cars, "Alto"));
print_r($cars);
echo "</pre>";

echo "<pre>";
print_r(array_keys($cars));
echo "</pre>";

echo "<pre>";
print_r(array_key_exists("5",$cars));
echo "</pre>";

echo "<pre>";
print_r(count($cars));
echo "</pre>";

echo "<pre>";
print_r(array_count_values($cars));
echo "</pre>";



echo "<pre>";
print_r(array_merge($cars,$cars2));
echo "</pre>";

function p($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

p($cars2);


function vote($age){
    if ($age>=18) {
        return "yes You can vote";
    }else{
        return "No you can not vote";
    }
}
echo vote(30);
echo vote(10);
echo vote(100);


?>