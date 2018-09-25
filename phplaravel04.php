<?php
function sum($max){
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i * 2;
  }
  return $result;
}
echo sum(10);


function sum($a,$b){
  $result = $a + $b;
  return $result;
}
echo sum(1,4);


function arr($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  return $result;
}
$arr = array(1,3,5,7,9);
echo arr($arr);


$arr = array(5,7,1,8,6);
function max_array($arr){
  $max_number = $arr[0];
  foreach((array)$arr as $a){
    if($max_number<$a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array($arr);


$str = '<p>課題5-1 strip_tags</p>';
echo strip_tags($str);
echo "\n";

$array = array("AAAA","BBBB");
array_push($array,"CCCC","DDDD");
var_dump($array);

$item1 = ["AAA","BBB"];
$item2 = ["CCC"];
$item = array_merge($item1,$item2);
print_r($item);

echo time();
echo mktime(0,0,0,9,23,2018);

echo date('y/m/d',time());
$nextweek = time() + (7*24*60*60);
echo date('y/m/d',$nextweek);
?>
