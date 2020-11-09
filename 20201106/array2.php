<?php
$myArray1[0][0]="00";
$myArray1[0][1]="01";
$myArray1[1][0]="10";
$myArray1[1][1]="11";
//var_dump($myArray1);
//print_r($myArray1);

$myArray2=array(array(1,2),array(3,4));
//print_r($myArray2);
// echo $myArray2[0][0];
// echo $myArray2[0][1];
// echo $myArray2[1][0];
// echo $myArray2[1][1];

$name=array("John","Sam","Mary");
$height=array(180,173,165);
$weight=array(83,72,50);
$student_data=array($name, $height, $weight);
//var_dump($student_data);
//echo $student_data[0][0]."身高 ".$student_data[1][0]."cm, 體重:".$student_data[2][0]."kg";

$student_data=array("Lee",200,true);
var_dump($student_data);

?>