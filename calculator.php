<?php
$option = $_REQUEST['option'];
// $firstfield = $_REQUEST['firstfield'];
// $secondfield = $_REQUEST['secondfield'];
$check = $_REQUEST['check'];


Include("include/multiplyrec.php");
Include("include/multiply.php");
Include("include/devide.php");
Include("include/add.php");
Include("include/subtract.php");
Include("include/factorial.php");
Include("include/reverse.php");




function checkalfa($input){
  if (preg_match("/[^a-z]/", $input)) {
    echo "its a match";
  } else {
    echo "its not a match";
  }
  }

function checknum($input){
  if (is_numeric($input)) {
    echo "your input is numeric";
  } else {
    echo "your input is not numeric";
  }
}

function checkpostcode($input){
  if (preg_match("/^[0-9]{4}[A-Z]{2}/", $input)) {
    echo "your postcode is valid";
  } else {
    echo "your postcode is not valid";
  }
}

function checkphone($input){
  if (preg_match("/^31[0-9]{9}|^06[0-9]{8}/", $input)) {
    echo "your phone number is valid in the netherlands";
  } else {
    echo "your phone number is NOT valid in the netherlands";
  }
}

function checkgender($input){
  if (preg_match("/male|female|other/i", $input)) {
    echo "you are indeed a $input";
  } else {
    echo "I guess you have no gender";
  }
}

function checkemail($input){
  if (preg_match("/^.+@.+\..+/", $input)) {
    echo "your email is valid";
  } else {
    echo "your email is INVALID!";
  }
}

function checkadres($input){
  if (preg_match("/^[a-z]+\s[0-9]+/i", $input)) {
    echo "this adres is valid";
  }else {
    echo "this adres is invalid!";
  }
}

function fib($input){
  if ($input <= 2) {
    return 1;
  }
  return fib($input-1) + fib($input-2);
}


//use echo add,echo subtract, echo multiply(rec), echo devide, echo reverse,
//echo factorial, checkadres, checkgender, checkemail, checkphone, checkpostcode,
//checknum, checkalfa or echo fib

$options = array("add","subtract","multiply","devide","factorial","fib","reverse","multiplyrec","checkgender");

  for ($i=0; $i < sizeof($options); $i++) {
    if ($option == $options[$i]) {
      echo $options[$i]($firstfield,$secondfield);
    }
  }

// switch ($option) {
//   case 'add':
//     echo add($firstfield,$secondfield);
//     break;
//
//   case 'subtract':
//     echo subtract($firstfield,$secondfield);
//     break;
//
//   case 'multiply':
//     echo multiply($firstfield,$secondfield);
//     break;
//
//   case 'devide':
//     echo devide($firstfield,$secondfield);
//     break;
//
//   case 'factorial':
//     echo factorial($firstfield|$secondfield);
//     break;
//
//   case 'fib':
//     echo fib($firstfield|$secondfield);
//     break;
//
//   case 'reverse':
//     echo reverse($firstfield|$secondfield);
//     break;
//
//   case 'multiplyrec':
//     echo multiplyrec($firstfield|$secondfield);
//     break;
//
//   case 'checkgender':
//     echo checkgender($check);
//     break;
//
//   default:
//     echo "something went wrong...sorry";
//     break;
// }

 ?>
