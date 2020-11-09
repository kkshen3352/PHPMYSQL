<?php
$arr=array(1,2,3,4);

// for($i=0;$i<count($arr); $i++){
//     echo $arr[$i]."<br>";
// }

// foreach($arr as $value){
//     echo $value."<br>";
// }
// $arr=array("BMV","Toyota", "Tesla");
// foreach($arr as $index => $value){
//     echo "Index: $index, value is $value<br>";
// }

// $a=array(
//     "John"=>"asles",
//     "Sam"=>"manager",
//     "Mary"=>"secretary"
// );
// foreach($a as $name => $title){
//     echo "$name is a $title.<br>";
// }

$a[0][0]="John";
$a[0][1]="sales";
$a[1][0]="Sam";
$a[1][1]="manager";

foreach($a as $employee){
//    var_dump($employee);
//    echo $employee[0]. " is a $employee[1]<br>";
//    foreach($employee as $index => $value){
//    echo $value."<br>";
//} 

    echo $employee[0]. " is a ";
    foreach($employee as $index => $value){
        if($index==1){
            echo "$value.<br>";
        }
    }
}