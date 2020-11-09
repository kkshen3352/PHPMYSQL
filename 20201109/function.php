<?php
//myEcho();

function myEcho(){
    echo "my echo";
}

function addNum($a, $b=1){
    $c=$a+$b;
    echo $c;
}

//addNum(a);
// addNum(10);
// echo "<br>";
// addNum(10,3);

function add2(&$x,$y){
    $x+=$y;
    $y++;
}

$a=10;
$b=2;
add2($a,$b);

//echo "Now a is $a and b is $b ";

//陣列加總 
function sum(){
    $i=func_num_args();
    echo "Have $i arguments <br>";
    $result=0;
    $input=func_get_args();
    //var_dump($input);
    foreach($input as $n){
        $result+=$n;
    }
    return $result;
}
echo sum(1,2,3,4);