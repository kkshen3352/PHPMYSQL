<?php
if(!isset($_POST["name"]) || !isset($_POST["birthday"])){
    echo "請透過表單傳送資料";
    exit();
}
$phone=$_POST["phone"];
$name=$_POST["name"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];
$telecom=$_POST["telecom"];
if(!isset($_POST["newsletter"])){
    $receive="不願意";
}else{
    $receive="願意";
}
echo "name is $name <br> birthday is $birthday.<br> 性別: $gender <br> 電信:$telecom<br> $receive 接受電子報<br>"; 
echo "phone is ";
foreach ($phone as $value){
    if($value==""){
        continue;
    }
    echo $value.", ";
}
