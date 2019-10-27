<?php
$integer = 20;
echo $integer;
echo "\n";
$string = "abc";
echo $string;
$new_integer = $integer + 10;
echo $new_integer;
$array = [2017, 2018, 2019, 2020];
echo $array[0];
echo $array[2];
echo 'hello php!';
$a = 3;
$b = 7;
echo $a+$b;
echo "\n";
$array_month= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
echo $array_month[7];
echo "\n";
$hello = "Hello.";
$name = "Yoshiko";
$world ="’s World!";
echo "\n";
echo $hello . $name . $world;
$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;
echo "\n";
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar["December"];