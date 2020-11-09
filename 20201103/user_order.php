<?php
require_once("../db_connect.php");
$user_id = 1;

$user_sql = "SELECT * FROM users WHERE id=$user_id";
$result_user = $conn->query($user_sql);

if ($result_user->num_rows > 0) {
    while ($row_user = $result_user->fetch_assoc()) {
        echo $row_user["name"] . "的購買資料<br>";
    }
}
$sql = "SELECT user_order.*, products.name AS product_name, products.price FROM user_order JOIN products ON user_order.product_id = products.id
WHERE user_order.user_id=$user_id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["order_date"] . "- " . $row["product_name"] . ": 數量 "
            . $row["amount"] . ", 單價: " . $row["price"];
        echo "<br>";
    }
}
