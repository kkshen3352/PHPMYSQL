<?php
//array_slice
echo "<h3>array_slice</h3>";
$input=array('a','b','c','d','e');
$output=array_slice($input, 0 , 4);
var_dump($output);
echo "<br>";

//array_splice
echo "<h3>array_splice</h3>";
array_splice($input,1,3,'jhon');
var_dump($input);
echo "<br>";

//array_rand(隨機)
echo "<h3>array_rand</h3>";
$myArr=array('a','b','c','d','e');
$result=array_rand($myArr,2);
//var_dump($result);
echo $myArr[$result[0]].", ".$myArr[$result[1]];
echo "<br>";

//array_flip
echo "<h3>array_flip</h3>";
$cars=array("BMV","Toyota","Tesla");
$result=array_flip($cars);
var_dump($result);