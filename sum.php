<?php
function product($num){
$result = 1;
$result = $num *2;
return $result;
}
echo product(1);
echo "\n";
function f($a, $b) {
$result = $a + $b;
return $result;
}
echo f(2, 3);
echo "\n";
function arr($array){
    $result = 1;
    foreach($array as $num){
        $result *= $num;
    }
return $result;
}
$array = array(1, 3, 5, 7, 9);
echo arr($array);
echo "\n";
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a);
    $max_number = $a;
 }
 return $max_number;
 }
 $arr = [1, 3, 5, 7, 9];
 echo max_array($arr);
 echo "\n";
$string = '<a href="https://www.yahoo.co.jp/">Yahoo!</a>';
$result = strip_tags($string);
echo $result;
echo "\n";
$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);
echo "\n";
$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);
echo "\n";
$now = time();
print $now;
echo "\n";
$timestamp = mktime(5, 30, 0, 20, 11, 2019);
print $timestamp;
echo "\n";
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
echo "\n";