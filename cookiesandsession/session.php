<?php
session_start();

$arr = ["name"=>"Azad", "last_name"=>"kumar","age"=>35];//associative array
unset($arr['last_name'], $arr['name']);//delete items of an array
echo $arr['last_name'];
echo "<br>";
print_r($arr);
//session kese create kre
$_SESSION['session_name'] = "Azad Kumar";
$azad = "suman";

//session ko delete kese kre

unset($_SESSION['session_name']);

echo $_SESSION['session_name'];
echo "<br>";
echo $azad;

?>