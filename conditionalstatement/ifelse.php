<?php

/*
if(condition){
    //code which will execute when condition is true
}
echo "hello world";
*/
/*
if(condition){
    //code which will execute when condition will be true
}else{
    //code which will execute when condition will be false
}
*/

$a = 5;

if($a == 5){
    echo "value of a is 5";
}else{
    echo "value is not equal to 5";
}
echo "<br>";
$a = 100;
if($a >= 10){
    echo "value of a is two digit";
}elseif($a <= 9){
    echo "value of a is single digit";
}elseif($a == 100){
    echo "value of a is 100";
}else{
    echo "value is not a number";
}

echo "<br>";

$a = 100;
$b = 0;
if($a > 10){
    $b = 100;
}elseif($a <= 10){
    $b = 200;
}
echo $b;

//shorthand of above code
$b = $a>10?100:200;
//terniory operator => condition?'trueval':'falseval'
echo "<br>";
$a = 100;

$b = $a>10?"Hello":"world";

echo $b;

//switch statement;
$a = 34;
/*
switch(expression){
    case val1:
        //first code;
        break;
    case val2:
        //second code;
        break;
    case val3:
        //third code
        break;
    default:
        //default code
}
*/
$a = 445;
echo "<br>";
switch($a){
    case 23:
        echo "value of a is 23";
        break;
    case 35:
        echo "value of a is 35";
        break;
    case 45:
        echo "value of a is 45";
        break;
    default:
        echo "value didn't matched with any case";
}

?>