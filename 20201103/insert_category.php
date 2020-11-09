<?php
require_once("../db_connect.php");

$stmt = $conn->prepare("INSERT INTO category(name) VALUES (?)");
$stmt->bind_param('s' , $name);


$name = "女T";

$stmt->execute();
$stmt->close();
