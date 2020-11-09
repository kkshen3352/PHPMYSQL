<?php
$a=array('a','b','c','d');
$b=array('a','c','X','y');
//a 不一樣的直列出來
print_r(array_diff($a,$b));
echo "<br>";
//b 不一樣的直列出來
print_r(array_diff_assoc($a,$b));
echo "<br>";
//a and b 交集
print_r(array_intersect($a ,$b));
echo "<br>";
