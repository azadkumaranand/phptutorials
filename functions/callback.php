<?php
// array_map(callback_function, array);

$arr = ['azad', 'suman', 'ponung', 'khushi'];
function callback($item){
    echo strlen($item)."<br>";
    return strlen($item);
}

// callback("azad");
$check_length = callback("azadkumar");
$lenth_arr = array_map('callback', $arr);
print_r($lenth_arr);

function addition($a, $b, $c){
    return $a+$b+$c;
}
function multiplyedByTen($a){
    return $a*10;
}
echo "<br>";
echo addition(4, 74, 12);

function products($product_name, $price, $callback){
    // $price = $price*10;
    // $price *= 10;
    $price /= 2;// $price = $price/2;
    $modified_price = $callback($price);
    echo "<br>Product: $product_name Price: $modified_price";
}

products("banana", 22, 'multiplyedByTen');

?>