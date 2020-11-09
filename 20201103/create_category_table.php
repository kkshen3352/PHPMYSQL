<?php
require_once("../db_connect.php");

$sql="CREATE TABLE category(
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL
)";

if($conn->query($sql)===TRUE){
    echo "資料表 products 建立完成";
}else{
    echo "資建立資料表錯誤:".$conn->error;
}

$conn->close();

