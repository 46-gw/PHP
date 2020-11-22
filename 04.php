<?php

// PHP/Laravel 04


//01
function double($a,$b){

    // $result は結果を保存する変数
    $result = $a*$b;
    return $result;
}

$a=3;
$b=5;
echo double($a,$b);

echo "\n";


//02
function sum($a,$b){
    $result = $a + $b;
    return $result;
}
echo sum(3,5);
echo "\n";


//03
$arr = array(1,3,5,7,9);
echo array_product($arr);
echo "\n";


//04
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
            $max_number =  $value;
 }

 return $max_number;
}
echo max($arr);
echo "\n";



//05
//strip_tags
$k5_1 = '<a href="https://tech-boost.jp/">tech boost</a>';
$result = strip_tags($k5_1);
echo $result;
echo "\n";

//array_push
$k5_2 = array("red","blue","green","black");
array_push($k5_2,"white","yellow");
print_r($k5_2);
echo "\n";

//array_merge
$k5_3_1 = array("apple","lemon");
$k5_3_2 = array("peach","grape");
$k5_3_3 = array("orange");
$k5_3 = array_merge($k5_3_1,$k5_3_2,$k5_3_3);
print_r($k5_3);
echo "\n";

//time
$now = time();
echo $now;
echo "\n";
//mktime
$k5_4 = mktime (0,0,0,2,27,1996);
echo date('Y/m/d H:i:s', $k5_4 );
echo "\n";

//date
echo date('Y/m/d');
echo "\n";