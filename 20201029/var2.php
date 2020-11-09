<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>var2</title>
</head>
<body>
<?php
$a = 99; //全域變數
function show()
{
//    echo $a; //無法直接取用全域變數
//    echo $GLOBALS['a'];
    $b = 10; //區域變數
    static $c=1;
//    echo $b;
    echo "b is $b<br>";
    echo "c is $c<br>";

    $b=$b+1;
    $c=$c+1;

}

show();
show();

?>
</body>
</html>