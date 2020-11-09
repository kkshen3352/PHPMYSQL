<?php
require_once("../db_connect.php");

$user_id=1;

$user_sql = "SELECT * FROM users WHERE id=$user_id";
$result_user = $conn->query($user_sql);
while ($row_user = $result_user->fetch_assoc()){
    $user_name = $row_user["name"];
}

$sql="SELECT user_like.*, products.name AS product_name FROM user_like 
JOIN products ON user_like.product_id = products.id 
WHERE user_like.user_id = $user_id";

$result = $conn->query($sql);
//var_dump($result);

echo "<h3>" .$user_name." 的收藏清單</h3>";
if ( $result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo $row["product_name"]. "<br>";
    }
}