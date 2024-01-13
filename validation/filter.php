<?php

//filter_var() => is used to validate and sanitize data

//sanitize a string

$str = '<script>console.log("hello world")';
// pathinfo('path', PATHINFO_EXTENSION);
ECHO filter_var($str, FILTER_SANITIZE_STRING);

//validate an integer

$val1 = "azad";
$val1 = 15;
$val1 = 15.56;
echo "<br>";
var_dump(filter_var($val1, FILTER_VALIDATE_INT));

//terniary operator
$age_validation = filter_var($val1, FILTER_VALIDATE_INT);
$age = $age_validation?$age_validation:20;
echo "<br>";
echo "Age: ".$age;
echo "<br>";
if($age_validation){
    echo "this is a valid integer";
}else{
    echo "this is not a valid integer";
}

//email validation and sanitization

$email = "azadanand9798gmail.com<h1>hello<";

//sanitize => remove all illegal characters
echo "<br>";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
ECHO $email;
echo "<br>";
//validate => is it email or not
$is_email = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($is_email);


//url validation and sanitization
//sanitize
$url = 'https://facebook.com<script></script>';

$sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
echo "<br>Url: ";
// echo $sanitized_url;
echo $sanitized_url;
echo "<br>";

$is_valid_url = filter_var($sanitized_url, FILTER_VALIDATE_URL);
echo "<br> url: ";
var_dump($is_valid_url);
echo "<br>";
?>