<?php
require_once("db_connect.php");

$sql="SELECT * FROM users ORDER BY name DESC";
$result=$conn->query($sql);

if($result->num_rows>0){
    //echo "有資料";
    while($row=$result->fetch_assoc()){
        echo "id: ".$row["id"].", name: ",$row["name"].", 身高: ".$row["height"]."cm,體重: ".$row["weight"]."kg, email:".$row["email"]."電話: ".$row["phone"]."<br>";
    }
}else{
    echo "沒資料";
}

$conn->close();
?>