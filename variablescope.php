<?php
{

}
$var1 = "variable global1";
static $var2 = "variable global2";
$var3 = "variable global3";
$varforfunc = "global variable for function";
echo "<br>";
echo $var2;
{
    $var2 = "variable local";
}
echo "<br>";
echo $var2;
if(1){
    $var2 = "variable local123";
    // echo "<br>";
    // echo $var1;
    // echo "<br>";
}
echo "<br>";
echo $var2;
echo "<br>";
// for(){
//     echo $var1;
// }
function func1 (){
    $var3 = "dkajfl";
    global $var1, $var2, $var3, $varforfunc;
    echo $varforfunc;
    echo "<br>";
    $varforfunc = "global variable changed inside function";
    // $GLOBALS['var1'] = "changed global variables";
    // $GLOBALS['var1'];
    // $GLOBALS['var2'];
    // $GLOBALS['var3'];
    echo $varforfunc;
}
print "<h1>function called</h1>";
print "<br>";
func1();
echo "<br>";
echo $var3, $var2;//echo can take multiple arguments
print $var3;//print only take one argument

?>