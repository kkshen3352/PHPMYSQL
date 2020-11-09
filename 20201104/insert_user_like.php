<?php
require_once("../db_connect.php");

$stmt = $conn->prepare("INSERT INTO user_like(product_id, user_id) VALUES (?, ?)");
$stmt->bind_param('ii' , $product_id, $user_id);

$product_id="5";
$user_id = "5";

$stmt->execute();

$product_id="6";
$user_id = "6";

$stmt->execute();

$product_id="7";
$user_id = "7";

$stmt->execute();


$stmt->close();
