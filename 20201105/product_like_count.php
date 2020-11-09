<?php
require_once("../db_connect.php");
//物品收藏
$sql = "SELECT products.name 
AS product_name, user_like.*,
COUNT(user_like.product_id) 
AS like_count 
FROM user_like 
JOIN products 
ON user_like.product_id = products.id 
GROUP BY user_like.product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["product_name"] . ", 收藏人數: " . $row["like_count"];
        echo "<br>";
    }
} else {
    echo "沒有收藏資料";
}
