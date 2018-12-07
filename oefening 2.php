<?php

$EvenOnEven = EvenDag();
if ($EvenOnEven) {
  echo date("d-m-y") . "<br>";
  echo "Het is een even dag";
} else{
  echo date("d-m-y") . "<br>";
  echo "Het is een oneven dag";
}


function EvenDag(){

  if(date("d") % 2 > 0){
    // echo "Het is een oneven dag";
    $result = false;
    }
    else{
      // echo "Het is een even dag";
      $result = true;
    }
  return $result;
}
?>
