<?php
//
$input=array("a"=>"John",
    "Sam",
    "b" => "John",
    "Mary",
    "Sam"
);
$result=array_unique($input);
print_r($result);