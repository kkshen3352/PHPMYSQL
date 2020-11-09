<?php
require_once("../db_connect.php");
$id=8;

$sql="UPDATE products SET category_id=2 WHERE id=$id";
if($conn->query($sql)===TRUE){
    echo "更新成功";
}else{
    echo "更新失敗" .$conn->error;
}