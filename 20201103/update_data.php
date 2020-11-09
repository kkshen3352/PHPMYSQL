<?php
require_once("../db_connect.php");
$id=4;

$sql="UPDATE users SET valid=0 WHERE id=$id";
if($conn->query($sql)===TRUE){
    echo "更新成功";
}else{
    echo "更新資料錯誤".$conn->error;
}
?>
