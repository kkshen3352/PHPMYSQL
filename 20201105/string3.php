<?php
$string="john@test.com";
//取字串
echo strstr($string, "@")."<br>";
echo strstr($string, "@",true)."<br><br>";
echo "<h3>strpos()</h3>";
$string2="Hello World!";
echo strpos($string2, "World")."<br>";
if(!strpos($string2, "Hello")===false){
    echo "not found<br>";
}else{
echo strpos($string2, "Hello")."<br>";
}
//取自串
echo "<h3>stripos()</h3>";
echo stripos($string2, "world")."<br>";
echo stripos($string2, "hello")."<br>";
//分割文字
echo "<h3>strtok</h3>";
$string3="Hello John, how are you?";
//$token=strtok($string3, " ");
//echo $token;
$stringArr=explode(" ", $string3);
//var_dump($stringArr);
for($i=0;$i<count($stringArr);$i++){
    echo $stringArr[$i]."<br>";
}
//取代文字
echo "<h3>str_replace()</h3>";
echo str_replace("World", "Kitty", $string2);
?>

