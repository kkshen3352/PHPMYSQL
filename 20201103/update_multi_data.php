<?php
require_once("../db_connect.php");
$id=1;

$sql="UPDATE users SET phone='0945677254', height=187 WHERE id=$id";
if($conn->query($sql)===TRUE){
    echo "更新成功";
}else{
    echo "更新資料錯誤".$conn->error;
}
?>
