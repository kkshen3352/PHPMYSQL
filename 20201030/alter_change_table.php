<?php
require_once("db_connect.php");
//$sql="ALTER TABLE users ADD COLUMN age INT(3)";
//$sql="ALTER TABLE users CHANGE COLUMN name name VARCHAR(30), ADD INDEX(name)";
$sql="ALTER TABLE users CHANGE COLUMN email email VARCHAR(50), ADD INDEX(email)";



if($conn->query($sql)===TRUE){
    echo "修改欄位成功";
}else{
    echo "修改欄位錯誤:".$conn->error;
}

$conn->close();