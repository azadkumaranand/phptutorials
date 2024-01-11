<?php

//cookie => cookie is used to identify user by server
//setcookie(name, value, expiry_date, path, domain);
echo time();
echo "<br>";
setcookie('test', 7845, time()+20000, '/', 'localhost');


echo $_COOKIE['test'];
?>