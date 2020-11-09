<?php

//01
$name = "shiro";
if ($name == "shiro") {
    echo "私は shiro です";
} else {
    echo "shiro ではありません";
}
echo "\n";


//02
$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";


//03
$fruits = array("apple","banana","orange","grape","lemon");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}


//04
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}