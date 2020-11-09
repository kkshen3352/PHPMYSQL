<?php
//require_once("db_connect.php");

$sql="DROP TABLE users";

if($conn->query($sql)===TRUE){
    echo "資料表 users 刪除成功";
}else{
    echo "刪除資料表錯誤: ".$conn->error;
}

$conn->close();

?>