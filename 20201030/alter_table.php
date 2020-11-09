<?php
require_once("db_connect.php");
//$sql="ALTER TABLE users ADD COLUMN age INT(3)";
//$sql="ALTER TABLE users ADD COLUMN valid TINYINT";
//birth_date
$sql="ALTER TABLE users ADD COLUMN birth_date DATE";

if($conn->query($sql)===TRUE){
    echo "新增欄位完成";
}else{
    echo "新增欄位錯誤:".$conn->error;
}

$conn->close();