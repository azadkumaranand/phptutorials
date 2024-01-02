<?php
//function is a set of code it will execute when we called it
//you can called a function multiple times
/*
function functionName (paramenter){
    //code for this function
}
*/
function greeting($n){
    echo "hello $n this is my first function<br>";
    return 12;
    echo "hello after return";//code after return will not execute
}
//how can i called a function
$funval1 = greeting("azad");
echo $funval1."<br>";
$funval2 = greeting("mousham");
echo $funval2."<br>";
$funval3 = greeting("akash");
echo $funval3."<br>";

function addition($a, $b, $c){
    return $a+$b+$c;
}

print addition(10, 12, 54);
?>