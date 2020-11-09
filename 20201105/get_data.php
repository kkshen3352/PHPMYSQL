<?php
if(empty($_GET["name"])){
    echo "沒有填寫姓名";
    exit();
}
if(empty($_GET["age"])){
    echo "沒有填寫年齡";
    exit();
}
echo "姓名: ".$_GET["name"]."<br>";
echo "密碼".$_GET["password"]."<br>";
echo "年齡: ".$_GET["age"]."<br>";

//echo $_GET["email"];
if(!isset($_GET["email"])){
    echo "沒有填寫 email 的參數<br>";
}

if(empty($_GET["email"])){
    echo "沒有填寫 email";
}
 
 ?>