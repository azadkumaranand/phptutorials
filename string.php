<?php
'azad kumar anand';
"azad kumar anand";

$name = "Azad Kumar";

//difference between single quotes and double quotes

echo 'my name is $name';
echo "<br>";
echo "my name is $name";

//some important string functions

$myString = "Hello guys my name is Lakhan";

//strlen function return length of string means number of character in string
echo "<br>";
echo strlen($myString);
//str_word_count function return number of words in a string;
echo "<br>";
echo str_word_count($myString);

//strpos function search for a string in a parent string and return first position of that word
$findname = "Lakhan";
// strpos($myString, $findname);
echo "<br>";
echo strpos($myString, "Lakhan");

//strtoupper function return string in upper case
echo "<br>";
echo strtoupper($myString);

//strtoupper function return string in upper case
echo "<br>";
echo strtolower($myString);

//str_replace function replace word in a string with new word
echo "<br>";
$modifiedString =  str_replace('Lakhan', 'Azad', $myString);
echo $modifiedString;
//Note: these string functions are not affect actual string
echo "<br>";
echo $myString;
//strrev function reverse the string
echo "<br>";
echo strrev($findname);
//Note: these string functions are not affect actual string
echo "<br>";
echo $findname;

//trim function remove space character from start and end
$mystring1 = "   azad kumar   ";
echo "<br>";
echo strlen($mystring1);
echo "<br>";
echo $mystring1;
$trimedString = trim($mystring1);
echo "<br>";
echo strlen($trimedString);
echo "<br>";
echo $trimedString;

//explode function split the string with separator and convert it in array
$myArray = explode(" ", $myString );
$myArray = explode("n", $myString );
echo "<br>";
print_r($myArray);

//Concatenation
$name = "azad";
$surname = "kumar";
// echo $name, $surname;
echo $name." ".$surname." "."Krishna";

//substr function slice a pice of string part
$mystring2 = "Hello world this is someone";
echo "<br>";
echo substr($mystring2, 6, 10);
echo "<br>";
//for negative start count from end when you count meet starting value then slice length of string from there
echo substr($mystring2, -10, 6);

echo "<br>";
// echo 'azad's' //-> wrong way to do
$surname = "kumar";
echo "azad $surname";
echo "<br>";
echo "azad\"s";
echo "<br>";
echo "azad's";
echo "<br>";
// echo "azad\r\nkumar";
echo "azad\t\t\t\tkumar";



?>
