<?php
require_once("../db_connect.php");

$stmt = $conn->prepare("INSERT INTO user_order( product_id, amount, user_id, order_date) VALUES (?, ?, ?, ?)");
$stmt->bind_param('iiis', $product_id, $amount, $user_id, $order_date);


$product_id = "1";
$amount = "2";
$user_id = "1";
$order_date = "2020-10-28";

$stmt->execute();


$stmt->close();
$conn->close();