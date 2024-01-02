<?php

$x = 5;
//post increment
echo $x++;
echo "<br>";
echo $x;
//pre increment
$x = 6;
echo "<br>";
echo ++$x;
echo "<br>";
echo $x;

//post decrement
$x = 8;
echo "<br>";
echo $x--;
echo "<br>";
echo $x;
//pre decrement
$x = 18;
echo "<br>";
echo --$x;
echo "<br>";
echo $x;

$z = 6;

$y = '5';
echo "<br>";
echo var_dump($z !== $y);
echo "<br>";
$y = 16;
$z = 16;

echo $y <=> $z;

echo "<br>";
$x = 7;
$y = 8;
$z = 9;
var_dump($x == $y and $x == $z); //and operator return true only if both side is true
echo "<br>";
var_dump($x == $y or $x == $z); //or operator return false only if both side is false

?>