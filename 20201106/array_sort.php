<?php
$cars=array("Toyota"=>"Alits",
    "BMV"=>"530i",
    "Tesla"=>"Model S"
);
//asort
asort($cars);
print_r($cars);
echo "<br>";
//反排序
rsort($cars);
print_r($cars);
echo "<br>";

$array1=$array2=array("id_22", "id_10", "id_2", "id_1");
asort($array1);
print_r($array1);
echo "<br>";
natsort($array2);
print_r($array2);