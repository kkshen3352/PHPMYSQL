<?php
require_once("db_connect.php");
$sql="CREATE TABLE new_users LIKE users";
if($conn->query($sql)===TRUE){
    echo "資料表新增成功";
}else{
    echo "資料表新增失敗".$conn->error;
}
?>