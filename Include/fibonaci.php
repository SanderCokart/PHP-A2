<?php
function fibonaci($input){
  $previous = -1;
  $result = 1;
  $sum = 0;
  $resultarray = array();
   for ($i=0; $i <= $input; $i++) {
     $sum = $previous + $result;
     $previous = $result;
     $result= $sum;
     $resultarray[$i] = $result;
        echo ("Element $i = {$resultarray[$i]} <br>  \n");
   }
   echo "<br>the sequence is = ";
   for ($i=0; $i <= $input; $i++) {
     echo $resultarray[$i].", ";
   }
}

 ?>
