<?php
require_once("db_connect.php");
$now=date('Y-m-d H:i:s');

$sql="INSERT INTO users(name, height, weight, phone, email, create_time) 
VALUES('Jack', 173, 65, '0900000000', 'jack@test.com', '$now' ),('Jacy', 165, 54, '0900000000', 'jacy@test.com', '$now');";
$sql.="INSERT INTO users(name, height, weight, phone, email, create_time ) 
VALUES('Jacy', 165, 54, '0900000000', 'jacy@test.com', '$now');";
$sql.="INSERT INTO users(name, height, weight, phone, email, create_time ) 
VALUES('Bruce', 186, 92, '0900000000', 'bruce@test.com', '$now')";


if($connect->multi_query($sql)===TRUE){
    $last_id=$connect->insert_id;
    echo "新資料輸入成功";
}else{
    echo "資料輸入錯誤.".$sql."<br>".$connect->error;
}


