<?php

//integer
$age = 40;

echo is_int($age);
echo "<br>";
echo PHP_INT_SIZE;
echo "<br>";
//number string
$age = '40';
$age2 = '34';
var_dump(is_int($age));
echo "<br>";
echo "numeric <br>";
var_dump($age);
// $numage = (int)$age;
$numage = intval($age);

var_dump(is_numeric($numage));
var_dump($numage);
echo "<br>";
$agesum = $age + $age2;
echo $agesum."<br>";


//float

$marks = 98.432;//decimal form
var_dump(is_int($marks));
$totalamount = 19e+6;//exponetial form 19X10^6
$totalamount = 19e-3;//exponetial form 19X10^(-3)
echo "<br>";
echo $totalamount;
var_dump(is_float($totalamount));
echo "<br>";
//infinity
var_dump(is_finite($totalamount)); //true
var_dump(is_infinite($totalamount)); //false
echo "<br>";

$totalamount = 19e+308;
echo PHP_FLOAT_MAX;
echo "<br>";
var_dump(is_finite($totalamount)); //flase
var_dump(is_infinite($totalamount)); //true

//NaN

$test = 10;
echo "<br>";
var_dump(is_nan($test)); //true
?>