<?php
require_once("db_connect.php");
// 搜尋id=2
$id=10;
//搜尋名子
// $sql="SELECT name, height, weight, phone, email FROM users WHERE name='Jack'";
// 搜尋id=2
$sql="SELECT name, height, weight, phone, email FROM users WHERE id=$id";
$result=$conn->query($sql);

if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        echo "姓名: ",$row["name"].", 身高: ".$row["height"]."cm,體重: ".$row["weight"]."kg, email:".$row["email"]."電話: ".$row["phone"]."<br>";
    }
}else{
    echo "沒資料";
}

$conn->close();
?>