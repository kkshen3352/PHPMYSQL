<?php
$note="global note";

function notify(){
    $note="local note";
    $global_note=$GLOBALS["note"];
    echo $note."<br>";
    echo $global_note;
}

//notify();

function static_example(){
    $a=0;
    static $b=0;
    echo "a is ".$a++." and b is ".$b++;
    echo "<br>";
}
static_example();
static_example();
static_example();
?>