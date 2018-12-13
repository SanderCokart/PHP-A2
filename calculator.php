<?php

$option_ = $_REQUEST['option'];//selected option comes in from HTML FILE

$firstfield_ =+ $_REQUEST['firstfield'];//this is the first numeric entry
$secondfield_ =+ $_REQUEST['secondfield'];//this is the second numeric entry
if (empty($firstfield_. $secondfield_)) {
  $firstfield_=0;
  $secondfield_=0;
}
$check_ = $_REQUEST['check'];//this is where the check comes in


//these are all the functions for add, devide, factorial, multiply, multiplyrec, reserve, subtract
Include("include/multiplyrec.php");
Include("include/multiply.php");
Include("include/devide.php");
Include("include /add.php");
Include("include/subtract.php");
Include("include/factorial.php");
Include("include/reverse.php");
Include("include/checkfunctions.php");

choice($option_, $firstfield_,$secondfield_,$check_);

// FUNCTIONS

function fib($input){
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

//use echo add,echo subtract, echo multiply(rec), echo devide, echo reverse,
//echo factorial, checkadres, checkgender, checkemail, checkphone, checkpostcode,
//checknum, checkalfa or echo fib

// $options = array("add","subtract","multiply","devide","factorial","fib","reverse","multiplyrec","checkgender");
//
//   for ($i=0; $i < sizeof($options); $i++) {
//     if ($option == $options[$i]) {
//       echo $options[$i]($firstfield,$secondfield);
//     }
//   }


function choice($option, $firstfield, $secondfield, $check){
switch ($option) {
  case 'add':
    echo add($firstfield,$secondfield);
    break;

  case 'subtract':
    echo subtract($firstfield,$secondfield);
    break;

  case 'multiply':
    echo multiply($firstfield,$secondfield);
    break;

  case 'devide':
    echo devide($firstfield,$secondfield);
    break;

  case 'factorial':
    echo factorial($firstfield|$secondfield);
    break;

  case 'fib':
    echo fib($firstfield|$secondfield);
    break;

  case 'reverse':
    echo reverse($firstfield|$secondfield);
    break;

  case 'multiplyrec':
    echo multiplyrec($firstfield|$secondfield);
    break;

  case 'checkgender':
    echo checkgender($check);
    break;

  default:
    echo "something went wrong...sorry";
    break;
  }
}

 ?>
