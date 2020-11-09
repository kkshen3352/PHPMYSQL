<?php
require_once("db_connect.php");

$sql="SELECT name, height, weight, phone, email FROM users";
$result=$conn->query($sql);

if($result->num_rows>0){
    //var_dump($row)."<br>";
    while($row=$result->fetch_assoc()){
        echo "姓名: ",$row["name"].", 身高: ".$row["height"]."cm,體重: ".$row["weight"]."kg, email:".$row["email"]."電話: ".$row["phone"]."<br>";
    }
}else{
    echo "沒資料";
}

$conn->close();
?>