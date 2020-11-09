<?php
if(!isset($_POST["name"])){
    echo "請透過表單傳送";
    exit();
}

require_once("../db_connect.php");

$account=$_POST["name"];
//讀取 account 並檢查 account
$sql="SELECT account FROM users WHERE account='$account'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "帳號已存在";
    exit();
}
$name=$_POST["name"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

if($password!=$repassword){
    echo "密碼不一致";
}

//註冊!!
$stmt = $conn->prepare("INSERT INTO users(account, password) VALUES (?, ?)");
$stmt->bind_param('ss', $user_account, $user_password);

$user_account=$account;
$user_password=$password;
$stmt->execute();


$stmt->close();