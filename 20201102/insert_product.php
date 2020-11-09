<?php
require_once("db_connect.php");
$now = date('Y-m-d- H:i:s');

$stmt = $conn->prepare("INSERT INTO products(name, intro, category_id, price) VALUES (?, ?, ?, ?)");

$stmt->bind_param('ssii', $name, $intro, $category_id, $price);

$name = "大地綠";
$intro = "垃圾綠";
$category_id = 1;
$price = 800;


$stmt->execute();

$stmt->close();
