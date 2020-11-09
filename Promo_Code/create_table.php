<?php
require_once("db_connect.php");
//建資料表
$sql="CREATE TABLE promo(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
promo_name VARCHAR(50) NOT NULL,
promo_data DATE,
promo_class VARCHAR(50),
promo_user VARCHAR(30),
valid VARCHAR(4)
)";

if($connect->query($sql)===TRUE){
    echo "資料表 promo 建立完成";
}else{
    echo "資建立資料表錯誤:".$connect->error;
}

$connect->close();

?>