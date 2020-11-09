<?php
require_once("db_connect.php");
//$now=date('Y-m-d H:i:s');

$sql="INSERT INTO users(name, height, weight, phone, email, create_time, valid, birth_date) 
VALUES('Thomas', 182, 88, '0900000000', 'thomas@test.com', '$now' , 1, '1989-02-15')";

if($conn->query($sql)===TRUE){
    $last_id=$conn->insert_id;
    echo "新資料輸入成功, 編號為 $last_id";
}else{
    echo "資料輸入錯誤.".$sql."<br>".$conn->error;
}


