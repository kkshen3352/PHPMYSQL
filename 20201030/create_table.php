<?php
//$server_name="localhost";
//$user_name="root";
//$password="12345";
//$db_name="example";
//
//$conn=new mysqli($server_name, $user_name, $password, $db_name);
//if($conn->connect_error){
//    die("連線錯誤:". $conn->connect_error);
//}
require_once("db_connect.php");

$sql="CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
valid INT(4),
birth_date DATETIME
)";

if($conn->query($sql)===TRUE){
    echo "資料表 users 建立完成";
}else{
    echo "資建立資料表錯誤:".$conn->error;
}

$conn->close();

?>

-- 
-- height FLOAT,
-- weight FLOAT,
-- name VARCHAR(30) NOT NULL,
-- phone VARCHAR(30),
-- email VARCHAR(50),
-- create_time DATETIME,