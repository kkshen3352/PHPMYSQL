<?php
echo "<h3>in_array</h3>";
$cars=array("Toyota","BMV","Tesla","BMV");
var_dump(in_array("BMV",$cars));
echo "<br>";
echo "<h3>array_search</h3>";
echo array_search("BMV", $cars);
echo "<br>";

echo "<h3>array_key_exists</h3>";
$students=array("John"=>"101",
    "Sam"=> "102"
);
var_dump(array_key_exists("Sam", $students));