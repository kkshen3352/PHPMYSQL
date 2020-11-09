<?php
$a=array(
    0=>"A",
    1=>"B",
    2=>"C"
);
//var_dump($a);

$cars["Tesla"]=array("Model s", 335);
$cars["Tesla"]=array("Model 3", 210);
$cars["Toyota"]=array("Altis s", 70);

var_dump($cars);
echo "Toyota".$cars["Toyota"][0]."'s price is".$cars["Toyota"][1];
?>