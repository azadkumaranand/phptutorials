<?php
//declear constat with define function
// define('constantName', 'constantValue', 'case-insensitive'); // IT WAS SUPPORTED IN BEFORE VERSION 7.3

define('constantName', 'constantValue');
//third argument is optional if you want to access the constant value with case insensitive
// echo constantname;
// define('constantName', 'constantValue3');
$constantName = "myvariablewithconstname";
echo constantName." ".$constantName;

//declear constant with const keyword
// const constantName = "changeing constant value";
const myConstant = "Hello constnat";

echo "<br>".myConstant;

echo "<br>".__DIR__;
echo "<br>".__FILE__;
echo "<br>".__LINE__;
ECHO "<br> ".(2**3);
?>