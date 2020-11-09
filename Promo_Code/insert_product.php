<?php
//建構資料表
require_once("db_connect.php");

$stmt = $connect->prepare("INSERT INTO promo(promo_name, promo_data, promo_class, promo_user, valid) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param('ssiii', $promo_name, $promo_data, $promo_class, $promo_user, $valid);

$promo_name = "100折價卷";
$promo_data = "登入就送";
$promo_class = 100;
$promo_user = 1;
$valid =1;

$stmt->execute();

$promo_name = "200折價卷";
$promo_data = "雙十一";
$promo_class = 200;
$promo_user = 2;
$valid =1;

$stmt->execute();

$promo_name = "300折價卷";
$promo_data = "買活動就送";
$promo_class = 300;
$promo_user = 3;
$valid =1;

$stmt->execute();

$stmt->close();
