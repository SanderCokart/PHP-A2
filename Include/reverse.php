<?php

function reverse($number){
  if ($number < 0) {
    $result = $number + $number + $number;
    return $result;
  }
  elseif ($number > 0) {
    $result = $number - $number - $number;
    return $result;
  }
}

 ?>
