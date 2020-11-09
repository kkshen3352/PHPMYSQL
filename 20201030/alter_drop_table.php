<?php
//require_once("db_connect.php");
$sql="ALTER TABLE users DROP COLUMN age";


if($conn->query($sql)===TRUE){
    echo "修改欄位成功";
}else{
    echo "修改欄位錯誤:".$conn->error;
}

$conn->close();