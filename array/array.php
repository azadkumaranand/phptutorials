<?php
// echo "hello guys what ";
$a = 456;//data type => integer
$b = "abdc";//data type => string
$c = 75.26;//data type => float

// $a = 456, "abdc"// you can't store more than one value in a varialbe

//array is a data type whcih store multiples values of any data type in one variable

//index array

$arr1 = array(456, "abdc", 75.26, ["azad", 36, array("Khushi", 45)]);//first way to declear an array
$arr2 = [456, "abdc", 75.26, ["azad", 36, array("Khushi", 45)]];
// var_dump($arr1[3][1]);
var_dump($arr2[3][2][0]);


// associative array

$arr1 = ["name"=>"sultan", "age"=>15, "class"=>"11th"];
$arr2 = ["group"=>"sultan", "rating"=>4.8, "prodcts"=>['watch', 'mobile', 'laptop', 'table', 'chair']];
echo "<br>";
// var_dump($arr2["prodcts"]);
echo "<pre>";
print_r($arr2["prodcts"]);
echo "</pre>";
echo "<br>Today Class<br>";
$students = ["Sultan", "salman", "mugle ajam", "azad"];

echo "<pre>";
print_r($students);
echo "</pre>";

//how can i update the array items
$students[2] = "Ponung";
$students[3] = "Ponung1";
$students[1] = "Ponung2";

for($i=0;$i<4;$i++){
    $students[$i] = "Ponung$i";
}

echo "<pre>";
print_r($students);
echo "</pre>";

//how can i add item from existing array at the end
array_push($students, "Azad");
// students.push("Azad"); //=> this method for pushing elements in javascript

//how can i remove item from existing array at the end

array_pop($students);
array_pop($students);
array_pop($students);

//how can i add item from existing array at the start
array_unshift($students, "Kunal");
array_unshift($students, "Bhawika");
array_unshift($students, "Roushan");

//how can i remove item from existing array at the start

array_shift($students);
array_shift($students);

echo "<pre>";
print_r($students);
echo "</pre>";

//add some more items in students array

for($i=0; $i<10;$i++){
    array_push($students, "Ponung$i");
}

echo "<pre>";
print_r($students);
echo "</pre>";

//how can i delete the array items

//unset() => this function is used to remove the array items
//this function not re-arrange the index
//unset($students,"Kunal");


//array_splice(array, starting_index, number_of_items) function is also used to delete array items
//this function also re-arrange the index
// array_splice($students, 0, 1);
array_splice($students, 1, 2);

echo "<pre>";
print_r($students);
echo "</pre>";
//make an array
$age = [];
for($i=1; $i<=10;$i++){
    if($i > 6){
        array_push($age, "Ponung$i");
    }else{
        array_push($age, $i);
    }
}
//sort() => sort the array in assending order
//rsort() => sort the array in desending order
rsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";
//asort() => sort the associative array in assending order according to values
//ksort() => sort the associative array in assending order according to keys

$arr = ["Name"=>"azad","nAme1"=>"sumit","name2"=>"gulshan", "name3"=>"priyanshu"];
asort($arr);
ksort($arr);

//array_change_key_case(array, CASE_UPPER);
$changed_arr = array_change_key_case($arr, CASE_LOWER);

echo "<pre>";
print_r($changed_arr);
echo "</pre>";

//count() => return number of items in an array
echo count($arr);

//array_chunk(array, chunk_size) => this function split the array in an array with chunk_size and return an array
array_chunk($students, 2);
echo "<pre>";
print_r(array_chunk($students, 2));
echo "</pre>";


//array_diff()
echo "<pre>";
print_r(array_diff($students, $age));
echo "</pre>";

//array_combine(array1, array2) => comine two array to produce an associative array
array_pop($students);
echo "<pre>";
print_r(array_combine($students, $age));
echo "</pre>";

//array_map('functionName', $arrayName)

$arrayName = [456, "abdc", 75.26, "azad", 36, "Khushi", 45];
echo count($arrayName)."<br>";

function funName($e){
    $x = 5;
    echo "Hello array map $e<br>";
}

for($i=0;$i<count($arrayName);$i++){
    echo $arrayName[$i]." ";
}

echo "<br>";

array_map('funName', $arrayName);

array_map(function($eele){
    echo $eele." ";
}, $arrayName);

//array_merge($arr1, $arr2, ...)
$arr1 = [];
$arr2 = [];
$arr3 = [];
for ($i=0; $i < 10; $i++) { 
   array_push($arr1, $i);
   array_push($arr2, $i*5);
   array_push($arr3, $i*10);
}
echo "<br>";
print_r($arr3);
echo "<br>";
echo "<pre>";
print_r(array_merge($arr1, $arr2, $arr3));
echo "</pre>";

//array_rand($arrayName, size);
$array = [];
for ($i=0; $i < 10; $i++) { 
    $GLOBALS['array'];
    // $GLOBALS['array'] and $array is same
    array_push($GLOBALS['array'], "Ramesh$i");
 }
 echo "<pre>";
print_r($array);
echo "</pre>";

$rand_array = array_rand($array, 3);
echo "<pre>";
print_r($rand_array);
echo "</pre>";

echo "<pre>";
print_r($array[$rand_array[0]]);
echo "</pre>";

//access all random elements from parent array
for($i=0;$i<count($rand_array);$i++){
    echo $array[$rand_array[$i]]." ";
}
echo "<br>";
array_map(function($e){
    // global $array;
    // echo $array[$e]." ";
    echo $GLOBALS['array'][$e];
}, $rand_array);

?>