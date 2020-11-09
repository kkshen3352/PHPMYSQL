<?php
require_once("db_connect.php");

$sql="SELECT * FROM users";
$result=$conn->query($sql);
//var_dump($result);
//$row=$result->fetchu_assoc();
//var_dump($row);
//echo "id: ".$row["id"].", name: ",$row["name"].", 身高: ".$row["height"]."cm,體重: ".$row["weight"]."kg, email:".$row["email"]."電話: ".$row["phone"]."<br>";
//exit;

if($result->num_rows>0){
    echo "有資料";
    while($row=$result->fetch_assoc()){
        // var_dump($row)."<br>";
        echo "id: ".$row["id"].", name: ",$row["name"].", 身高: ".$row["height"]."cm,體重: ".$row["weight"]."kg, email:".$row["email"]."電話: ".$row["phone"]."<br>";
    }
}else{
    echo "沒資料";
}

$conn->close();
?>