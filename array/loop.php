<?php

// for loop

for($k=0;$k<=5;$k++){
    echo "$k Hello World<br>";
}

//while loop
/*
while(condition){
    //code which will execute till condition flase
}
*/
$a = 1;
while($a<10){
    // break;
    $a++;
    echo "$a hello while loop<br>";
    if($a == 8){
        break;
    }
    echo $a;//this $a will not print 8
}

?>