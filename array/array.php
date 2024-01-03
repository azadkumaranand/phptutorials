<?php
// echo "hello guys what ";
$a = 456;//data type => integer
$b = "abdc";//data type => string
$c = 75.26;//data type => float

// $a = 456, "abdc"// you can't store more than one value in a varialbe

//array is a data type whcih store multiples values of any data type in one variable

//index array

$arr1 = array(456, "abdc", 75.26, ["azad", 36, array("Khushi", 45)]);//first way to declear an array
$arr2 = [456, "abdc", 75.26, ["azad", 36, array("Khushi", 45)]];
// var_dump($arr1[3][1]);
var_dump($arr2[3][2][0]);


// associative array

$arr1 = ["name"=>"sultan", "age"=>15, "class"=>"11th"];
$arr2 = ["group"=>"sultan", "rating"=>4.8, "prodcts"=>['watch', 'mobile', 'laptop', 'table', 'chair']];
echo "<br>";
// var_dump($arr2["prodcts"]);
echo "<pre>";
print_r($arr2["prodcts"]);
echo "</pre>";
?>