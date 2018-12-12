<?php
echo multiply(25,5);

function multiply($a, $b) {
 if ($a < 1 || $b < 1) {
 return 0;
 } else {
 return multiply($a-1, $b) + $b;
}
 }

function add($number1, $number2){
  $result = $number1 + $number2;
  return $result;
}

function subtract($number1, $number2){
  $result = $number1 - $number2;
  return $result;
}

function factorial($number){
  if($number < 1){
    return 1;
  }

  return $number * factorial($number - 1);
}
 ?>
