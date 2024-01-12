<?php
// date(format) is a function used to output date in human readable format

/*

date format
d-> date
m-> month
F-> full name of month
y-> year in two digit
Y-> year in four digit
l-> day name of a week

seperator => -, /, .
*/
echo var_dump(date('d.F.Y'));
echo "<br>";
echo date('F');
echo "<br>";
echo date('d/m/Y');
echo "<br>";
echo date('m/d/y');
/*
time format
h=> hour (12 format)
H=> hour (24 format)
i=> minutes
s=> seconds

*/
//Timezone
echo "<br>";
echo date_default_timezone_get();

//time khud ka set kese kre

date_default_timezone_set('America/Adak');
date_default_timezone_set('Asia/Kolkata');

echo "<br>";
echo date_default_timezone_get();

echo "<br>";
echo date('H:i:sA');

//khud ka date kese bnye

$mydate = '12-01-2020';// this will be not very usefull

// DateTime class

$date1 = new DateTime('2020-05-15');
$date2 = new DateTime('2025-08-24');
$today = (int)date('Y-m-d');
echo "<br>";
var_dump($today);


$interval = $date1->diff($date2);
echo "<br>";
echo "difference: ".$interval->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
echo "<br>";
echo "difference: ".$interval->format('%a days');

//strtotime() iss function ke madad se kese date bnta h

$nextweek = strtotime("next week");
$nextweek = strtotime("+2 week");
$nextweek = strtotime("+1 month");
$nextweek = strtotime("+5 days");
echo "<br>";
echo date('d-m-y', $nextweek)

?>