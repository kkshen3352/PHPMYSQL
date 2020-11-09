<?php
require_once("db_connect.php");

$sql="CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
height FLOAT,
weight FLOAT,
name VARCHAR(30) NOT NULL,
phone VARCHAR(30),
email VARCHAR(50),
create_time DATETIME
)";

if($connect->query($sql)===TRUE){
    echo "資料表 $sql 建立完成";
}else{
    echo "資建立資料表錯誤:".$connect->error;
}
?>