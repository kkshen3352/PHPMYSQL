<?php
require_once("db_connect.php");
$sql="DROP TABLE new_users";
if($conn->query($sql)===TRUE){
    echo "資料夾刪除成功";
}else{
    echo "資料夾刪除失敗".$conn->error;
}
//$conn->close();
?>