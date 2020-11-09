<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP!!</title>
    <style>
        .box{
            width:200px;
            height:200px;
            background:pink;
            margin:20px;
        }
    </style>
</head>
<body>
    Hello World
    <?php 
        echo "Hello World";
    ?>

    <?php
        echo "<br>Hello World!"
    ?>
    <?php
        echo "<div>Hello World!</div>"
    ?>
    <?php
        echo "<div class='box'>Hello World</div>"
    ?>
    <!-- 好讀寫 -->
    <div class='box'>
    <?php 
        echo "Hello World"?>
    </div>
    <!-- 簡寫 -->
    <div class='box'>
    <?= "Hello World =!"?>
    </div>
</body>
</html>