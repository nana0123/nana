<?php
$name = "Yoshiko";
if ($name == "Yoshiko") {
  echo "私は Yoshiko です";
} else if ($name != "Yoshiko"){
  echo "Yoshikoではありません。";
}
echo "\n";
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "melon","mango","Strawberry");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}
$start = 1;
$end = 100;
for($i = 1; $i <= 100; $i++)
if($i % 5 == 0){
    echo $i;
    echo "\n";
}

