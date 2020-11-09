<?php
require_once("db_connect.php");
$now=date('Y-m-d H:i:s');

$sql="INSERT INTO users(name, height, weight, phone, email, create_time, valid, birth_date) 
VALUES('Jack', 173, 65, '0900000000', 'jack@test.com', '$now' , 1, '1994-09-10');";
$sql.="INSERT INTO users(name, height, weight, phone, email, create_time, valid, birth_date) 
VALUES('Jacy', 165, 54, '0900000000', 'jacy@test.com', '$now' , 1, '1997-10-26');";
$sql.="INSERT INTO users(name, height, weight, phone, email, create_time, valid, birth_date) 
VALUES('Bruce', 186, 92, '0900000000', 'bruce@test.com', '$now' , 1, '1993-12-01')";


if($conn->multi_query($sql)===TRUE){
    $last_id=$conn->insert_id;
    echo "新資料輸入成功";
}else{
    echo "資料輸入錯誤.".$sql."<br>".$conn->error;
}


