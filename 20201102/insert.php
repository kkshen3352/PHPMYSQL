<?php
require_once("db_connect.php");
$now = date('Y-m-d- H:i:s');

$stmt = $conn->prepare("INSERT INTO users(name, height, weight, phone, email, create_time,valid, birth_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('sddsssis', $name, $height, $weight, $phone, $email, $create_time, $valid, $birth_date);

$name = "JoJo";
$height = 180;
$weight = 90;
$phone = "0953336785";
$email = "JoJo@gmaul.com";
$create_time = $now;
$valid = 1;
$birth_date = "1992-10-15";
$stmt->execute();

$name = "KoKo";
$height = 188;
$weight = 78;
$phone = "0955386795";
$email = "KoKo@gmaul.com";
$create_time = $now;
$valid = 1;
$birth_date = "1993-03-03";

$stmt->execute();

$stmt->close();
