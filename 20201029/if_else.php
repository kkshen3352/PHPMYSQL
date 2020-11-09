<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if else</title>
</head>
<body>
<?php
$john_score = 95;
$sam_score = 90;
//if ($john_score > $sam_score) {
//    echo "John is better!";
//} elseif ($john_score == $sam_score) {
//    echo "John and Sam are equal";
//} else {
//    echo "Sam is better!";
//}

if ($john_score > $sam_score):
    echo "John is better!";
elseif ($john_score == $sam_score):
    echo "John and Sam are equal";
else:
    echo "Sam is better!";
endif;


?>
</body>
</html>
