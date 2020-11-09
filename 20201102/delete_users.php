<?php
require_once("db_connect.php");
$sql="DELETE FROM users WHERE id=3";
if($conn->query($sql)===TRUE){
    echo "資料刪除成功";
}else{
    echo "資料刪除錯誤: ".$conn->error;
}
?>