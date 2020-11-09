<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
<?php
//    $id=0;
//    switch ($id){
//        case 0:
//            echo "apple";
//            break;
//        case 1:
//            echo "orange";
//            break;
//        case 2:
//            echo "banana";
//            break;
//    }

$status=0;
// .... .... .... .. ...

switch($status){
    case 0:
        echo "未登入";
        break;
    case 1:
        echo "已登入";
        break;
    case 2:
        echo "未完成註冊";
        break;
    case 3:
        echo "已被停權";
        break;
}




?>
</body>
</html>