<?php
$arr=array('a','b','c');
//移除第一筆
array_shift($arr);
var_dump($arr)."<br>";
echo "<br>";
//替換'a'
array_unshift($arr,'A');
print_r($arr);
echo "<br>";
//移除最後一筆
array_pop($arr);
print_r($arr);
echo "<br>";
//增加至後排
array_push($arr, 'C','D');
print_r($arr);
echo "<br>";