<?php
session_start();
//cookie => cookie ka use server user ke browser me kuch information(data) ko store krne ke liye krata h taki next time server is user identify kr paye
//setcookie(name, value, expiry_date, path, domain);
// time() function ye aapko unix timestamp deta (1 jan 1970)
echo time();
echo "<br>";

//cookie kese set krte h
setcookie('test', 7845, time()+86400, '/', 'localhost');

//cookie ko delete kese kre

// setcookie('test', 7845, time()-1, '/', 'localhost');


echo "<br>";
echo $_COOKIE['test'];
echo "<br>";
echo $_SESSION['session_name'];
?>