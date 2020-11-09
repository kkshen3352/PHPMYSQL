<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for</title>
</head>
<body>
<?php
    for($i=1; $i<10 ; $i++){
        echo "$i ";
    }

    echo "<br>";

    for($i=2, $j=2; $i<10; $i++, $j++){
        echo "$i * $j =". $i*$j ."<br>";
    }
?>
<h3>九九乘法</h3>
<?php
    for($i=2; $i<10; $i++){
        for($j=2; $j<10; $j++){
            echo "$i * $j =". $i*$j ."<br>";
        }
    }

?>
</body>
</html>